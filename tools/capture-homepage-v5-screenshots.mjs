/**
 * Capture homepage V5 preview screenshots at required breakpoints.
 * Usage: node tools/capture-homepage-v5-screenshots.mjs
 */
import { chromium } from "playwright";
import path from "node:path";
import { fileURLToPath } from "node:url";
import fs from "node:fs";
import { pathToFileURL } from "node:url";

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(__dirname, "..");
const htmlPath = path.join(root, "preview", "homepage-v5.html");
const outDir = path.join(root, "preview", "screenshots");

const viewports = [
  { name: "phone-375", width: 375, height: 812 },
  { name: "phone-390", width: 390, height: 844 },
  { name: "phone-430", width: 430, height: 932 },
  { name: "tablet-768", width: 768, height: 1024 },
  { name: "laptop-1280", width: 1280, height: 800 },
  { name: "desktop-1440", width: 1440, height: 900 },
];

async function main() {
  if (!fs.existsSync(htmlPath)) {
    throw new Error("Missing preview HTML. Run build-homepage-v5-preview.mjs first.");
  }
  fs.mkdirSync(outDir, { recursive: true });
  const browser = await chromium.launch();
  const url = pathToFileURL(htmlPath).href;
  const overflowReport = [];

  for (const vp of viewports) {
    const page = await browser.newPage({
      viewport: { width: vp.width, height: vp.height },
      deviceScaleFactor: 1,
    });
    await page.goto(url, { waitUntil: "load" });
    await page.waitForTimeout(400);
    const overflow = await page.evaluate(() => {
      const doc = document.documentElement;
      return {
        scrollWidth: doc.scrollWidth,
        clientWidth: doc.clientWidth,
        overflowX: doc.scrollWidth > doc.clientWidth + 1,
      };
    });
    overflowReport.push({ ...vp, ...overflow });
    await page.screenshot({
      path: path.join(outDir, `${vp.name}-top.png`),
      fullPage: false,
    });
    await page.screenshot({
      path: path.join(outDir, `${vp.name}-full.png`),
      fullPage: true,
    });
    await page.close();
  }

  await browser.close();
  fs.writeFileSync(
    path.join(outDir, "overflow-report.json"),
    JSON.stringify(overflowReport, null, 2)
  );
  console.log(JSON.stringify(overflowReport, null, 2));
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
