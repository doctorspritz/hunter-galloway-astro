import puppeteer from 'puppeteer';
import { spawn } from 'node:child_process';
import fs from 'node:fs/promises';

const routes = [
  '/design-system/review',
  // add key /design-system/review/components/<Name> or /templates routes here
];

await fs.mkdir('artifacts/screenshots', { recursive: true });

const dev = spawn('pnpm', ['dev'], { stdio: 'ignore' });
await new Promise(r => setTimeout(r, 4000));

const browser = await puppeteer.launch();
const page = await browser.newPage();
for (const r of routes) {
  await page.setViewport({ width: 1280, height: 900 });
  await page.goto(`http://localhost:4321${r}`, { waitUntil: 'networkidle0' });
  const name = r.replace(/\W+/g,'_') + '.png';
  await page.screenshot({ path: `artifacts/screenshots/${name}` });
}
await browser.close();
dev.kill();


