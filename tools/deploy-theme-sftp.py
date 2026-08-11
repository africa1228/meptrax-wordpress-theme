"""Deploy theme/meptrax via SFTP using FileZilla saved credentials. Never prints password."""
from __future__ import annotations

import base64
import os
import re
import sys
from pathlib import Path

import paramiko

ROOT = Path(__file__).resolve().parents[1]
LOCAL = ROOT / "theme" / "meptrax"
REMOTE_CANDIDATES = [
    "/home/tradulix/meptrax.com/wp-content/themes/meptrax",
    "/meptrax.com/wp-content/themes/meptrax",
    "/wp-content/themes/meptrax",
]
MUST = [
    "assets/css/meptrax-depth.css",
    "assets/css/meptrax-depth-editorial.css",
    "inc/depth-page.php",
    "functions.php",
    "style.css",
    "assets/css/theme.css",
]


def load_filezilla_creds() -> list[dict]:
    path = Path(os.environ["APPDATA"]) / "FileZilla" / "recentservers.xml"
    xml = path.read_text(encoding="utf-8", errors="replace")
    blocks = re.findall(r"<Server>([\s\S]*?)</Server>", xml)
    out = []
    for block in blocks:
        def get(tag: str) -> str:
            m = re.search(rf"<{tag}(?:\s[^>]*)?>([\s\S]*?)</{tag}>", block, re.I)
            return m.group(1).strip() if m else ""

        pm = re.search(r"<Pass([^>]*)>([\s\S]*?)</Pass>", block, re.I)
        password = ""
        enc = "none"
        if pm:
            attrs, raw = pm.group(1) or "", (pm.group(2) or "").strip()
            em = re.search(r'encoding\s*=\s*["\']([^"\']+)["\']', attrs, re.I)
            enc = em.group(1) if em else "plain"
            if enc.lower() == "base64":
                password = base64.b64decode(raw).decode("utf-8", errors="replace")
            else:
                password = raw
        out.append(
            {
                "host": get("Host").rstrip("."),
                "port": int(get("Port") or 22),
                "user": get("User"),
                "protocol": int(get("Protocol") or 0),
                "password": password,
                "enc": enc,
                "pass_len": len(password),
                "printable": bool(re.fullmatch(r"[\x20-\x7E]+", password or "")),
            }
        )
    return out


def connect(host: str, port: int, user: str, password: str) -> paramiko.SFTPClient:
    t = paramiko.Transport((host, port))
    t.connect(username=user, password=password)
    return paramiko.SFTPClient.from_transport(t), t


def remote_exists(sftp: paramiko.SFTPClient, path: str) -> bool:
    try:
        sftp.stat(path)
        return True
    except OSError:
        return False


def ensure_dir(sftp: paramiko.SFTPClient, remote_dir: str) -> None:
    parts = [p for p in remote_dir.strip("/").split("/") if p]
    cur = ""
    for p in parts:
        cur += "/" + p
        try:
            sftp.stat(cur)
        except OSError:
            try:
                sftp.mkdir(cur)
            except OSError:
                pass


def main() -> int:
    if not LOCAL.is_dir():
        print("MISSING_LOCAL", LOCAL)
        return 1
    style = (LOCAL / "style.css").read_text(encoding="utf-8", errors="replace")
    if "Version: 1.6.4" not in style:
        print("LOCAL_STYLE_NOT_1.6.4")
        return 1

    creds = load_filezilla_creds()
    for c in creds:
        print(
            f"meta user={c['user']} proto={c['protocol']} port={c['port']} "
            f"enc={c['enc']} passLen={c['pass_len']} printable={c['printable']}"
        )

    candidates = [
        c
        for c in creds
        if c["user"] == "tradulix"
        and "dreamhost" in c["host"].lower()
        and c["protocol"] == 1
        and c["password"]
        and c["printable"]
    ]
    # unique by pass len order prefer longer first? try all
    seen = set()
    unique = []
    for c in candidates:
        key = (c["host"], c["port"], c["user"], c["password"])
        if key in seen:
            continue
        seen.add(key)
        unique.append(c)

    sftp = None
    transport = None
    used = None
    last_err = None
    for c in unique:
        try:
            print(f"try_sftp host={c['host']} port={c['port']} user={c['user']} passLen={c['pass_len']}")
            sftp, transport = connect(c["host"], c["port"], c["user"], c["password"])
            used = c
            print("SFTP_CONNECTED")
            break
        except Exception as e:  # noqa: BLE001
            last_err = str(e)
            print("SFTP_AUTH_FAIL", type(e).__name__)
            sftp = None
            transport = None

    if not sftp:
        print("NO_SFTP_CONNECTION", last_err)
        return 1

    remote_root = None
    for cand in REMOTE_CANDIDATES:
        if remote_exists(sftp, cand):
            remote_root = cand
            break
    if not remote_root:
        # list home
        try:
            print("HOME_LIST", sftp.listdir("."))
        except Exception as e:  # noqa: BLE001
            print("HOME_LIST_ERR", type(e).__name__)
        try:
            print("ABS_HOME_LIST", sftp.listdir("/home/tradulix"))
        except Exception as e:  # noqa: BLE001
            print("ABS_HOME_LIST_ERR", type(e).__name__)
        print("REMOTE_THEME_NOT_FOUND")
        sftp.close()
        transport.close()
        return 1

    print("REMOTE_OK", remote_root)
    before = sftp.listdir(remote_root)
    print("REMOTE_SAMPLE", ", ".join(before[:20]))

    files = [p for p in LOCAL.rglob("*") if p.is_file()]
    n = 0
    for f in files:
        rel = f.relative_to(LOCAL).as_posix()
        remote_path = f"{remote_root}/{rel}"
        ensure_dir(sftp, str(Path(remote_path).parent).replace("\\", "/"))
        sftp.put(str(f), remote_path)
        n += 1
        if n % 5 == 0:
            print(f"UPLOADED {n}/{len(files)}")
    print("UPLOADED_TOTAL", n)

    for m in MUST:
        st = sftp.stat(f"{remote_root}/{m}")
        print("VERIFY_OK", m, st.st_size)

    # confirm style version via download of first 300 bytes text
    with sftp.open(f"{remote_root}/style.css", "r") as fh:
        head = fh.read(400).decode("utf-8", errors="replace")
    if "Version: 1.6.4" in head:
        print("REMOTE_STYLE_VERSION 1.6.4")
    else:
        print("REMOTE_STYLE_VERSION_UNEXPECTED")
        print(head.replace("\n", " | ")[:200])
        sftp.close()
        transport.close()
        return 2

    sftp.close()
    transport.close()
    print("DEPLOY_DONE host=", used["host"], "user=", used["user"])
    return 0


if __name__ == "__main__":
    sys.exit(main())
