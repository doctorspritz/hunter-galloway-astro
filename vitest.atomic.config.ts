import { defineConfig } from 'vitest/config';
import { getViteConfig } from 'astro/config';

export default defineConfig(
  getViteConfig({
    test: {
      globals: true,
      environment: 'jsdom',
      setupFiles: ['./test/setup.atomic.ts'],
      include: [
        'src/components/**/*.test.{js,ts}',
        'src/components/**/*.spec.{js,ts}'
      ],
      coverage: {
        provider: 'v8',
        reporter: ['text', 'json', 'html'],
        exclude: [
          'node_modules/',
          'test/',
          '*.config.{js,ts}',
          '**/*.stories.{js,ts}',
          '**/*.types.ts'
        ],
        thresholds: {
          branches: 80,
          functions: 80,
          lines: 80,
          statements: 80,
          // Atomic-specific thresholds
          perFile: true,
          autoUpdate: false,
          100: true // Atoms should have 100% coverage
        }
      },
      // Custom matchers for atomic testing
      reporters: ['default', './test/atomic-reporter.ts'],
      // Atomic-specific test suites
      testMatch: {
        atoms: 'src/components/atoms/**/*.test.ts',
        molecules: 'src/components/molecules/**/*.test.ts',
        organisms: 'src/components/organisms/**/*.test.ts',
        templates: 'src/components/templates/**/*.test.ts'
      }
    }
  })
);