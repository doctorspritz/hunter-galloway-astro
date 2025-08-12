import fs from 'node:fs/promises';

interface FigmaNode {
  id: string;
  name: string;
  type: string;
  children?: FigmaNode[];
}

interface Mapping {
  figmaName: string;
  level: 'atom' | 'molecule' | 'organism';
  name: string;
  path: string;
}

const FILE_KEY = process.argv[2];
if (!FILE_KEY) {
  console.error('Usage: ts-node scripts/generate-components.ts <FIGMA_FILE_KEY>');
  process.exit(1);
}

const TOKEN = process.env.FIGMA_TOKEN;
if (!TOKEN) {
  console.error('Environment variable FIGMA_TOKEN is required.');
  process.exit(1);
}

const response = await fetch(`https://api.figma.com/v1/files/${FILE_KEY}`, {
  headers: { 'X-Figma-Token': TOKEN }
});

if (!response.ok) {
  console.error('Failed to fetch file from Figma:', response.statusText);
  process.exit(1);
}

const data = await response.json();

const mappings: Mapping[] = [];

function toPascalCase(str: string): string {
  return str
    .replace(/[^a-zA-Z0-9]+/g, ' ')
    .split(' ')
    .filter(Boolean)
    .map((s) => s.charAt(0).toUpperCase() + s.slice(1))
    .join('');
}

function walk(node: FigmaNode) {
  if (node.type === 'COMPONENT') {
    const match = node.name.toLowerCase().match(/\b(atom|molecule|organism)\b/);
    if (match) {
      const level = match[1] as Mapping['level'];
      const compName = toPascalCase(node.name.replace(/\b(atom|molecule|organism)\b/gi, '').trim());
      const dir = `src/components/${level}s/${compName}`;
      const filePath = `${dir}/${compName}.astro`;
      mappings.push({ figmaName: node.name, level, name: compName, path: filePath });
    }
  }
  node.children?.forEach(walk);
}

walk(data.document as FigmaNode);

for (const map of mappings) {
  const dir = map.path.substring(0, map.path.lastIndexOf('/'));
  await fs.mkdir(dir, { recursive: true });
  const scaffold = `---\nexport interface Props {\n  // TODO: define props\n}\n\nconst props = Astro.props;\n---\n\n<style define:vars={{\n  /* TODO: reference design tokens */\n}}></style>\n\n<div class="${map.name}">${map.name} component</div>\n`;
  await fs.writeFile(map.path, scaffold);
}

let table = '# Component Crosswalk\n\n';
table += '| Figma Component | Level | Path |\n| --- | --- | --- |\n';
for (const map of mappings) {
  table += `| ${map.figmaName} | ${map.level} | ${map.path} |\n`;
}
await fs.mkdir('docs', { recursive: true });
await fs.writeFile('docs/COMPONENT_CROSSWALK.md', table);

console.log(`Generated ${mappings.length} components.`);
