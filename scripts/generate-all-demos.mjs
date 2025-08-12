import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';

const groups = ['atoms', 'molecules', 'organisms', 'sections'];
const patterns = groups.map(g => `src/components/${g}/*/*.astro`);
const files = await globby(patterns);

await fs.mkdir('src/pages/design-system/review/components', { recursive: true });

for (const f of files) {
  const parts = f.split(path.sep);
  const level = parts[2];
  const name = parts[3];
  const componentImport = `../../../../components/${level}/${name}/${name}.astro`;
  const out = path.join('src/pages/design-system/review/components', `${name}.astro`);
  try { await fs.access(out); continue; } catch {}

  const content = `---\nimport ${name} from '${componentImport}';\n---\n<h1>${name}</h1>\n<p>Demo placeholder. Add props and examples as needed.</p>\n<!-- <${name} /> -->\n`;
  await fs.writeFile(out, content, 'utf8');
  process.stdout.write(`Created demo: ${out}\n`);
}

console.log('✅ Generated missing demo pages for all components');


