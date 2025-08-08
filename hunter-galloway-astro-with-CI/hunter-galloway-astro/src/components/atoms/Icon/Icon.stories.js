export default {
  title: 'Atoms/Icon',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    name: {
      control: { type: 'select' },
      options: ['phone', 'menu', 'search', 'close', 'chevron-down', 'chevron-right', 'chevron-left', 'arrow-left', 'checkmark'],
    },
    size: {
      control: { type: 'select' },
      options: ['xs', 'sm', 'md', 'lg', 'xl', '2xl'],
    },
    color: {
      control: { type: 'select' },
      options: ['inherit', 'primary', 'secondary', 'success', 'warning', 'error'],
    },
    inline: { control: 'boolean' },
    alt: { control: 'text' },
  },
};

const Template = (args) => {
  const {
    name = 'phone',
    size = 'md',
    color = 'inherit',
    inline = false,
    alt = '',
  } = args;

  const iconClasses = [
    'hg-icon',
    `hg-icon--${size}`,
    `hg-icon--${color}`,
    inline ? 'hg-icon--inline' : 'hg-icon--block',
  ].filter(Boolean).join(' ');

  const inlineIcons = {
    'phone': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.59l2.2-2.2c.27-.27.35-.66.24-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1z"/></svg>',
    'menu': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>',
    'search': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>',
    'close': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>',
    'chevron-down': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>',
    'chevron-right': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>',
    'chevron-left': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/></svg>',
    'arrow-left': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.42-1.41L7.83 13H20v-2z"/></svg>',
    'checkmark': '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>',
  };

  return `
    <span 
      class="${iconClasses}"
      role="${alt ? 'img' : 'presentation'}"
      aria-label="${alt || `${name} icon`}"
      aria-hidden="${!alt}"
    >
      ${inlineIcons[name] || ''}
    </span>
    <style>
      :root {
        --colorPrimary: #FDB948;
        --colorSecondary: #6b7280;
        --colorSuccess: #28a745;
        --colorWarning: #ffc107;
        --colorError: #dc3545;
        --spaceXs: 0.5rem;
        --spaceSm: 1rem;
        --spaceMd: 1.25rem;
        --spaceLg: 2rem;
        --spaceXl: 3rem;
      }

      .hg-icon {
        flex-shrink: 0;
        user-select: none;
        vertical-align: middle;
        max-width: 100%;
        height: auto;
      }

      .hg-icon svg {
        width: 100%;
        height: 100%;
        display: block;
      }

      .hg-icon--inline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .hg-icon--block {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .hg-icon--xs {
        width: 12px;
        height: 12px;
      }

      .hg-icon--sm {
        width: 16px;
        height: 16px;
      }

      .hg-icon--md {
        width: 20px;
        height: 20px;
      }

      .hg-icon--lg {
        width: 24px;
        height: 24px;
      }

      .hg-icon--xl {
        width: var(--spaceLg);
        height: var(--spaceLg);
      }

      .hg-icon--2xl {
        width: var(--spaceXl);
        height: var(--spaceXl);
      }

      .hg-icon--primary {
        color: var(--colorPrimary);
      }

      .hg-icon--secondary {
        color: var(--colorSecondary);
      }

      .hg-icon--success {
        color: var(--colorSuccess);
      }

      .hg-icon--warning {
        color: var(--colorWarning);
      }

      .hg-icon--error {
        color: var(--colorError);
      }

      .hg-icon--inherit {
        color: inherit;
      }
    </style>
  `;
};

export const Phone = Template.bind({});
Phone.args = {
  name: 'phone',
};

export const Menu = Template.bind({});
Menu.args = {
  name: 'menu',
};

export const Search = Template.bind({});
Search.args = {
  name: 'search',
};

export const Close = Template.bind({});
Close.args = {
  name: 'close',
};

export const ChevronDown = Template.bind({});
ChevronDown.args = {
  name: 'chevron-down',
};

export const Checkmark = Template.bind({});
Checkmark.args = {
  name: 'checkmark',
  color: 'success',
};

export const SmallSize = Template.bind({});
SmallSize.args = {
  name: 'phone',
  size: 'sm',
};

export const LargeSize = Template.bind({});
LargeSize.args = {
  name: 'phone',
  size: 'lg',
};

export const ExtraLargeSize = Template.bind({});
ExtraLargeSize.args = {
  name: 'phone',
  size: '2xl',
};

export const PrimaryColor = Template.bind({});
PrimaryColor.args = {
  name: 'checkmark',
  color: 'primary',
};

export const ErrorColor = Template.bind({});
ErrorColor.args = {
  name: 'close',
  color: 'error',
};

export const InlineIcon = Template.bind({});
InlineIcon.args = {
  name: 'phone',
  inline: true,
};