import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';

const organisms = await globby(['src/components/organisms/*/*.astro']);
await fs.mkdir('src/pages/design-system/review/components', { recursive: true });

function demoFor(name) {
  switch (name) {
    case 'HeroWidget':
      return `<h1>${name}</h1>\n<HeroWidget titleHtml={'<b>Get a home loan</b>'} benefits={[{ text: 'Benefit' }]} cta={{ text: 'Start', href: '#' }} image={{ desktop: '/images/upgrade.webp', mobile: '/images/upgrade.webp', alt: 'Alt' }} yearsExperience={'14'} reviews={{ text: '2,000+ reviews' }} variant={'general'} mediaPosition={'right'} />`;
    case 'MortgageRentCalculator':
      return `<h1>${name}</h1>\n<MortgageRentCalculator />`;
    case 'RiskWidget':
      return `<h1>${name}</h1>\n<RiskWidget title="How we reduce your risk" description="..." marketStatistic={{ value: '40%', tooltip: { content: 'Source' } }} riskItems={[{ id: 'plan', title: 'Plan', content: ['...'], icon: 'scheme' }]} />`;
    case 'WhyChoose':
      return `<h1>${name}</h1>\n<WhyChoose items={[]} />`;
    default:
      return `<h1>${name}</h1>\n<${name} />`;
  }
}

for (const f of organisms) {
  const name = path.basename(f, '.astro');
  const out = path.join('src/pages/design-system/review/components', `${name}.astro`);
  try { await fs.access(out); continue; } catch {}
  const relImport = `../../../../components/organisms/${name}/${name}.astro`;
  const content = `---\nimport ${name} from '${relImport}';\n---\n${demoFor(name)}\n`;
  await fs.writeFile(out, content, 'utf8');
  process.stdout.write(`Created demo: ${out}\n`);
}

console.log('✅ Organism demos generated');


