/**
 * Atomic Design Test Utilities
 * Helper functions for testing Astro components following atomic design principles
 */

import { experimental_AstroContainer as AstroContainer } from 'astro/container';
import { readFile } from 'node:fs/promises';
import { resolve } from 'node:path';

/**
 * Get the atomic level of a component from its file path
 */
export function getAtomicLevel(filePath: string): 'atoms' | 'molecules' | 'organisms' | 'templates' | null {
  if (filePath.includes('/atoms/')) return 'atoms';
  if (filePath.includes('/molecules/')) return 'molecules';
  if (filePath.includes('/organisms/')) return 'organisms';
  if (filePath.includes('/templates/')) return 'templates';
  return null;
}

/**
 * Extract component imports from an Astro file
 */
export async function getComponentImports(filePath: string): Promise<string[]> {
  const content = await readFile(filePath, 'utf-8');
  const imports: string[] = [];
  
  // Extract frontmatter
  const frontmatterMatch = content.match(/^---\n([\s\S]*?)\n---/);
  if (!frontmatterMatch) return imports;
  
  const frontmatter = frontmatterMatch[1];
  const importRegex = /import\s+(?:[\w\s{},*]+\s+from\s+)?['"]([^'"]+)['"]/g;
  let match;
  
  while ((match = importRegex.exec(frontmatter)) !== null) {
    imports.push(match[1]);
  }
  
  return imports;
}

/**
 * Get component props interface
 */
export async function getComponentProps(filePath: string): Promise<string[]> {
  const content = await readFile(filePath, 'utf-8');
  const props: string[] = [];
  
  // Extract Props interface
  const propsMatch = content.match(/export\s+interface\s+Props\s*{([^}]*)}/s);
  if (!propsMatch) return props;
  
  const propsContent = propsMatch[1];
  const propMatches = propsContent.match(/^\s*(\w+)[?]?:/gm) || [];
  
  return propMatches.map(p => p.replace(/[?:]/, '').trim());
}

/**
 * Get component size in bytes
 */
export async function getComponentSize(filePath: string): Promise<number> {
  const content = await readFile(filePath, 'utf-8');
  return Buffer.byteLength(content, 'utf-8');
}

/**
 * Extract CSS variables used in component
 */
export async function extractCSSVariables(filePath: string): Promise<string[]> {
  const content = await readFile(filePath, 'utf-8');
  const variables: string[] = [];
  
  // Extract style sections
  const styleMatches = content.match(/<style[^>]*>([\s\S]*?)<\/style>/g) || [];
  
  for (const styleSection of styleMatches) {
    const varMatches = styleSection.match(/var\(--[\w-]+/g) || [];
    variables.push(...varMatches.map(v => v.replace('var(', '')));
  }
  
  return [...new Set(variables)]; // Remove duplicates
}

/**
 * Check if component has slots
 */
export async function hasSlots(filePath: string): Promise<boolean> {
  const content = await readFile(filePath, 'utf-8');
  return content.includes('<slot') || content.includes('Astro.slots');
}

/**
 * Validate atomic import hierarchy
 */
export function validateImportHierarchy(
  currentLevel: string,
  imports: string[]
): { valid: boolean; violations: string[] } {
  const violations: string[] = [];
  
  const rules: Record<string, string[]> = {
    atoms: [],
    molecules: ['atoms'],
    organisms: ['atoms', 'molecules'],
    templates: ['atoms', 'molecules', 'organisms']
  };
  
  const allowedLevels = rules[currentLevel] || [];
  
  for (const importPath of imports) {
    const importLevel = getAtomicLevel(importPath);
    if (importLevel && !allowedLevels.includes(importLevel)) {
      violations.push(`${currentLevel} cannot import from ${importLevel}: ${importPath}`);
    }
  }
  
  return {
    valid: violations.length === 0,
    violations
  };
}

/**
 * Validate token usage by atomic level
 */
export function validateTokenUsage(
  level: string,
  cssVariables: string[]
): { valid: boolean; violations: string[] } {
  const violations: string[] = [];
  
  const expectedPrefixes: Record<string, string> = {
    atoms: '--atom-',
    molecules: '--molecule-',
    organisms: '--organism-',
    templates: '--template-'
  };
  
  const expectedPrefix = expectedPrefixes[level];
  if (!expectedPrefix) return { valid: true, violations: [] };
  
  for (const variable of cssVariables) {
    // Skip global CSS variables that aren't component-specific
    if (variable.startsWith('--hg-')) continue;
    
    if (!variable.startsWith(expectedPrefix)) {
      violations.push(`Invalid token in ${level}: ${variable} (expected ${expectedPrefix}*)`);
    }
  }
  
  return {
    valid: violations.length === 0,
    violations
  };
}

/**
 * Create atomic test suite
 */
export function describeAtomic(
  componentName: string,
  filePath: string,
  testFn: () => void
) {
  const level = getAtomicLevel(filePath);
  
  describe(`[${level?.toUpperCase() || 'UNKNOWN'}] ${componentName}`, () => {
    describe('Atomic Design Compliance', () => {
      test('follows atomic hierarchy', async () => {
        const imports = await getComponentImports(filePath);
        const validation = validateImportHierarchy(level!, imports);
        
        if (!validation.valid) {
          throw new Error(validation.violations.join('\n'));
        }
      });
      
      test('uses correct token tier', async () => {
        const variables = await extractCSSVariables(filePath);
        const validation = validateTokenUsage(level!, variables);
        
        if (!validation.valid) {
          throw new Error(validation.violations.join('\n'));
        }
      });
      
      if (level === 'atoms') {
        test('has no slots (atoms are self-contained)', async () => {
          const hasComponentSlots = await hasSlots(filePath);
          expect(hasComponentSlots).toBe(false);
        });
        
        test('has maximum 5 props', async () => {
          const props = await getComponentProps(filePath);
          expect(props.length).toBeLessThanOrEqual(5);
        });
        
        test('is less than 5KB', async () => {
          const size = await getComponentSize(filePath);
          expect(size).toBeLessThan(5000);
        });
      }
      
      if (level === 'molecules') {
        test('has maximum 10 props', async () => {
          const props = await getComponentProps(filePath);
          expect(props.length).toBeLessThanOrEqual(10);
        });
        
        test('is less than 15KB', async () => {
          const size = await getComponentSize(filePath);
          expect(size).toBeLessThan(15000);
        });
      }
      
      if (level === 'organisms') {
        test('has maximum 20 props', async () => {
          const props = await getComponentProps(filePath);
          expect(props.length).toBeLessThanOrEqual(20);
        });
        
        test('is less than 30KB', async () => {
          const size = await getComponentSize(filePath);
          expect(size).toBeLessThan(30000);
        });
      }
      
      if (level === 'templates') {
        test('has maximum 5 props (layout variants only)', async () => {
          const props = await getComponentProps(filePath);
          expect(props.length).toBeLessThanOrEqual(5);
        });
        
        test('is less than 5KB (layout only)', async () => {
          const size = await getComponentSize(filePath);
          expect(size).toBeLessThan(5000);
        });
      }
    });
    
    describe('Component Tests', testFn);
  });
}

/**
 * Custom matchers for atomic testing
 */
export const atomicMatchers = {
  toBeAtomicLevel(received: string, expected: string) {
    const level = getAtomicLevel(received);
    const pass = level === expected;
    
    return {
      pass,
      message: () => 
        pass
          ? `Expected ${received} not to be ${expected} level`
          : `Expected ${received} to be ${expected} level, but was ${level}`
    };
  },
  
  toFollowAtomicHierarchy(imports: string[], currentLevel: string) {
    const validation = validateImportHierarchy(currentLevel, imports);
    
    return {
      pass: validation.valid,
      message: () => 
        validation.valid
          ? `Expected imports to violate atomic hierarchy`
          : `Import violations:\n${validation.violations.join('\n')}`
    };
  },
  
  toUseCorrectTokens(variables: string[], level: string) {
    const validation = validateTokenUsage(level, variables);
    
    return {
      pass: validation.valid,
      message: () =>
        validation.valid
          ? `Expected tokens to be incorrect for ${level}`
          : `Token violations:\n${validation.violations.join('\n')}`
    };
  }
};

// Type augmentation for custom matchers
declare global {
  namespace Vi {
    interface Assertion {
      toBeAtomicLevel(expected: string): void;
      toFollowAtomicHierarchy(currentLevel: string): void;
      toUseCorrectTokens(level: string): void;
    }
  }
}