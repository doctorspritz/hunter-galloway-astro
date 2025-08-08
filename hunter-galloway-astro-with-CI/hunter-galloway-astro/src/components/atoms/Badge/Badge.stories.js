export default {
  title: 'Atoms/Badge',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    text: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['primary', 'secondary'],
    },
    size: {
      control: { type: 'select' },
      options: ['sm', 'md'],
    },
  },
};

const Template = (args) => {
  const {
    text = 'Badge Text',
    variant = 'primary',
    size = 'sm'
  } = args;

  const classNames = `badge badge--${variant} badge--${size}`;

  return `
    <span class="${classNames}">
      ${text}
    </span>
    <style>
      .badge {
        display: inline-block;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-radius: 3px;
        line-height: 1;
      }

      .badge--primary {
        background: #F9A825;
        color: #FFFFFF;
      }

      .badge--secondary {
        background: #E5E5E5;
        color: #2B2B2B;
      }

      .badge--sm {
        padding: 0.125rem 0.375rem;
        font-size: 0.7rem;
      }

      .badge--md {
        padding: 0.25rem 0.5rem;
        font-size: 0.8rem;
      }
    </style>
  `;
};

export const Primary = Template.bind({});
Primary.args = {
  text: 'Popular',
  variant: 'primary',
};

export const Secondary = Template.bind({});
Secondary.args = {
  text: 'New',
  variant: 'secondary',
};

export const SmallSize = Template.bind({});
SmallSize.args = {
  text: 'Small',
  size: 'sm',
};

export const MediumSize = Template.bind({});
MediumSize.args = {
  text: 'Medium',
  size: 'md',
};

export const LongText = Template.bind({});
LongText.args = {
  text: 'Special Offer',
  variant: 'primary',
  size: 'md',
};