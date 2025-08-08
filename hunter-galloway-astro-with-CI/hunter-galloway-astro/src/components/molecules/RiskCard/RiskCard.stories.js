export default {
  title: 'Molecules/RiskCard',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    icon: { control: 'text' },
    title: { control: 'text' },
    description: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['default', 'compact', 'highlighted'],
    },
  },
};

const Template = (args) => {
  const {
    title = 'Specialist bank knowledge',
    description = 'We know which banks approve different types of applicants and which ones to avoid.',
    variant = 'default',
  } = args;

  return `
    <div style="max-width: 400px; background: #eeeeee; padding: 2rem; border-radius: 10px;">
      <ul class="risk_list" style="list-style: none; padding: 0; margin: 0;">
        <li class="hg-risk-card hg-risk-card--${variant}" style="position: relative; padding-left: 54px; padding-bottom: 34px; list-style: none; display: block;">
          <div class="risk-icon" style="position: absolute; left: 0; top: 0; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
            <div class="hg-icon hg-icon--md hg-icon--primary" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
              <svg viewBox="0 0 24 24" fill="currentColor" style="width: 24px; height: 24px;">
                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/>
              </svg>
            </div>
          </div>
          <p class="list_title" style="font-size: 20px; font-weight: 900; color: #1f2937; line-height: 1.2; padding-bottom: 8px; margin: 0;">${title}</p>
          <p class="list_text" style="font-size: 17px; color: #1f2937; line-height: 1.2; margin: 0;">${description}</p>
        </li>
      </ul>
    </div>
    <style>
      :root {
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --brandPrimary: #FDB948;
        --fontSizeLg: 20px;
        --fontSizeMd: 17px;
        --fontSizeSm: 13px;
        --fontWeightDisplay: 900;
        --fontWeightHeading: 700;
        --lineHeightTight: 1.2;
        --lineHeightBody: 1.5;
        --spaceLg: 2rem;
        --spaceMd: 1.5rem;
        --spaceSm: 1rem;
      }

      /* Variant overrides */
      .hg-risk-card--compact {
        padding-left: 44px !important;
        padding-bottom: 1.5rem !important;
      }

      .hg-risk-card--compact .risk-icon {
        width: 32px !important;
        height: 32px !important;
      }

      .hg-risk-card--compact .list_title {
        font-size: 17px !important;
        font-weight: 700 !important;
        padding-bottom: 4px !important;
      }

      .hg-risk-card--compact .list_text {
        font-size: 13px !important;
        color: #6b7280 !important;
        line-height: 1.5 !important;
      }

      .hg-risk-card--highlighted {
        padding-left: 61px !important;
        padding-bottom: 2rem !important;
        border-left: 3px solid #FDB948 !important;
        margin-left: -3px !important;
      }

      .hg-risk-card--highlighted .risk-icon {
        left: 12px !important;
        width: 44px !important;
        height: 44px !important;
        background: rgba(253, 185, 72, 0.1) !important;
        border-radius: 50% !important;
      }

      .hg-risk-card--highlighted .list_title {
        color: #FDB948 !important;
        padding-bottom: 10px !important;
      }

      .hg-icon--primary {
        color: #FDB948;
      }
    </style>
  `;
};

// Style variant: default - WordPress standard styling
export const Default = Template.bind({});
Default.args = {
  icon: 'risk-arrow',
  title: 'Specialist bank knowledge',
  description: 'We know which banks approve different types of applicants and which ones to avoid.',
  variant: 'default',
};

// Style variant: compact - smaller sizing for dense layouts
export const Compact = Template.bind({});
Compact.args = {
  icon: 'risk-puzzle',
  title: 'Reduced complexity',
  description: 'Simplified application process.',
  variant: 'compact',
};

// Style variant: highlighted - emphasized styling for key points
export const Highlighted = Template.bind({});
Highlighted.args = {
  icon: 'umbrella',
  title: 'Protection against rejection',
  description: 'Our expertise significantly reduces the risk of loan application rejection.',
  variant: 'highlighted',
};