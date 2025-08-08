export default {
  title: 'Atoms/Typography',
  parameters: {
    layout: 'padded',
  },
  argTypes: {
    element: {
      control: { type: 'select' },
      options: ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'span', 'div'],
    },
    size: {
      control: { type: 'select' },
      options: ['xs', 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '4.5xl', '5xl'],
    },
    color: {
      control: { type: 'select' },
      options: ['primary', 'secondary', 'tertiary', 'inverse'],
    },
    align: {
      control: { type: 'select' },
      options: ['left', 'center', 'right', 'justify'],
    },
    weight: {
      control: { type: 'select' },
      options: ['body', 'emphasis', 'strong', 'heading', 'bold', 'display'],
    },
    noWrap: { control: 'boolean' },
    children: { control: 'text' },
  },
};

const Template = (args) => {
  const {
    element = 'p',
    size = 'md',
    color = 'primary',
    align = 'left',
    weight = 'body',
    noWrap = false,
    children = 'Typography sample text'
  } = args;

  const sizeClass = size === '4.5xl' ? '4_5xl' : size;
  const textClasses = [
    'hg-typography',
    `hg-typography--${sizeClass}`,
    `hg-typography--${weight}`,
    `hg-typography--${color}`,
    `hg-typography--${align}`,
    noWrap && 'hg-typography--nowrap',
  ].filter(Boolean).join(' ');

  const inlineStyles = [
    '--fontSize45xl: 4.5rem',
    '--fontSize5xl: 3rem',
    '--fontSize4xl: 2.25rem',
    '--fontSize3xl: 1.875rem',
    '--fontSize2xl: 1.5rem',
    '--fontSizeXl: 1.25rem',
    '--fontSizeLg: 1.125rem',
    '--fontSizeMd: 1rem',
    '--fontSizeSm: 0.875rem',
    '--fontSizeXs: 0.75rem',
    '--fontWeightHeading: 700',
    '--fontWeightDisplay: 800',
    '--fontWeightStrong: 600',
    '--fontWeightEmphasis: 500',
    '--fontWeightBody: 400',
    '--colorTextPrimary: #1f2937',
    '--colorTextSecondary: #6b7280',
    '--colorTextTertiary: #9ca3af',
    '--colorTextInverse: #ffffff',
  ].join('; ');

  return `
    <${element} class="${textClasses}" style="${inlineStyles}">
      ${children}
    </${element}>
    <style>
      .hg-typography {
        font-family: 'Open Sans', system-ui, sans-serif;
        margin: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      .hg-typography--xs { font-size: var(--fontSizeXs); }
      .hg-typography--sm { font-size: var(--fontSizeSm); }
      .hg-typography--md { font-size: var(--fontSizeMd); }
      .hg-typography--lg { font-size: var(--fontSizeLg); }
      .hg-typography--xl { font-size: var(--fontSizeXl); }
      .hg-typography--2xl { font-size: var(--fontSize2xl); }
      .hg-typography--3xl { font-size: var(--fontSize3xl); }
      .hg-typography--4xl { font-size: var(--fontSize4xl); }
      .hg-typography--4_5xl { font-size: var(--fontSize45xl); }
      .hg-typography--5xl { font-size: var(--fontSize5xl); }

      .hg-typography--body { font-weight: var(--fontWeightBody); }
      .hg-typography--emphasis { font-weight: var(--fontWeightEmphasis); }
      .hg-typography--strong { font-weight: var(--fontWeightStrong); }
      .hg-typography--heading { font-weight: var(--fontWeightHeading); }
      .hg-typography--bold { font-weight: var(--fontWeightHeading); }
      .hg-typography--display { font-weight: var(--fontWeightDisplay); }

      .hg-typography--primary { color: var(--colorTextPrimary); }
      .hg-typography--secondary { color: var(--colorTextSecondary); }
      .hg-typography--tertiary { color: var(--colorTextTertiary); }
      .hg-typography--inverse { color: var(--colorTextInverse); }

      .hg-typography--left { text-align: left; }
      .hg-typography--center { text-align: center; }
      .hg-typography--right { text-align: right; }
      .hg-typography--justify { text-align: justify; }

      .hg-typography--nowrap { white-space: nowrap; }
    </style>
  `;
};

export const Heading1 = Template.bind({});
Heading1.args = {
  element: 'h1',
  size: '4xl',
  weight: 'display',
  children: 'Main Page Heading',
};

export const Heading2 = Template.bind({});
Heading2.args = {
  element: 'h2',
  size: '3xl',
  weight: 'heading',
  children: 'Section Heading',
};

export const Heading3 = Template.bind({});
Heading3.args = {
  element: 'h3',
  size: '2xl',
  weight: 'heading',
  children: 'Subsection Heading',
};

export const BodyText = Template.bind({});
BodyText.args = {
  element: 'p',
  size: 'md',
  weight: 'body',
  children: 'This is body text used for paragraphs and general content.',
};

export const LargeText = Template.bind({});
LargeText.args = {
  element: 'p',
  size: 'lg',
  weight: 'body',
  children: 'This is large body text for emphasis.',
};

export const SmallText = Template.bind({});
SmallText.args = {
  element: 'p',
  size: 'sm',
  weight: 'body',
  children: 'This is small text for captions or secondary information.',
};

export const StrongText = Template.bind({});
StrongText.args = {
  element: 'span',
  size: 'md',
  weight: 'strong',
  children: 'This text has strong emphasis',
};

export const SecondaryColor = Template.bind({});
SecondaryColor.args = {
  element: 'p',
  size: 'md',
  color: 'secondary',
  children: 'This text uses secondary color',
};

export const CenteredText = Template.bind({});
CenteredText.args = {
  element: 'p',
  size: 'md',
  align: 'center',
  children: 'This text is center aligned',
};

export const DisplayText = Template.bind({});
DisplayText.args = {
  element: 'h1',
  size: '5xl',
  weight: 'display',
  children: 'Display Text',
};

export const InverseText = Template.bind({});
InverseText.args = {
  element: 'p',
  size: 'md',
  color: 'inverse',
  children: 'This is inverse text for dark backgrounds',
};
InverseText.parameters = {
  backgrounds: { default: 'dark' },
};

export const NoWrapText = Template.bind({});
NoWrapText.args = {
  element: 'span',
  size: 'md',
  noWrap: true,
  children: 'This text will not wrap to multiple lines',
};