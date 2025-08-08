import { globby } from 'globby';
import fs from 'node:fs/promises';

const files = await globby(['src/**/*.{astro,tsx,ts,css,scss}']);
const errors = [];
const colorRe = /#[0-9a-fA-F]{3,8}\b|rgba?\(/;
const pxRe = /(?<!var\()(?<!calc\()(?<!clamp\()\b\d+(?:\.\d+)?px\b/;

for (const f of files) {
  const s = await fs.readFile(f, 'utf8');
  if (colorRe.test(s) || pxRe.test(s)) errors.push(f);
}
if (errors.length) {
  console.error('❌ Hard-coded styles found (use design tokens):\n' + errors.join('\n'));
  process.exit(1);
}
console.log('✅ No hard-coded styles');


