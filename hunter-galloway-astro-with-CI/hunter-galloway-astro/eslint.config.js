import eslint from '@eslint/js';
import tseslint from 'typescript-eslint';

export default [
  eslint.configs.recommended,
  ...tseslint.configs.recommended,
  {
    files: ['src/**/*.{js,mjs,cjs,ts}'],
    languageOptions: {
      ecmaVersion: 'latest',
      sourceType: 'module',
      globals: {
        // Browser globals for client-side code
        window: 'readonly',
        document: 'readonly',
        console: 'readonly',
        localStorage: 'readonly',
        jQuery: 'readonly',
        MutationObserver: 'readonly'
      }
    },
    rules: {
      // Basic rules for the project
      'no-console': 'warn',
      'no-unused-vars': 'off', // Turn off base rule
      '@typescript-eslint/no-unused-vars': 'warn'
    }
  },
  {
    files: ['*.config.{js,mjs,cjs,ts}', '*.rc.{js,cjs}'],
    languageOptions: {
      ecmaVersion: 'latest',
      sourceType: 'module',
      globals: {
        // Node.js globals for config files
        module: 'readonly',
        exports: 'readonly',
        process: 'readonly'
      }
    }
  },
  {
    ignores: [
      'dist/',
      'node_modules/',
      '.astro/',
      '**/*.astro',
      'wordpress-source/',
      '.eslintrc.cjs',
      '.stylelintrc.cjs',
      '.storybook/',
      'lighthouserc.js'
    ]
  }
];