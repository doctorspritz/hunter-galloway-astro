import { globby } from 'globby';
import fs from 'node:fs/promises';
import { execSync } from 'node:child_process';

function getChangedFiles() {
  try {
    const baseBranch = process.env.GITHUB_BASE_REF ? `origin/${process.env.GITHUB_BASE_REF}` : 'origin/main';
    const out = execSync(`git diff --name-only ${baseBranch}...HEAD`, { encoding: 'utf8' });
    return out.split('\n').filter(f => f && f.startsWith('src/'));
  } catch {
    return [];
  }
}

let files = getChangedFiles();
const isCI = process.env.CI === 'true' || process.env.GITHUB_ACTIONS === 'true';

// In CI: only check changed files (fail fast on new issues)
// Locally: check all files (help developers find all issues)
if (files.length === 0 && !isCI) {
  files = await globby(['src/**/*.{astro,tsx,ts,css,scss}']);
} else if (files.length === 0 && isCI) {
  console.log('✅ No relevant files changed - skipping token check');
  process.exit(0);
}

const errors = [];
const colorRe = /#[0-9a-fA-F]{3,8}\b|rgba?\(/;
const pxRe = /(?<!var\()(?<!calc\()(?<!clamp\()\b\d+(?:\.\d+)?px\b/;

for (const f of files) {
  // Ignore legacy pages, tokens, top-level pages, and story files. Review routes remain allowed.
  if (
    f.includes('/pages/legacy/') ||
    f.includes('/tokens/') ||
    (f.startsWith('src/pages/') && !f.startsWith('src/pages/design-system/review/')) ||
    f.endsWith('.stories.ts')
  ) continue;
  const s = await fs.readFile(f, 'utf8');
  if (colorRe.test(s) || pxRe.test(s)) errors.push(f);
}
if (errors.length) {
  console.error('❌ Hard-coded styles found (use design tokens):\n' + errors.join('\n'));
  process.exit(1);
}
console.log('✅ No hard-coded styles');


