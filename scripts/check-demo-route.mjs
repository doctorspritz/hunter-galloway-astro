import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';
import { execSync } from 'node:child_process';

function getChangedComponents() {
  try {
    const baseBranch = process.env.GITHUB_BASE_REF ? `origin/${process.env.GITHUB_BASE_REF}` : 'origin/main';
    const out = execSync(`git diff --name-only ${baseBranch}...HEAD`, { encoding: 'utf8' });
    return out
      .split('\n')
      .filter(f => /src\/components\/(atoms|molecules|organisms)\/[^/]+\/\1?[^/]*\.astro$/.test(f));
  } catch {
    return [];
  }
}

const changed = getChangedComponents();
const missing = [];

for (const f of changed) {
  const name = path.basename(f, '.astro');
  const demoPath = path.join('src/pages/design-system/review/components', `${name}.astro`);
  try { await fs.access(demoPath); } catch { missing.push({ name, demoPath }); }
}

if (missing.length) {
  console.error('❌ Missing demo routes for changed components:');
  missing.forEach(m => console.error(`- ${m.name}: expected ${m.demoPath}`));
  process.exit(1);
}
console.log('✅ Demo routes present for changed components');


