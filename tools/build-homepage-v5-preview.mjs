/**
 * Builds a static homepage V5 preview HTML for local visual review (not WordPress).
 * Usage: node tools/build-homepage-v5-preview.mjs
 */
import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(__dirname, "..");
const theme = path.join(root, "theme", "meptrax");
const outDir = path.join(root, "preview");
const outFile = path.join(outDir, "homepage-v5.html");

function patternContent(file) {
  const raw = fs.readFileSync(path.join(theme, "patterns", file), "utf8");
  // Match content string in return array('content' => '...') or "content" =>
  const m = raw.match(/'content'\s*=>\s*'([\s\S]*)'\s*,\s*\n\s*\)\s*;/);
  if (!m) {
    // homepage-v5-body uses multi-line starting with quote after =>
    const m2 = raw.match(/'content'\s*=>\s*'\s*([\s\S]*?)'\s*,\s*\n\s*\)\s*;/);
    if (!m2) throw new Error(`No content string in ${file}`);
    return unescapePhp(m2[1]);
  }
  return unescapePhp(m[1]);
}

function unescapePhp(s) {
  return s
    .replace(/\\'/g, "'")
    .replace(/\\n/g, "\n")
    .replace(/\\\\/g, "\\");
}

function loadHomeLanding() {
  // Reconstruct like home-landing.php
  const hero = patternContent("hero-split.php");
  const body = patternContent("homepage-v5-body.php");
  const cta = patternContent("cta-band.php");
  return [hero, body, cta].join("\n\n");
}

function loadHeader() {
  // Stand-in for WP Navigation overlayMenu:mobile — horizontal strip on desktop,
  // hamburger + overlay ≤960px. Toggle script is preview-only (core handles this in WP).
  return `
<header class="wp-block-group meptrax-header">
  <div class="wp-block-group meptrax-header__inner">
    <div class="wp-block-group meptrax-header__light">
      <div class="wp-block-group meptrax-header__brand">
        <a class="custom-logo-link meptrax-default-logo" href="/"><img class="custom-logo" src="../theme/meptrax/assets/images/logo-mark.svg" width="48" height="48" alt="MEPTrax" /></a>
        <div class="meptrax-header__titles">
          <p class="wp-block-site-title"><a href="/">MEPTrax</a></p>
          <p class="wp-block-site-tagline">FIND. MARK. TRACK.</p>
        </div>
      </div>
      <nav class="wp-block-navigation meptrax-header__nav meptrax-nav" aria-label="Primary">
        <button
          type="button"
          class="wp-block-navigation__responsive-container-open"
          aria-expanded="false"
          aria-controls="meptrax-preview-modal-menu"
          aria-haspopup="dialog"
          aria-label="Open menu"
        >
          <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <rect x="4" y="7.5" width="16" height="1.5"></rect>
            <rect x="4" y="11.25" width="16" height="1.5"></rect>
            <rect x="4" y="15" width="16" height="1.5"></rect>
          </svg>
        </button>
        <div
          class="wp-block-navigation__responsive-container has-text-color has-background"
          id="meptrax-preview-modal-menu"
          style="color:#001f3f;background-color:#fff;"
        >
          <div class="wp-block-navigation__responsive-close">
            <button
              type="button"
              class="wp-block-navigation__responsive-container-close"
              aria-label="Close menu"
            >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
                <path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path>
              </svg>
            </button>
          </div>
          <div class="wp-block-navigation__responsive-dialog" role="dialog" aria-modal="true" aria-label="Menu">
            <div class="wp-block-navigation__responsive-container-content">
              <ul class="wp-block-navigation__container">
                <li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="/products/">Products</a></li>
                <li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="/pricing/">Pricing</a></li>
                <li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="/operational-awareness/">Operational Awareness</a></li>
                <li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="/support/">Support</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="wp-block-buttons meptrax-header__buttons">
      <div class="wp-block-button is-style-outline meptrax-btn-outline-header"><a class="wp-block-button__link" href="https://app.meptrax.com">Log in</a></div>
      <div class="wp-block-button meptrax-btn-primary meptrax-header-cta-primary"><a class="wp-block-button__link" href="https://app.meptrax.com/signup">Try MEPtrax Takeoff Free</a></div>
    </div>
  </div>
</header>
<script>
(function () {
  var nav = document.querySelector(".meptrax-header .meptrax-nav");
  if (!nav) return;
  var openBtn = nav.querySelector(".wp-block-navigation__responsive-container-open");
  var closeBtn = nav.querySelector(".wp-block-navigation__responsive-container-close");
  var panel = nav.querySelector(".wp-block-navigation__responsive-container");
  function setOpen(open) {
    if (!panel || !openBtn) return;
    panel.classList.toggle("is-menu-open", open);
    openBtn.setAttribute("aria-expanded", open ? "true" : "false");
  }
  if (openBtn) openBtn.addEventListener("click", function () { setOpen(true); });
  if (closeBtn) closeBtn.addEventListener("click", function () { setOpen(false); });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") setOpen(false);
  });
})();
</script>`;
}

function loadFooter() {
  return fs
    .readFileSync(path.join(theme, "parts", "footer.html"), "utf8")
    .replace(/\{\{MEPTRAX_APP_LOGIN_URL\}\}/g, "https://app.meptrax.com")
    .replace(/\{\{MEPTRAX_APP_SIGNUP_URL\}\}/g, "https://app.meptrax.com/signup")
    .replace(
      /\{\{MEPTRAX_COPYRIGHT_LINE\}\}/g,
      `© ${new Date().getUTCFullYear()} MEPTrax. All rights reserved.`
    );
}

let main = loadHomeLanding()
  .replace(/\{\{MEPTRAX_APP_SIGNUP_URL\}\}/g, "https://app.meptrax.com/signup")
  .replace(/\{\{MEPTRAX_APP_LOGIN_URL\}\}/g, "https://app.meptrax.com");

const html = `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MEPTrax Homepage V5 Preview (local)</title>
  <link rel="stylesheet" href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" />
  <link rel="stylesheet" href="../theme/meptrax/assets/css/theme.css" />
  <style>
    /* Preview shell: approximate WP block spacing defaults */
    body { margin: 0; }
    .wp-block-buttons { display: flex; flex-wrap: wrap; gap: 0.75rem; }
    .wp-block-button__link { display: inline-block; text-decoration: none; box-sizing: border-box; }
    .wp-block-group.alignfull { width: 100%; max-width: 100%; }
    .meptrax-v5-section.alignfull,
    .meptrax-cta-band.alignfull { width: 100%; }
  </style>
</head>
<body class="meptrax-landing-page">
${loadHeader()}
<main class="wp-block-group alignfull meptrax-front-main">
${main}
</main>
${loadFooter()}
</body>
</html>
`;

fs.mkdirSync(outDir, { recursive: true });
fs.writeFileSync(outFile, html, "utf8");
console.log("Wrote", outFile);
