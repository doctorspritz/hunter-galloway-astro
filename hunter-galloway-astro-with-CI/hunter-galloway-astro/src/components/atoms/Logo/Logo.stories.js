export default {
  title: 'Atoms/Logo',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    variant: {
      control: { type: 'select' },
      options: ['default', 'white', 'dark'],
    },
    size: {
      control: { type: 'select' },
      options: ['header', 'sm', 'md', 'lg'],
    },
    href: { control: 'text' },
    showBrisbane: { control: 'boolean' },
  },
};

const Template = (args) => {
  const {
    variant = 'default',
    size = 'header',
    href = '/',
    showBrisbane = true,
  } = args;

  const getLogoSrc = () => {
    if (variant === 'white') {
      return '/images/logo-white.svg';
    }
    
    if (showBrisbane) {
      return '/images/hunter_logo_black_.svg';
    } else {
      return '/images/no_brisbane_variants/hg_logo_black.svg';  
    }
  };

  const logoSrc = getLogoSrc();

  return `
    <a href="${href}" class="hg-logo hg-logo--${size}" aria-label="Hunter Galloway - Mortgage Brokers Brisbane">
      <img 
        src="${logoSrc}" 
        alt="Hunter Galloway Mortgage Brokers" 
        class="hg-logo__image"
        width="200" 
        height="48"
        onerror="this.src='/images/logo-yellow.svg'; console.warn('Logo fallback loaded');"
      />
    </a>
    <style>
      :root {
        --durationNormal: 300ms;
        --space8: 2rem;
        --space12: 3rem;
        --space16: 4rem;
      }

      .hg-logo {
        display: inline-block;
        text-decoration: none;
        transition: opacity var(--durationNormal) ease;
      }

      .hg-logo:hover {
        opacity: 0.8;
      }

      .hg-logo__image {
        display: block;
        width: auto;
        object-fit: contain;
      }

      .hg-logo--header .hg-logo__image {
        width: 126px;
      }

      .hg-logo--sm .hg-logo__image {
        height: var(--space8);
      }

      .hg-logo--md .hg-logo__image {
        height: var(--space12);
      }

      .hg-logo--lg .hg-logo__image {
        height: var(--space16);
      }

      @media (max-width: 992px) {
        .hg-logo--header .hg-logo__image {
          width: 94px;
        }
      }
    </style>
  `;
};

export const Default = Template.bind({});
Default.args = {
  variant: 'default',
  showBrisbane: true,
};

export const WithoutBrisbane = Template.bind({});
WithoutBrisbane.args = {
  variant: 'default',
  showBrisbane: false,
};

export const White = Template.bind({});
White.args = {
  variant: 'white',
};
White.parameters = {
  backgrounds: { default: 'dark' },
};

export const HeaderSize = Template.bind({});
HeaderSize.args = {
  size: 'header',
};

export const SmallSize = Template.bind({});
SmallSize.args = {
  size: 'sm',
};

export const MediumSize = Template.bind({});
MediumSize.args = {
  size: 'md',
};

export const LargeSize = Template.bind({});
LargeSize.args = {
  size: 'lg',
};