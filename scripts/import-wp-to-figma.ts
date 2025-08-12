import { readFile, writeFile, mkdir } from 'node:fs/promises';
import path from 'node:path';

interface PageMap {
  [slug: string]: unknown;
}

const WP_PAGE_MAP_PATH = path.resolve('wp_page_map.json');
const OUTPUT_PATH = path.resolve('data/figma_imports.json');
const BASE_URL = (process.env.WP_BASE_URL ?? 'https://huntergalloway.com.au').replace(/\/$/, '');

async function readJSON<T>(file: string, fallback: T): Promise<T> {
  try {
    const data = await readFile(file, 'utf-8');
    return JSON.parse(data) as T;
  } catch {
    return fallback;
  }
}

async function convertHtmlToFigma(html: string): Promise<string> {
  const apiKey = process.env.HTML_TO_DESIGN_API_KEY;
  if (!apiKey) {
    throw new Error('Missing HTML_TO_DESIGN_API_KEY');
  }

  const res = await fetch('https://api.html.to.design/v1/convert', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      Authorization: `Bearer ${apiKey}`,
    },
    body: JSON.stringify({ html }),
  });

  if (!res.ok) {
    const err = await res.text();
    throw new Error(`Conversion failed: ${res.status} ${err}`);
  }

  const data = (await res.json()) as { fileId: string };
  return data.fileId;
}

async function main() {
  const pageMap = await readJSON<PageMap>(WP_PAGE_MAP_PATH, {});
  const existing = await readJSON<Record<string, string>>(OUTPUT_PATH, {});
  const results: Record<string, string> = { ...existing };

  for (const slug of Object.keys(pageMap)) {
    if (results[slug]) continue;
    const url = `${BASE_URL}/${slug}/`;
    console.log(`Fetching ${url}`);
    const html = await fetch(url).then((r) => r.text());
    try {
      const fileId = await convertHtmlToFigma(html);
      results[slug] = fileId;
      console.log(`Imported ${slug} -> ${fileId}`);
    } catch (err) {
      console.error(`Failed to import ${slug}:`, err);
    }
  }

  await mkdir(path.dirname(OUTPUT_PATH), { recursive: true });
  await writeFile(OUTPUT_PATH, JSON.stringify(results, null, 2));
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
