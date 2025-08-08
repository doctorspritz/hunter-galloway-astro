import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';

const table = await fs.readFile('docs/COMPONENTS.md','utf8').catch(()=> '');
const listed = new Set(
  [...table.matchAll(/^\|\s*([A-Za-z0-9_-]+)\s*\|/gm)].map(m => m[1])
);

const files = await globby(['src/components/*/*/*.{astro,tsx}']);
const missing = [];

for (const f of files) {
  const name = path.basename(f, path.extname(f));
  if (!listed.has(name)) missing.push(f);
}
if (missing.length) {
  console.error('❌ Unregistered components (add to docs/COMPONENTS.md):\n' + missing.join('\n'));
  process.exit(1);
}
console.log('✅ Registry complete');


