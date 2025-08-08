module.exports = {
  stories: ['../src/components/**/*.stories.@(js|jsx|ts|tsx|astro)'],
  addons: [
    '@storybook/addon-essentials',
    '@storybook/addon-links',
    '@storybook/addon-a11y'
  ],
  framework: {
    name: '@storybook/astro',
    options: {}
  },
  docs: {
    autodocs: 'tag',
  },
};
