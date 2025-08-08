import { test, expect, devices } from '@playwright/test';
import pixelmatch from 'pixelmatch';
import fs from 'fs';
import { PNG } from 'pngjs';
import path from 'path';

const pages = [
  { name: 'home', astro: 'http://localhost:3000/', wp: 'https://huntergalloway.com.au/' },
  { name: 'contact', astro: 'http://localhost:3000/contact', wp: 'https://huntergalloway.com.au/contact/' }
];

const viewports = [
  { name: 'desktop', width: 1280, height: 800 },
  { name: 'tablet', width: 768, height: 1024 },
  { name: 'mobile', width: 375, height: 667 }
];

const baselineDir = path.join(__dirname, 'baseline');
if (!fs.existsSync(baselineDir)) {
  fs.mkdirSync(baselineDir, { recursive: true });
}

pages.forEach(({ name, astro, wp }) => {
  viewports.forEach(viewport => {
    test(`Visual diff for ${name} @ ${viewport.name}`, async ({ page }) => {
      await page.setViewportSize({ width: viewport.width, height: viewport.height });

      const baselinePath = path.join(baselineDir, `${name}-${viewport.name}.png`);

      // Fetch WordPress screenshot
      await page.goto(wp);
      await page.screenshot({ path: baselinePath, fullPage: true });

      // Astro screenshot
      await page.goto(astro);
      const astroShot = await page.screenshot({ fullPage: true });

      const wpShot = fs.readFileSync(baselinePath);
      const img1 = PNG.sync.read(astroShot);
      const img2 = PNG.sync.read(wpShot);
      const { width, height } = img1;
      const diff = new PNG({ width, height });

      const mismatch = pixelmatch(img1.data, img2.data, diff.data, width, height, { threshold: 0.1 });

      const diffPath = path.join(__dirname, `diff-${name}-${viewport.name}.png`);
      fs.writeFileSync(diffPath, PNG.sync.write(diff));

      expect(mismatch).toBeLessThan(500);
    });
  });
});
