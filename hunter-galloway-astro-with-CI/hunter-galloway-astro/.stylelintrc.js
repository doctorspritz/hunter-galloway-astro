export default {
  extends: ['stylelint-config-standard'],
  rules: {
    // Allow Astro's define:vars CSS custom properties
    'custom-property-pattern': null,
    // Allow CSS-in-JS and Astro patterns
    'selector-class-pattern': null,
    // Allow CSS variables with underscores (common in design systems)
    'custom-property-empty-line-before': null,
    // Allow unknown at-rules for Astro/Tailwind
    'at-rule-no-unknown': [
      true,
      {
        ignoreAtRules: ['apply', 'variants', 'responsive', 'screen', 'tailwind']
      }
    ],
    // Allow unknown properties for CSS custom properties
    'property-no-unknown': [
      true,
      {
        ignoreProperties: ['/^--/']
      }
    ],
    // Allow camelCase keyframe names (common in JS animations)
    'keyframes-name-pattern': null,
    // Enforce design tokens usage - no hardcoded font values
    'declaration-property-value-disallowed-list': {
      'font-family': [
        // Disallow common hardcoded font families
        '"Open Sans"',
        "'Open Sans'",
        'Arial',
        'sans-serif',
        '"Gotham Pro"',
        "'Gotham Pro'",
      ],
      'font-weight': [
        // Disallow numeric font weights
        '400',
        '500', 
        '600',
        '700',
        '800',
        '900',
      ]
    }
  },
  ignoreFiles: [
    'dist/**/*',
    'node_modules/**/*',
    '.astro/**/*',
    'src/styles/global.css'  // Allow hardcoded fonts in global styles only
  ]
};