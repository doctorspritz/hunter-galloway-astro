import { test, expect } from '@playwright/test';
import pixelmatch from 'pixelmatch';
import fs from 'fs';
import { PNG } from 'pngjs';

const pages = [
  { astro: 'http://localhost:3000/', wp: 'https://huntergalloway.com.au/' },
  { astro: 'http://localhost:3000/contact', wp: 'https://huntergalloway.com.au/contact/' }
];

pages.forEach(({ astro, wp }) => {
  test(`Visual diff for ${astro}`, async ({ page }) => {
    await page.goto(astro);
    const astroShot = await page.screenshot({ fullPage: true });
    await page.goto(wp);
    const wpShot = await page.screenshot({ fullPage: true });

    const img1 = PNG.sync.read(astroShot);
    const img2 = PNG.sync.read(wpShot);
    const { width, height } = img1;
    const diff = new PNG({ width, height });

    const mismatch = pixelmatch(img1.data, img2.data, diff.data, width, height, { threshold: 0.1 });
    fs.writeFileSync(`diff-${Date.now()}.png`, PNG.sync.write(diff));
    expect(mismatch).toBeLessThan(500);
  });
});