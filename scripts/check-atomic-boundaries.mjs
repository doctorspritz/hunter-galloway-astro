#!/usr/bin/env node
/**
 * Atomic Design Boundary Checker
 * Enforces strict import hierarchy in Astro components
 */

import { globby } from 'globby';
import fs from 'node:fs/promises';
import path from 'node:path';
import { execSync } from 'node:child_process';

// Define atomic hierarchy rules
const ATOMIC_RULES = {
  atoms: {
    level: 1,
    canImport: [], // Atoms can't import from our component system
    pattern: /^src\/components\/atoms\//
  },
  molecules: {
    level: 2,
    canImport: ['atoms'], // Molecules can only import atoms
    pattern: /^src\/components\/molecules\//
  },
  organisms: {
    level: 3,
    canImport: ['atoms', 'molecules'], // Organisms can import atoms and molecules
    pattern: /^src\/components\/organisms\//
  },
  templates: {
    level: 4,
    canImport: ['atoms', 'molecules', 'organisms'], // Templates can import all except pages
    pattern: /^src\/components\/templates\//
  }
};

// Determine atomic level from file path
function getAtomicLevel(filePath) {
  for (const [level, rule] of Object.entries(ATOMIC_RULES)) {
    if (rule.pattern.test(filePath)) {
      return level;
    }
  }
  return null;
}

// Check if import is allowed based on atomic hierarchy
function isImportAllowed(currentLevel, importedLevel) {
  if (!currentLevel || !importedLevel) return true; // Skip non-component files
  
  const rule = ATOMIC_RULES[currentLevel];
  return rule.canImport.includes(importedLevel);
}

// Extract imports from Astro file
async function extractImports(filePath) {
  const content = await fs.readFile(filePath, 'utf-8');
  const imports = [];
  
  // Match import statements in frontmatter
  const frontmatterMatch = content.match(/^---\n([\s\S]*?)\n---/);
  if (frontmatterMatch) {
    const frontmatter = frontmatterMatch[1];
    
    // Match all import statements
    const importRegex = /import\s+(?:[\w\s{},*]+\s+from\s+)?['"]([^'"]+)['"]/g;
    let match;
    
    while ((match = importRegex.exec(frontmatter)) !== null) {
      const importPath = match[1];
      // Only check relative imports to components, exclude types and CSS
      if ((importPath.startsWith('../') || importPath.startsWith('./')) &&
          !importPath.includes('.types') &&
          !importPath.includes('.css') &&
          !importPath.endsWith('.types.ts')) {
        imports.push(importPath);
      }
    }
  }
  
  return imports;
}

// Resolve import path to actual file path
function resolveImportPath(fromFile, importPath) {
  const dir = path.dirname(fromFile);
  const resolved = path.resolve(dir, importPath);
  
  // Convert absolute path back to relative from project root
  const relative = path.relative(process.cwd(), resolved);
  return relative.replace(/\\/g, '/'); // Normalize path separators
}

// Main validation function
async function validateAtomicBoundaries() {
  const files = await globby(['src/components/**/*.astro']);
  const violations = [];
  
  for (const file of files) {
    const currentLevel = getAtomicLevel(file);
    if (!currentLevel) continue; // Skip non-atomic files
    
    const imports = await extractImports(file);
    
    for (const importPath of imports) {
      const resolvedPath = resolveImportPath(file, importPath);
      const importedLevel = getAtomicLevel(resolvedPath);
      
      // Allow atoms importing local helper files within the SAME component folder
      // e.g., src/components/atoms/Icon/Icon.astro -> ./Icon.icons.ts
      const isSameDirHelper = (() => {
        if (currentLevel !== 'atoms') return false;
        if (importedLevel !== 'atoms') return false;
        const sameDir = path.dirname(file) === path.dirname(resolvedPath);
        const isHelperTs = /\.(ts|js)$/.test(resolvedPath) && !resolvedPath.endsWith('.types.ts');
        const notAstro = !resolvedPath.endsWith('.astro') && !importPath.endsWith('.astro');
        const extensionlessHelper = importPath.startsWith('./') && !/\.astro$/.test(importPath) && !/\.types\.ts$/.test(importPath);
        return sameDir && notAstro && (isHelperTs || extensionlessHelper);
      })();

      if (isSameDirHelper) {
        continue;
      }

      if (importedLevel && !isImportAllowed(currentLevel, importedLevel)) {
        violations.push({
          file,
          currentLevel,
          importPath,
          importedLevel,
          message: `${currentLevel} cannot import from ${importedLevel}`
        });
      }
    }
  }
  
  return violations;
}

// Check for components in wrong directories
async function validateComponentPlacement() {
  const violations = [];
  
  // Check for sections directory (should be organisms)
  const sections = await globby(['src/components/sections/**/*.astro']);
  if (sections.length > 0) {
    violations.push({
      type: 'directory',
      message: `Found ${sections.length} components in sections/ - should be in organisms/`,
      files: sections
    });
  }
  
  // Check for components directly in components/ (should be in atomic subdirs)
  const rootComponents = await globby(['src/components/*.astro']);
  if (rootComponents.length > 0) {
    violations.push({
      type: 'directory',
      message: `Found ${rootComponents.length} components in root components/ - should be in atomic subdirectories`,
      files: rootComponents
    });
  }
  
  return violations;
}

// Validate component complexity
async function validateComponentComplexity() {
  const violations = [];
  const rules = {
    atoms: { maxProps: 5, maxLines: 300 },
    molecules: { maxProps: 10, maxLines: 400 },
    organisms: { maxProps: 20, maxLines: 500 },
    templates: { maxProps: 5, maxLines: 200 }
  };
  
  const files = await globby(['src/components/**/*.astro']);
  
  for (const file of files) {
    const level = getAtomicLevel(file);
    if (!level) continue;
    
    const content = await fs.readFile(file, 'utf-8');
    const lines = content.split('\n').length;
    
    // Count props (rough estimate from interface)
    const propsMatch = content.match(/export\s+interface\s+Props\s*{([^}]*)}/s);
    let propCount = 0;
    if (propsMatch) {
      const propsContent = propsMatch[1];
      propCount = (propsContent.match(/^\s*\w+[?]?:/gm) || []).length;
    }
    
    const rule = rules[level];
    if (lines > rule.maxLines) {
      violations.push({
        file,
        level,
        type: 'complexity',
        message: `Component has ${lines} lines (max: ${rule.maxLines})`
      });
    }
    
    if (propCount > rule.maxProps) {
      violations.push({
        file,
        level,
        type: 'props',
        message: `Component has ${propCount} props (max: ${rule.maxProps})`
      });
    }
  }
  
  return violations;
}

// Check for slots in atoms (except utility atoms)
async function validateAtomSlots() {
  const violations = [];
  const atoms = await globby(['src/components/atoms/**/*.astro']);
  
  // Utility atoms that can legitimately have slots
  const utilityAtoms = ['Container', 'Typography'];
  
  for (const file of atoms) {
    const componentName = path.basename(path.dirname(file));
    
    // Skip utility atoms that need slots for layout/content purposes
    if (utilityAtoms.includes(componentName)) {
      continue;
    }
    
    const content = await fs.readFile(file, 'utf-8');
    
    // Check for slot usage
    if (content.includes('<slot') || content.includes('Astro.slots')) {
      violations.push({
        file,
        type: 'slot',
        message: 'Atoms cannot have slots (except utility atoms like Container/Typography)'
      });
    }
  }
  
  return violations;
}

// Main execution
async function main() {
  console.log('🔬 Checking Atomic Design boundaries...\n');
  
  const allViolations = [];
  
  // Run all checks
  const boundaryViolations = await validateAtomicBoundaries();
  const placementViolations = await validateComponentPlacement();
  const complexityViolations = await validateComponentComplexity();
  const slotViolations = await validateAtomSlots();
  
  // Combine all violations
  allViolations.push(
    ...boundaryViolations.map(v => ({ type: 'boundary', ...v })),
    ...placementViolations,
    ...complexityViolations,
    ...slotViolations
  );
  
  // Report results
  if (allViolations.length === 0) {
    console.log('✅ All atomic boundaries are correct!');
    process.exit(0);
  } else {
    console.error('❌ Found atomic design violations:\n');
    
    // Group by type
    const byType = {};
    for (const violation of allViolations) {
      if (!byType[violation.type]) byType[violation.type] = [];
      byType[violation.type].push(violation);
    }
    
    // Report each type
    for (const [type, violations] of Object.entries(byType)) {
      console.error(`\n${type.toUpperCase()} VIOLATIONS (${violations.length}):`);
      console.error('─'.repeat(50));
      
      for (const v of violations) {
        if (type === 'boundary') {
          console.error(`  📁 ${v.file}`);
          console.error(`     ❌ ${v.message}`);
          console.error(`     Import: ${v.importPath}\n`);
        } else if (type === 'directory') {
          console.error(`  ❌ ${v.message}`);
          if (v.files && v.files.length <= 5) {
            v.files.forEach(f => console.error(`     - ${f}`));
          }
        } else {
          console.error(`  📁 ${v.file}`);
          console.error(`     ❌ ${v.message}\n`);
        }
      }
    }
    
    console.error('\n📚 Learn more: docs/ATOMIC_DESIGN.md');
    process.exit(1);
  }
}

// Handle errors
main().catch(error => {
  console.error('Error checking atomic boundaries:', error);
  process.exit(1);
});