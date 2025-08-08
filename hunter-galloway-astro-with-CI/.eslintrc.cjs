module.exports = {
  root: true,
  parser: '@typescript-eslint/parser',
  plugins: ['@typescript-eslint', 'boundaries', 'no-relative-import-paths'],
  extends: ['eslint:recommended', 'plugin:@typescript-eslint/recommended'],
  rules: {
    'no-restricted-syntax': [
      'error',
      {
        selector: "Literal[value=/^#[0-9A-Fa-f]{3,6}$/]",
        message: "Use design tokens instead of raw hex colors."
      }
    ],
    'boundaries/element-types': ['error', {
      default: 'disallow',
      rules: [
        { from: 'atoms', allow: [] },
        { from: 'molecules', allow: ['atoms'] },
        { from: 'organisms', allow: ['atoms', 'molecules'] },
        { from: 'pages', allow: ['atoms', 'molecules', 'organisms'] }
      ]
    }]
  },
  settings: {
    'boundaries/elements': [
      { type: 'atoms', pattern: 'src/components/atoms/*' },
      { type: 'molecules', pattern: 'src/components/molecules/*' },
      { type: 'organisms', pattern: 'src/components/organisms/*' },
      { type: 'pages', pattern: 'src/pages/*' }
    ]
  }
};