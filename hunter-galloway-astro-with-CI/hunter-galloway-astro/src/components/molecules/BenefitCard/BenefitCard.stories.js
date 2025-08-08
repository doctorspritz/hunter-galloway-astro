export default {
  title: 'Molecules/BenefitCard',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    icon: { control: 'text' },
    title: { control: 'text' },
    description: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['default', 'light', 'featured'],
    },
  },
};

const Template = (args) => {
  const {
    icon = 'star-icon',
    title = 'One of the lowest rejection rates',
    description = 'across Mortgage Brokers in Australia',
    variant = 'default',
  } = args;

  return `
    <div class="hg-benefit-card why_choose_item hg-benefit-card--${variant}" style="max-width: 300px;">
      <div class="benefit-icon">
        <div class="hg-icon hg-icon--lg hg-icon--primary" style="width: 96px; height: 96px; display: flex; align-items: center; justify-content: center;">
          <svg viewBox="0 0 24 24" fill="currentColor" style="width: 48px; height: 48px;">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
          </svg>
        </div>
      </div>
      <div class="benefit-title">${title}</div>
      <div class="benefit-description">${description}</div>
    </div>
    <style>
      :root {
        --surfaceAccent: #f0f8ff;
        --surfaceHighlight: #FFF5E2;
        --surfaceSecondary: #f8f9fa;
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --brandPrimary: #FDB948;
        --fontSizeLg: 1.25rem;
        --fontSizeMd: 1rem;
        --fontSizeSm: 0.875rem;
        --fontWeightHeading: 700;
        --lineHeightBody: 1.5;
        --radiusMd: 12px;
        --spaceLg: 2rem;
        --spaceMd: 1.5rem;
        --spaceSm: 1rem;
        --durationNormal: 300ms;
      }

      .hg-benefit-card {
        text-align: center;
        border-radius: var(--radiusMd);
        padding: var(--spaceLg);
        transition: transform var(--durationNormal) ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: var(--spaceSm);
      }

      .hg-benefit-card:hover {
        transform: translateY(-4px);
      }

      /* Style variant: default - WordPress standard light blue background */
      .hg-benefit-card--default {
        background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), #5BD5FA;
      }

      /* Style variant: light - softer background */
      .hg-benefit-card--light {
        background: var(--surfaceAccent);
      }

      /* Style variant: featured - highlighted background with border */
      .hg-benefit-card--featured {
        background: var(--surfaceHighlight);
        border: 2px solid var(--brandPrimary);
      }

      .benefit-icon {
        margin-bottom: var(--spaceSm);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 96px;
        height: 96px;
      }

      .benefit-title {
        font-size: var(--fontSizeLg);
        font-weight: var(--fontWeightHeading);
        color: var(--textPrimary);
        line-height: 1.25;
        margin-bottom: 8px;
      }

      .benefit-description {
        font-size: var(--fontSizeSm);
        color: var(--textSecondary);
        line-height: var(--lineHeightBody);
        margin: 0;
      }

      .hg-icon--primary {
        color: var(--brandPrimary);
      }

      /* WordPress compatibility */
      .why_choose_item {
        width: 100%;
      }
    </style>
  `;
};

// Style variant: default - WordPress standard styling
export const Default = Template.bind({});
Default.args = {
  icon: 'star-icon',
  title: 'One of the lowest rejection rates',
  description: 'across Mortgage Brokers in Australia',
  variant: 'default',
};

// Style variant: light - softer background styling
export const Light = Template.bind({});
Light.args = {
  icon: 'star-icon',
  title: 'One of the lowest rejection rates',
  description: 'across Mortgage Brokers in Australia',
  variant: 'light',
};

// Style variant: featured - highlighted styling with border
export const Featured = Template.bind({});
Featured.args = {
  icon: 'star-icon',
  title: 'One of the lowest rejection rates',
  description: 'across Mortgage Brokers in Australia',
  variant: 'featured',
};