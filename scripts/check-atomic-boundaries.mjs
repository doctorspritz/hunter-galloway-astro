import { globby } from 'globby';
import path from 'node:path';

const levels = ['atoms','molecules','organisms','templates'];
const files = await globby(['src/components/*/*/*.{astro,tsx}']);
const errs = [];

for (const f of files) {
  const parts = f.split(path.sep);
  const level = parts[2];
  const name  = parts[3];
  const base  = path.basename(f, path.extname(f));
  if (!levels.includes(level)) continue;
  if (!name) errs.push(`Missing name folder: ${f}`);
  if (base !== name) errs.push(`File must match folder name: ${f}`);
}
if (errs.length) { console.error('❌ Atomic errors:\n' + errs.join('\n')); process.exit(1); }
console.log('✅ Atomic boundaries OK');


