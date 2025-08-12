import fs from 'node:fs/promises';
import path from 'node:path';
import dotenv from 'dotenv';

// Load .env file
dotenv.config();

const FILE_KEY = process.argv[2];
if (!FILE_KEY) {
  console.error('❌ Usage: node scripts/generate-smart-components.mjs <FIGMA_FILE_KEY>');
  console.log('💡 Example: node scripts/generate-smart-components.mjs 1SLsUD5X0W26Oj2gDAXBtC');
  process.exit(1);
}

const TOKEN = process.env.FIGMA_TOKEN;
if (!TOKEN) {
  console.error('❌ Environment variable FIGMA_TOKEN is required.');
  console.log('💡 Add FIGMA_TOKEN to your .env file');
  process.exit(1);
}

// Component filtering rules
const COMPONENT_RULES = {
  // High-priority components to always include
  highPriority: [
    'button', 'btn', 'cta', 'link', 'a href',
    'heading', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    'card', 'container', 'wrapper', 'section',
    'logo', 'brand', 'icon', 'svg',
    'form', 'input', 'textarea', 'select',
    'nav', 'navigation', 'menu', 'dropdown',
    'footer', 'header', 'sidebar'
  ],
  
  // Medium-priority components
  mediumPriority: [
    'text', 'paragraph', 'p', 'span',
    'image', 'img', 'photo', 'picture',
    'divider', 'separator', 'border',
    'badge', 'tag', 'label', 'chip'
  ],
  
  // Low-priority components (usually skip)
  lowPriority: [
    'frame', 'group', 'layer', 'mask',
    'clip', 'path', 'vector', 'ellipse',
    'rectangle', 'line', 'polygon'
  ],
  
  // Skip these entirely
  skip: [
    'background', 'overlay', 'shadow',
    'temp', 'copy', 'duplicate'
  ]
};

async function fetchFigmaFile() {
  console.log(`📥 Fetching Figma file: ${FILE_KEY}`);
  const response = await fetch(`https://api.figma.com/v1/files/${FILE_KEY}`, {
    headers: { 'X-Figma-Token': TOKEN }
  });

  if (!response.ok) {
    throw new Error(`Failed to fetch file from Figma: ${response.statusText}`);
  }

  return response.json();
}

function calculateComponentScore(node, depth = 0) {
  const name = node.name.toLowerCase();
  let score = 0;
  
  // Check high priority keywords
  for (const keyword of COMPONENT_RULES.highPriority) {
    if (name.includes(keyword)) {
      score += 100;
      break;
    }
  }
  
  // Check medium priority keywords
  for (const keyword of COMPONENT_RULES.mediumPriority) {
    if (name.includes(keyword)) {
      score += 50;
      break;
    }
  }
  
  // Check low priority keywords
  for (const keyword of COMPONENT_RULES.lowPriority) {
    if (name.includes(keyword)) {
      score -= 25;
    }
  }
  
  // Check skip keywords
  for (const keyword of COMPONENT_RULES.skip) {
    if (name.includes(keyword)) {
      return -1000; // Skip entirely
    }
  }
  
  // Depth penalty (deeper = less likely to be useful)
  score -= depth * 10;
  
  // Size bonus (more children = more complex = more useful)
  if (node.children && node.children.length > 0) {
    score += Math.min(node.children.length * 5, 50);
  }
  
  // Type bonus
  if (node.type === 'COMPONENT') score += 50;
  if (node.type === 'INSTANCE') score += 30;
  
  return score;
}

function generateSmartComponentName(figmaName, componentType) {
  // Clean up the Figma name
  let name = figmaName
    .replace(/[^a-zA-Z0-9\s]/g, ' ') // Replace special chars with spaces
    .replace(/\s+/g, ' ') // Normalize spaces
    .trim();
  
  // Extract meaningful parts
  const words = name.split(' ').filter(word => word.length > 0);
  
  // Find the most meaningful word
  let meaningfulWord = words[0] || 'Component';
  
  // Look for better words
  for (const word of words) {
    const lowerWord = word.toLowerCase();
    if (COMPONENT_RULES.highPriority.some(keyword => lowerWord.includes(keyword))) {
      meaningfulWord = word;
      break;
    }
  }
  
  // Convert to PascalCase
  const pascalName = meaningfulWord
    .split(' ')
    .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
    .join('');
  
  // Add type suffix if not already present
  if (!pascalName.toLowerCase().includes(componentType)) {
    return `${pascalName}${componentType.charAt(0).toUpperCase() + componentType.slice(1)}`;
  }
  
  return pascalName;
}

function analyzeNode(node, depth = 0, path = '') {
  const currentPath = path ? `${path} > ${node.name}` : node.name;
  const components = [];
  
  // Calculate component score
  const score = calculateComponentScore(node, depth);
  
  // Only process if score is high enough
  if (score >= 30) {
    const componentType = depth <= 1 ? 'organism' : depth <= 3 ? 'molecule' : 'atom';
    const componentName = generateSmartComponentName(node.name, componentType);
    
    components.push({
      name: componentName,
      type: componentType,
      figmaName: node.name,
      figmaId: node.id,
      path: currentPath,
      score: score,
      hasText: node.children?.some(child => child.type === 'TEXT') || false,
      hasVector: node.children?.some(child => child.type === 'VECTOR') || false,
      hasImage: node.children?.some(child => child.type === 'RECTANGLE' && child.fills) || false,
      children: node.children?.length || 0
    });
    
    console.log(`🎯 ${node.type}: ${node.name} -> ${componentName} (${componentType}) [Score: ${score}]`);
  }
  
  // Recursively analyze children
  if (node.children) {
    for (const child of node.children) {
      const childComponents = analyzeNode(child, depth + 1, currentPath);
      components.push(...childComponents);
    }
  }
  
  return components;
}

function deduplicateComponents(components) {
  const seen = new Set();
  const unique = [];
  
  for (const comp of components) {
    // Create a key based on name and type
    const key = `${comp.name}-${comp.type}`;
    
    if (!seen.has(key)) {
      seen.add(key);
      unique.push(comp);
    } else {
      // Keep the one with higher score
      const existing = unique.find(c => `${c.name}-${c.type}` === key);
      if (comp.score > existing.score) {
        const index = unique.indexOf(existing);
        unique[index] = comp;
      }
    }
  }
  
  return unique;
}

async function generateComponent(component) {
  const dir = `src/components/${component.type}s/${component.name}`;
  await fs.mkdir(dir, { recursive: true });
  
  const scaffold = `---
export interface Props {
  // TODO: define props based on Figma component: ${component.figmaName}
  // Figma ID: ${component.figmaId}
  // Path: ${component.path}
  // Score: ${component.score}
}

const props = Astro.props;
---

<style define:vars={{
  /* TODO: reference design tokens from src/tokens/ */
}}>
  .${component.name} {
    /* TODO: implement styles based on Figma design */
    /* Component type: ${component.type} */
    /* Has text: ${component.hasText} */
    /* Has vectors: ${component.hasVector} */
    /* Has images: ${component.hasImage} */
    /* Children: ${component.children} */
  }
</style>

<div class="${component.name}">
  <!-- TODO: implement component based on Figma: ${component.figmaName} -->
  <!-- This component was auto-generated from Figma with smart filtering -->
  ${component.name}
</div>
`;
  
  const filePath = `${dir}/${component.name}.astro`;
  await fs.writeFile(filePath, scaffold);
  console.log(`✅ Generated: ${filePath}`);
}

async function generateCrosswalkTable(components) {
  // Sort by score (highest first)
  const sorted = components.sort((a, b) => b.score - a.score);
  
  let table = '# Smart Component Crosswalk (Auto-Generated)\n\n';
  table += 'This file is auto-generated by `scripts/generate-smart-components.mjs`.\n\n';
  table += '| Component Name | Type | Score | Figma Element | Path |\n| --- | --- | --- | --- | --- |\n';
  
  for (const comp of sorted) {
    table += `| ${comp.name} | ${comp.type} | ${comp.score} | ${comp.figmaName} | ${comp.path} |\n`;
  }
  
  await fs.mkdir('docs', { recursive: true });
  await fs.writeFile('docs/SMART_COMPONENT_CROSSWALK.md', table);
  console.log('✅ Updated: docs/SMART_COMPONENT_CROSSWALK.md');
}

async function main() {
  try {
    console.log('🧠 Starting SMART component generation from Figma...\n');
    
    const data = await fetchFigmaFile();
    const document = data.document;
    
    console.log(`📁 File: ${data.name}`);
    console.log(`📊 Last Modified: ${new Date(data.lastModified).toLocaleString()}`);
    console.log('\n🔍 Analyzing Figma structure with smart filtering...\n');
    
    // Analyze the document structure
    const allComponents = analyzeNode(document);
    
    if (allComponents.length === 0) {
      console.log('⚠️  No suitable components found with current filtering rules');
      return;
    }
    
    console.log(`\n📊 Found ${allComponents.length} potential components before deduplication`);
    
    // Remove duplicates and keep best versions
    const uniqueComponents = deduplicateComponents(allComponents);
    
    console.log(`🎯 After deduplication: ${uniqueComponents.length} unique components`);
    
    // Sort by score and limit to top components
    const topComponents = uniqueComponents
      .sort((a, b) => b.score - a.score)
      .slice(0, 100); // Limit to top 100
    
    console.log(`\n🚀 Generating top ${topComponents.length} components by score...`);
    
    // Generate each component
    for (const comp of topComponents) {
      await generateComponent(comp);
    }
    
    // Update crosswalk table
    await generateCrosswalkTable(topComponents);
    
    console.log(`\n🎉 Smart generation complete! ${topComponents.length} high-quality components created.`);
    console.log('\n💡 Next steps:');
    console.log('1. Review the generated components (much more manageable now!)');
    console.log('2. Focus on high-score components first');
    console.log('3. Customize the filtering rules in the script if needed');
    console.log('4. Implement component logic and styles');
    
    // Show top 10 components by score
    console.log('\n🏆 Top 10 Components by Score:');
    topComponents.slice(0, 10).forEach((comp, index) => {
      console.log(`  ${index + 1}. ${comp.name} (${comp.type}) - Score: ${comp.score}`);
    });
    
  } catch (err) {
    console.error('💥 Generation failed:', err.message);
    process.exit(1);
  }
}

main();
