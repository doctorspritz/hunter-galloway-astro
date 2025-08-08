import { globby } from 'globby';
import fs from 'node:fs/promises';

const files = await globby(['src/components/**/*.{astro,tsx}']);
const items = await Promise.all(files.map(async f => {
  const s = (await fs.readFile(f,'utf8'))
    .replace(/\s+/g,' ')
    .replace(/class="[^"]*"/g,'class=""')
    .replace(/data-[\w-]+="[^"]*"/g,'');
  const vars = new Set([...s.matchAll(/var\(\s*--[\w-]+/g)].map(m=>m[0]));
  return { f, words: new Set(s.split(' ')), vars };
}));

function jaccard(a,b){const u=new Set([...a,...b]); const i=[...a].filter(x=>b.has(x)); return i.length/u.size}

const hits = [];
for (let i=0;i<items.length;i++) for (let j=i+1;j<items.length;j++){
  const textClose = jaccard(items[i].words, items[j].words) > 0.85;
  const varsClose = jaccard(items[i].vars, items[j].vars) > 0.8;
  if (textClose && varsClose) hits.push([items[i].f, items[j].f]);
}

if (hits.length){
  console.error('❌ Highly similar components (consolidate or justify):');
  hits.forEach(([a,b]) => console.error(`- ${a}  ~  ${b}`));
  process.exit(1); // change to 0 if you prefer a warning
}
console.log('✅ No obvious duplicates');


