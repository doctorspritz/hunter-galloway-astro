import { defineConfig } from 'vitest/config';

export default defineConfig({
  test: {
    environment: 'jsdom',
    include: ['src/**/*.{test,spec}.{js,mjs,cjs,ts,jsx,tsx}'],
    exclude: [
      'node_modules/**',
      'dist/**',
      'tests/**', // Playwright tests
      '**/*.config.*',
      '**/*.d.ts'
    ],
    coverage: {
      reporter: ['text', 'json', 'html'],
      exclude: [
        'node_modules/**',
        'dist/**',
        'tests/**',
        '**/*.config.*',
        '**/*.d.ts'
      ]
    }
  }
});