/** @type { import('@storybook/html-vite').StorybookConfig } */
const config = {
  stories: [
    "../hunter-galloway-astro/src/**/*.stories.@(js|jsx|mjs|ts|tsx|astro)",
    "../hunter-galloway-astro/src/**/*.mdx"
  ],
  addons: [
    "@storybook/addon-links",
    "@storybook/addon-essentials",
    "@storybook/addon-interactions"
  ],
  framework: {
    name: "@storybook/html-vite",
    options: {}
  },
  viteFinal: async (config) => {
    // Add Astro support to Vite config
    config.resolve = config.resolve || {};
    config.resolve.alias = {
      ...config.resolve.alias,
      '@': '/Users/simonheikkila/Documents/hunter-galloway/hunter-galloway-astro-with-CI/hunter-galloway-astro/src'
    };
    
    return config;
  }
};

export default config;