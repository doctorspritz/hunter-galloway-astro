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
    'keyframes-name-pattern': null
  },
  ignoreFiles: [
    'dist/**/*',
    'node_modules/**/*',
    '.astro/**/*'
  ]
};