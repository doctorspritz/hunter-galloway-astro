import fs from 'node:fs/promises';

const [ , , level, Name ] = process.argv;

if (!level || !Name) {
  console.log('Usage: pnpm new:component <atoms|molecules|organisms|templates> <Name>');
  process.exit(1);
}

const dir = `src/components/${level}/${Name}`;
await fs.mkdir(dir, { recursive: true });

const compPath = `${dir}/${Name}.astro`;
await fs.writeFile(compPath, `---
export interface Props {
  variant?: 'sm'|'md'|'lg'
}

const { variant = 'md' } = Astro.props;
---

<style define:vars={{
  /* use tokens here */
}}>
</style>

<div class="${Name}">${Name} {variant}</div>
`);

await fs.mkdir('src/pages/design-system/review/components', { recursive: true });
await fs.writeFile(`src/pages/design-system/review/components/${Name}.astro`, `---
import Layout from '../../../../layouts/Layout.astro';
import ${Name} from '../../../../components/${level}/${Name}/${Name}.astro';
---

<Layout title="${Name} Demo - Design System">
  <h1>${Name}</h1>
  <p>Demo placeholder. Add props and examples as needed.</p>
  
  <${Name} variant="sm" />
  <${Name} variant="md" />
  <${Name} variant="lg" />
</Layout>
`);

await fs.mkdir('docs', { recursive: true });
try {
  await fs.access('docs/COMPONENTS.md');
} catch {
  await fs.writeFile('docs/COMPONENTS.md', `# Component Registry
| Canonical Name | Level | Path | Variants | WP refs / Notes |
|---|---|---|---|---|
`);
}

await fs.appendFile('docs/COMPONENTS.md', `| ${Name} | ${level} | ${compPath} | sm,md,lg | | \n`);

console.log(`✅ Created ${Name} and demo route. Update tokens/styles + WP refs.`);


