import type { StorybookConfig } from '@storybook/html-vite';

const config: StorybookConfig = {
  "stories": [
    // Root component stories only
    "../src/components/**/*.mdx",
    "../src/components/**/*.stories.@(js|jsx|mjs|ts|tsx|astro)"
  ],
  "addons": [
    "@storybook/addon-essentials",
    "@storybook/addon-docs",
    "@storybook/addon-a11y",
    "@storybook/addon-links"
  ],
  "framework": {
    "name": "@storybook/html-vite",
    "options": {}
  },
  "docs": {
    "autodocs": "tag"
  }
};
export default config;