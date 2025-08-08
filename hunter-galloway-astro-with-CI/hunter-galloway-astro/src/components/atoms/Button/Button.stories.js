export default {
  title: 'Atoms/Button',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    variant: {
      control: { type: 'select' },
      options: ['primary', 'secondary', 'ghost', 'outline'],
    },
    size: {
      control: { type: 'select' },
      options: ['sm', 'md', 'lg'],
    },
    type: {
      control: { type: 'select' },
      options: ['button', 'submit', 'reset'],
    },
    disabled: { control: 'boolean' },
    loading: { control: 'boolean' },
    fullWidth: { control: 'boolean' },
    href: { control: 'text' },
    target: {
      control: { type: 'select' },
      options: ['_blank', '_self', '_parent', '_top'],
    },
  },
};

const Template = (args) => {
  const {
    variant = 'primary',
    size = 'md',
    type = 'button',
    disabled = false,
    loading = false,
    fullWidth = false,
    href,
    target = '_self',
    children = 'Button Text'
  } = args;

  const buttonClasses = [
    'hg-button',
    `hg-button--${variant}`,
    `hg-button--${size}`,
    disabled && 'hg-button--disabled',
    loading && 'hg-button--loading',
    fullWidth && 'hg-button--full-width',
  ].filter(Boolean).join(' ');

  const Element = href ? 'a' : 'button';
  
  const spinnerSvg = `
    <svg class="animate-spin -ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
      <path class="opacity-75" fill="currentColor" d="m4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
  `;

  if (Element === 'a') {
    return `
      <a 
        href="${href}"
        target="${target}"
        class="${buttonClasses}"
        role="button"
        tabindex="${disabled ? -1 : 0}"
        aria-disabled="${disabled}"
      >
        ${loading ? spinnerSvg : ''}${children}
      </a>
      ${getStyles()}
    `;
  } else {
    return `
      <button
        type="${type}"
        class="${buttonClasses}"
        ${disabled || loading ? 'disabled' : ''}
        aria-disabled="${disabled || loading}"
      >
        ${loading ? spinnerSvg : ''}${children}
      </button>
      ${getStyles()}
    `;
  }
};

function getStyles() {
  return `
    <style>
      :root {
        --fontFamilyBody: 'Open Sans', system-ui, sans-serif;
        --fontWeightStrong: 600;
        --radiusPill: 33px;
        --durationNormal: 300ms;
        --colorInteractivePrimary: #FDB948;
        --colorInteractivePrimaryHover: #E5A43F;
        --colorInteractiveSecondary: #f8f9fa;
        --colorSurfaceTertiary: #f4f4f4;
        --colorSurfaceSecondary: #f8f9fa;
        --colorTextPrimary: #1f2937;
        --colorBorderFocus: #FDB948;
        --fontSizeSm: 0.875rem;
        --fontSizeMd: 1rem;
        --fontSizeLg: 1.125rem;
        --spaceSm: 1rem;
        --spaceMd: 1.5rem;
        --spaceLg: 2rem;
      }

      .hg-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        user-select: none;
        white-space: nowrap;
        border: none;
        cursor: pointer;
        font-family: var(--fontFamilyBody);
        font-weight: var(--fontWeightStrong);
        border-radius: var(--radiusPill);
        transition: all var(--durationNormal) ease;
      }

      .hg-button--primary {
        background: var(--colorInteractivePrimary);
        color: var(--colorTextPrimary);
        box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
        border-radius: 33px;
        font-weight: 600;
        font-size: 15px;
        min-height: 48px;
        line-height: 1;
        transition: all 0.35s ease;
      }

      .hg-button--primary:hover {
        background: var(--colorInteractivePrimaryHover);
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0px 8px 16px rgba(43, 43, 43, 0.2);
      }

      .hg-button--secondary {
        background: var(--colorInteractiveSecondary);
        color: var(--colorTextPrimary);
      }

      .hg-button--secondary:hover {
        background: var(--colorSurfaceTertiary);
        text-decoration: none;
      }

      .hg-button--ghost {
        background: transparent;
        color: var(--colorInteractivePrimary);
      }

      .hg-button--ghost:hover {
        background: var(--colorSurfaceSecondary);
        text-decoration: none;
      }

      .hg-button--outline {
        background: transparent;
        color: var(--colorInteractivePrimary);
        border: 2px solid var(--colorInteractivePrimary);
      }

      .hg-button--outline:hover {
        background: var(--colorInteractivePrimary);
        color: var(--colorTextPrimary);
        text-decoration: none;
      }

      .hg-button--sm {
        padding: var(--spaceSm) var(--spaceMd);
        font-size: var(--fontSizeSm);
      }

      .hg-button--md {
        padding: var(--spaceSm) var(--spaceMd);
        font-size: var(--fontSizeMd);
      }

      .hg-button--lg {
        padding: var(--spaceMd) var(--spaceLg);
        font-size: var(--fontSizeLg);
      }

      .hg-button--disabled {
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
      }

      .hg-button--loading {
        cursor: wait;
      }

      .hg-button--full-width {
        width: 100%;
      }

      .hg-button:focus {
        outline: 2px solid var(--colorBorderFocus);
        outline-offset: 2px;
      }

      @keyframes spin {
        to {
          transform: rotate(360deg);
        }
      }

      .animate-spin {
        animation: spin 1s linear infinite;
      }
    </style>
  `;
}

export const Primary = Template.bind({});
Primary.args = {
  children: 'Get a Free Assessment',
  variant: 'primary',
};

export const Secondary = Template.bind({});
Secondary.args = {
  children: 'Learn More',
  variant: 'secondary',
};

export const Ghost = Template.bind({});
Ghost.args = {
  children: 'Cancel',
  variant: 'ghost',
};

export const Outline = Template.bind({});
Outline.args = {
  children: 'View Details',
  variant: 'outline',
};

export const Small = Template.bind({});
Small.args = {
  children: 'Small Button',
  size: 'sm',
};

export const Large = Template.bind({});
Large.args = {
  children: 'Large Button',
  size: 'lg',
};

export const Loading = Template.bind({});
Loading.args = {
  children: 'Processing...',
  loading: true,
};

export const Disabled = Template.bind({});
Disabled.args = {
  children: 'Disabled Button',
  disabled: true,
};

export const FullWidth = Template.bind({});
FullWidth.args = {
  children: 'Full Width Button',
  fullWidth: true,
};
FullWidth.parameters = {
  layout: 'padded',
};

export const AsLink = Template.bind({});
AsLink.args = {
  children: 'Visit Page',
  href: '#',
  target: '_blank',
};