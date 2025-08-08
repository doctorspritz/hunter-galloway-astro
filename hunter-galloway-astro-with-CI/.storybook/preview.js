/** @type { import('@storybook/html').Preview } */

// Add global styles for Storybook
const globalStyles = document.createElement('style');
globalStyles.innerHTML = `
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&display=swap');
  
  /* Global font family */
  body, html {
    font-family: 'Open Sans', system-ui, sans-serif !important;
  }
  
  /* Reset serif fonts in Storybook */
  * {
    font-family: 'Open Sans', system-ui, sans-serif !important;
  }
  
  /* Hunter Galloway Design System - CSS Variables */
  :root {
    /* Colors from design tokens */
    --hg-yellow-primary: #FDB948;
    --hg-yellow-dark: #E5A43F;
    --hg-yellow-alt: #EC9B16;
    --hg-gray-dark: #262626;
    --hg-gray-text: #444;
    --hg-gray-text-light: #1e1e1e;
    --hg-gray-light: #FFF5E2;
    --hg-background: #f8f9fa;
    --hg-background-alt: #f4f4f4;
    --hg-light-blue: #f0f8ff;
    --hg-white: #fff;
    --hg-success: #28a745;
    --hg-tooltip-bg: #333;
    --hg-tooltip-text: #fff;
    
    /* Typography from design tokens */
    --hg-font-family: 'Open Sans', system-ui, sans-serif;
    --hg-font-weight-normal: 400;
    --hg-font-weight-medium: 500;
    --hg-font-weight-semibold: 600;
    --hg-font-weight-bold: 700;
    --hg-font-weight-extrabold: 800;
    --hg-font-weight-black: 900;
    
    /* Spacing from design tokens */
    --hg-section-padding: 50px;
    --hg-container-max-width: 1272px;
    --hg-card-padding: 2rem;
    --hg-card-gap: 2rem;
    --hg-border-radius-sm: 4px;
    --hg-border-radius-md: 12px;
    --hg-border-radius-lg: 24px;
    --hg-border-radius-pill: 25px;
    
    /* Effects from design tokens */
    --hg-shadow-md: 0 4px 20px rgb(0 0 0 / 10%);
    --hg-shadow-lg: 0 8px 30px rgb(0 0 0 / 15%);
    --hg-shadow-tooltip: 0 4px 12px rgb(0 0 0 / 15%);
    --hg-transition-normal: 0.3s;
    --hg-transform-hover: translateY(-4px);
    --hg-z-tooltip: 1000;
  }
`;
document.head.appendChild(globalStyles);

const preview = {
  parameters: {
    controls: {
      matchers: {
        color: /(background|color)$/i,
        date: /Date$/i,
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
          value: '#333333',
        },
      ],
    },
  },
  globalTypes: {
    theme: {
      description: 'Global theme for components',
      defaultValue: 'light',
      toolbar: {
        title: 'Theme',
        icon: 'circlehollow',
        items: ['light', 'dark'],
        dynamicTitle: true,
      },
    },
  },
};

export default preview;