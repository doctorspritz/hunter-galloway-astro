import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';

const atoms = await globby(['src/components/atoms/*/*.astro']);
await fs.mkdir('src/pages/design-system/review/components', { recursive: true });

function demoFor(name) {
  switch (name) {
    case 'Button':
      return `<h1>${name}</h1>\n<Button variant="primary">Primary</Button>\n<Button variant="secondary">Secondary</Button>\n<Button variant="ghost">Ghost</Button>\n<Button variant="outline">Outline</Button>\n<Button size="sm">Small</Button>\n<Button size="lg">Large</Button>`;
    case 'Icon':
      return `<h1>${name}</h1>\n<Icon name="phone" size="md" />`;
    case 'Input':
      return `<h1>${name}</h1>\n<Input name="email" label="Email" type="email" placeholder="you@example.com" />`;
    case 'Typography':
      return `<h1>${name}</h1>\n<Typography element="h1">Heading 1</Typography>\n<Typography element="p">Body text</Typography>`;
    case 'Container':
      return `<h1>${name}</h1>\n<Container><div style="padding:16px">Contained content</div></Container>`;
    case 'Logo':
      return `<h1>${name}</h1>\n<Logo />`;
    case 'Slider':
      return `<h1>${name}</h1>\n<Slider min={0} max={100} value={50} step={5} />`;
    case 'Badge':
      return `<h1>${name}</h1>\n<Badge>Badge</Badge>`;
    default:
      return `<h1>${name}</h1>\n<!-- Add examples -->`;
  }
}

for (const f of atoms) {
  const name = path.basename(f, '.astro');
  const out = path.join('src/pages/design-system/review/components', `${name}.astro`);
  try { await fs.access(out); continue; } catch {}
  const relImport = `../../../../components/atoms/${name}/${name}.astro`;
  const content = `---\nimport ${name} from '${relImport}';\n---\n${demoFor(name)}\n`;
  await fs.writeFile(out, content, 'utf8');
  process.stdout.write(`Created demo: ${out}\n`);
}

console.log('✅ Atom demos generated');


