import { globby } from 'globby';
import fs from 'node:fs/promises';
import { execSync } from 'node:child_process';

function getChangedFiles() {
  try {
    const base = process.env.GITHUB_BASE_REF || 'origin/main';
    const out = execSync(`git diff --name-only ${base}...HEAD`, { encoding: 'utf8' });
    return out.split('\n').filter(f => f && f.startsWith('src/'));
  } catch {
    return [];
  }
}

let files = getChangedFiles();
if (files.length === 0) {
  files = await globby(['src/**/*.{astro,tsx,ts,css,scss}']);
}

const errors = [];
const colorRe = /#[0-9a-fA-F]{3,8}\b|rgba?\(/;
const pxRe = /(?<!var\()(?<!calc\()(?<!clamp\()\b\d+(?:\.\d+)?px\b/;

for (const f of files) {
  // Ignore legacy pages, token sources, and story files
  if (f.includes('/pages/legacy/') || f.includes('/tokens/') || f.endsWith('.stories.ts')) continue;
  const s = await fs.readFile(f, 'utf8');
  if (colorRe.test(s) || pxRe.test(s)) errors.push(f);
}
if (errors.length) {
  console.error('❌ Hard-coded styles found (use design tokens):\n' + errors.join('\n'));
  process.exit(1);
}
console.log('✅ No hard-coded styles');


