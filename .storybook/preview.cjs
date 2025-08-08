export const parameters = {
  actions: { argTypesRegex: "^on[A-Z].*" },
  controls: {
    matchers: {
      color: /(background|color)$/i,
      date: /Date$/,
    },
  },
  backgrounds: {
    default: 'light',
    values: [
      {
        name: 'light',
        value: '#ffffff',
      },
      {
        name: 'dark',
        value: '#262626',
      },
      {
        name: 'brand',
        value: '#f0f8ff',
      },
    ],
  },
  docs: {
    story: {
      inline: true,
    },
  },
};
