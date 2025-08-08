module.exports = {
  stories: ['../src/components/**/*.stories.@(js|jsx|ts|tsx|astro)'],
  addons: [
    '@storybook/addon-essentials',
    '@storybook/addon-links'
  ],
  framework: {
    name: '@storybook/astro',
    options: {}
  }
};