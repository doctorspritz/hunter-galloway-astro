import { readFile, writeFile, mkdir } from 'node:fs/promises';
import fs from 'node:fs';
import path from 'node:path';
import dotenv from 'dotenv';

// Load .env file
dotenv.config();

const WP_FILES_DIR = path.resolve('WP-FILES');
const OUTPUT_PATH = path.resolve('data/figma_imports.json');
const TEMP_HTML_DIR = path.resolve('temp_html');

async function convertPhpToHtml(phpContent) {
  // Simple PHP to HTML conversion
  // Remove PHP tags and convert to basic HTML
  let html = phpContent
    .replace(/<\?php.*?\?>/gs, '') // Remove PHP blocks
    .replace(/<\?.*?\?>/gs, '') // Remove short PHP tags
    .replace(/echo\s+['"]([^'"]*)['"];?/g, '$1') // Convert echo statements
    .replace(/\$[a-zA-Z_][a-zA-Z0-9_]*/g, 'VARIABLE') // Replace PHP variables
    .replace(/include\s*\([^)]*\);?/g, '') // Remove includes
    .replace(/require\s*\([^)]*\);?/g, '') // Remove requires
    .replace(/function\s+[^{]*\{[^}]*\}/gs, '') // Remove function definitions
  
  // Wrap in basic HTML structure if not already present
  if (!html.includes('<html')) {
    html = `<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Converted WordPress Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .wp-content { max-width: 800px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="wp-content">
        ${html}
    </div>
</body>
</html>`;
  }
  
  return html;
}

async function convertHtmlToFigma(html, filename) {
  const apiKey = process.env.HTML_TO_DESIGN_API_KEY;
  if (!apiKey) {
    throw new Error('Missing HTML_TO_DESIGN_API_KEY');
  }

  console.log(`🔄 Converting ${filename} to Figma...`);
  
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

  const data = await res.json();
  return data.fileId;
}

async function processWordPressFile(filePath) {
  try {
    const filename = path.basename(filePath, '.php');
    console.log(`📁 Processing: ${filename}`);
    
    // Read PHP file
    const phpContent = await readFile(filePath, 'utf-8');
    
    // Convert PHP to HTML
    const html = await convertPhpToHtml(phpContent);
    
    // Save HTML temporarily for debugging
    const htmlPath = path.join(TEMP_HTML_DIR, `${filename}.html`);
    await mkdir(path.dirname(htmlPath), { recursive: true });
    await writeFile(htmlPath, html);
    
    // Convert HTML to Figma
    const figmaFileId = await convertHtmlToFigma(html, filename);
    
    console.log(`✅ ${filename} -> Figma: ${figmaFileId}`);
    return { filename, figmaFileId, htmlPath };
    
  } catch (err) {
    console.error(`❌ Failed to process ${path.basename(filePath)}:`, err.message);
    return null;
  }
}

async function main() {
  try {
    console.log('🚀 Starting Local WordPress to Figma Conversion...\n');
    
    // Create temp directory for HTML files
    await mkdir(TEMP_HTML_DIR, { recursive: true });
    
    // Get all PHP files
    const phpFiles = fs.readdirSync(WP_FILES_DIR)
      .filter(file => file.endsWith('.php'))
      .map(file => path.join(WP_FILES_DIR, file));
    
    console.log(`📁 Found ${phpFiles.length} WordPress files to process`);
    
    // Load existing results
    const existing = await readJSON(OUTPUT_PATH, {});
    const results = { ...existing };
    
    // Process each file
    for (const filePath of phpFiles) {
      const result = await processWordPressFile(filePath);
      if (result) {
        results[result.filename] = result.figmaFileId;
        
        // Save progress after each successful conversion
        await writeFile(OUTPUT_PATH, JSON.stringify(results, null, 2));
      }
    }
    
    console.log(`\n🎉 Conversion complete! ${Object.keys(results).length} files processed.`);
    console.log(`📊 Results saved to: ${OUTPUT_PATH}`);
    console.log(`📁 HTML files saved to: ${TEMP_HTML_DIR}`);
    
    // Show summary
    console.log('\n📋 Conversion Summary:');
    for (const [filename, fileId] of Object.entries(results)) {
      console.log(`  ✅ ${filename} -> ${fileId}`);
    }
    
    console.log('\n💡 Next steps:');
    console.log('1. Review the generated Figma files');
    console.log('2. Run: npm run generate:components <figma_file_id>');
    console.log('3. Run: npm run sync:figma-tokens <figma_file_id>');
    
  } catch (err) {
    console.error('💥 Conversion failed:', err);
    process.exit(1);
  }
}

async function readJSON(file, fallback) {
  try {
    const data = await readFile(file, 'utf-8');
    return JSON.parse(data);
  } catch {
    return fallback;
  }
}

main();
