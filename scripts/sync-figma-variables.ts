import fs from 'node:fs';
import path from 'node:path';

interface FigmaVariable {
  name: string;
  resolvedType: string;
  valuesByMode: Record<string, any>;
  variableCollectionId: string;
}

interface FigmaCollection {
  name: string;
  modes: { modeId: string; name: string }[];
}

// Load .env file if present
function loadEnv() {
  const envPath = path.resolve(process.cwd(), '.env');
  if (!fs.existsSync(envPath)) return;
  const lines = fs.readFileSync(envPath, 'utf8').split(/\r?\n/);
  for (const line of lines) {
    const match = line.match(/^\s*([^#=]+)=([^#]*)/);
    if (match) {
      const [, key, value] = match;
      if (!process.env[key]) {
        process.env[key] = value.trim();
      }
    }
  }
}

loadEnv();

const FIGMA_TOKEN = process.env.FIGMA_TOKEN;
if (!FIGMA_TOKEN) {
  console.error('Missing FIGMA_TOKEN in environment or .env file');
  process.exit(1);
}

const fileIds = process.argv.slice(2);
if (fileIds.length === 0) {
  console.error('Usage: ts-node sync-figma-variables.ts <file-id> [file-id...]');
  process.exit(1);
}

function toCamel(str: string): string {
  return str
    .toLowerCase()
    .replace(/[-_\s]+(.)?/g, (_, c) => (c ? c.toUpperCase() : ''))
    .replace(/^[A-Z]/, (c) => c.toLowerCase());
}

function toKebab(str: string): string {
  return str
    .replace(/([a-z0-9])([A-Z])/g, '$1-$2')
    .replace(/[_\s]+/g, '-')
    .toLowerCase();
}

function setNested(obj: any, path: string, value: any) {
  const parts = path.split('/').map(toCamel);
  let current = obj;
  while (parts.length > 1) {
    const key = parts.shift() as string;
    current[key] = current[key] || {};
    current = current[key];
  }
  current[parts[0]] = value;
}

function sortKeys(obj: any): any {
  if (Array.isArray(obj)) return obj.map(sortKeys);
  if (obj && typeof obj === 'object') {
    return Object.keys(obj)
      .sort()
      .reduce((acc: any, key) => {
        acc[key] = sortKeys(obj[key]);
        return acc;
      }, {});
  }
  return obj;
}

function formatColor(value: any): string {
  const r = Math.round((value.r || 0) * 255);
  const g = Math.round((value.g || 0) * 255);
  const b = Math.round((value.b || 0) * 255);
  const a = value.a === undefined ? 1 : value.a;
  const hex = '#' + [r, g, b].map((v) => v.toString(16).padStart(2, '0')).join('');
  return a === 1 ? hex : `rgba(${r}, ${g}, ${b}, ${a})`;
}

function formatValue(type: string, value: any): any {
  switch (type) {
    case 'COLOR':
      return formatColor(value);
    default:
      return value;
  }
}

async function fetchVariables(fileId: string) {
  const res = await fetch(`https://api.figma.com/v1/files/${fileId}/variables`, {
    headers: { 'X-Figma-Token': FIGMA_TOKEN },
  });
  if (!res.ok) {
    throw new Error(`Failed to fetch variables for ${fileId}: ${res.status} ${res.statusText}`);
  }
  return res.json();
}

async function run() {
  const collections: Record<string, any> = {};

  for (const fileId of fileIds) {
    const data = await fetchVariables(fileId);
    const vars: Record<string, FigmaVariable> = data.meta?.variables || {};
    const collMap: Record<string, FigmaCollection> = data.meta?.variableCollections || {};

    for (const variable of Object.values(vars)) {
      const coll = collMap[variable.variableCollectionId];
      const collectionName = coll ? coll.name : 'tokens';
      const outName = toKebab(collectionName);
      collections[outName] = collections[outName] || {};

      const modeValue = Object.values(variable.valuesByMode)[0];
      const value = formatValue(variable.resolvedType, modeValue);
      setNested(collections[outName], variable.name, value);
    }
  }

  for (const [name, tokens] of Object.entries(collections)) {
    const sorted = sortKeys(tokens);
    const filePath = path.resolve('src', 'tokens', `${name}.ts`);
    const content = `export default ${JSON.stringify(sorted, null, 2)} as const;\n`;
    fs.writeFileSync(filePath, content);
    console.log(`Updated ${filePath}`);
  }
}

run().catch((err) => {
  console.error(err);
  process.exit(1);
});

