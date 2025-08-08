import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';

const molecules = await globby(['src/components/molecules/*/*.astro']);
await fs.mkdir('src/pages/design-system/review/components', { recursive: true });

function demoFor(name) {
  switch (name) {
    case 'PurposeCard':
      return `<h1>${name}</h1>\n<PurposeCard title="Buy My First Home" description="Navigate your first home purchase confidently." image="/images/upgrade.webp" href="#" variant="peach" />`;
    case 'StatCard':
      return `<h1>${name}</h1>\n<StatCard value="97%" label="Loan approval rate" />`;
    case 'PhoneLink':
      return `<h1>${name}</h1>\n<PhoneLink phone="1300 088 065" />`;
    case 'Tooltip':
      return `<h1>${name}</h1>\n<Tooltip text="Helpful tip">Hover me</Tooltip>`;
    case 'CalculatorResult':
      return `<h1>${name}</h1>\n<CalculatorResult label="Borrowing Power" value="$650,000" />`;
    case 'AwardItem':
      return `<h1>${name}</h1>\n<AwardItem title="Award" image="/images/awards/Mortgage-Broker-Brisbane-Hunter-Galloway-Award-2024.webp" />`;
    default:
      return `<h1>${name}</h1>\n<!-- Add examples -->`;
  }
}

for (const f of molecules) {
  const name = path.basename(f, '.astro');
  const out = path.join('src/pages/design-system/review/components', `${name}.astro`);
  try { await fs.access(out); continue; } catch {}
  const relImport = `../../../../components/molecules/${name}/${name}.astro`;
  const content = `---\nimport ${name} from '${relImport}';\n---\n${demoFor(name)}\n`;
  await fs.writeFile(out, content, 'utf8');
  process.stdout.write(`Created demo: ${out}\n`);
}

console.log('✅ Molecule demos generated');


