export default {
  title: 'Molecules/StatCard',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    number: { control: 'text' },
    description: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['default', 'compact', 'featured'],
    },
  },
};

const Template = (args) => {
  const {
    number = '97%',
    description = 'Approval Rate',
    variant = 'default',
  } = args;

  return `
    <div class="hg-stat-card hg-stat-card--${variant} why_choose-item">
      <p class="stat-number">${number}</p>
      <p class="stat-description">${description}</p>
    </div>
    <style>
      :root {
        --surfaceAccent: #f0f8ff;
        --surfaceHighlight: #FFF5E2;
        --surfaceSecondary: #f8f9fa;
        --borderPrimary: #e5e7eb;
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --fontSize5xl: 3rem;
        --fontSize4xl: 2.25rem;
        --fontSize3xl: 1.875rem;
        --fontSize2xl: 1.5rem;
        --fontSizeMd: 1rem;
        --fontSizeSm: 0.875rem;
        --fontWeightDisplay: 800;
        --fontWeightHeading: 700;
        --fontWeightEmphasis: 500;
        --lineHeightTight: 1.25;
        --lineHeightBody: 1.5;
        --radiusMd: 12px;
        --radiusLg: 24px;
        --durationNormal: 300ms;
        --shadowProminent: 0 8px 30px rgba(0, 0, 0, 0.15);
        --spaceXl: 3rem;
        --spaceMd: 1.5rem;
        --spaceSm: 1rem;
      }

      .hg-stat-card {
        text-align: center;
        flex: 1;
        min-width: 200px;
        max-width: 250px;
        border-radius: var(--radiusMd);
        transition: transform var(--durationNormal) ease;
      }

      .hg-stat-card:hover {
        transform: translateY(-4px);
      }

      .stat-number {
        font-weight: var(--fontWeightDisplay);
        color: var(--textPrimary);
        margin: 0 0 var(--spaceSm) 0;
        line-height: var(--lineHeightTight);
      }

      .stat-description {
        color: var(--textSecondary);
        margin: 0;
        line-height: var(--lineHeightBody);
        font-weight: var(--fontWeightEmphasis);
      }

      /* Variant: default - standard stat card with accent background */
      .hg-stat-card--default {
        background: var(--surfaceAccent);
        padding: var(--spaceXl) var(--spaceMd);
      }

      .hg-stat-card--default .stat-number {
        font-size: var(--fontSize5xl);
      }

      .hg-stat-card--default .stat-description {
        font-size: var(--fontSizeMd);
      }

      /* Variant: compact - smaller, more condensed card */
      .hg-stat-card--compact {
        background: var(--surfaceSecondary);
        padding: var(--spaceMd) var(--spaceSm);
        min-width: 150px;
        max-width: 180px;
      }

      .hg-stat-card--compact .stat-number {
        font-size: var(--fontSize3xl);
      }

      .hg-stat-card--compact .stat-description {
        font-size: var(--fontSizeSm);
      }

      /* Variant: featured - prominent card for key statistics */
      .hg-stat-card--featured {
        background: var(--surfaceHighlight);
        padding: var(--spaceXl) var(--spaceMd);
        border: 2px solid var(--borderPrimary);
        border-radius: var(--radiusLg);
        min-width: 220px;
        max-width: 280px;
      }

      .hg-stat-card--featured:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadowProminent);
      }

      .hg-stat-card--featured .stat-number {
        font-size: var(--fontSize5xl);
        font-weight: var(--fontWeightDisplay);
      }

      .hg-stat-card--featured .stat-description {
        font-size: var(--fontSizeMd);
        font-weight: var(--fontWeightHeading);
      }

      /* Responsive design using design tokens */
      @media (max-width: 768px) {
        .hg-stat-card {
          min-width: auto;
          max-width: 300px;
          width: 100%;
        }
        
        .hg-stat-card--default .stat-number,
        .hg-stat-card--featured .stat-number {
          font-size: var(--fontSize4xl);
        }
        
        .hg-stat-card--compact .stat-number {
          font-size: var(--fontSize2xl);
        }
      }

      @media (max-width: 480px) {
        .hg-stat-card--default .stat-number,
        .hg-stat-card--featured .stat-number {
          font-size: var(--fontSize3xl);
        }
        
        .hg-stat-card--compact .stat-number {
          font-size: var(--fontSize2xl);
        }
        
        .hg-stat-card {
          padding: var(--spaceMd) var(--spaceSm);
        }
        
        .hg-stat-card--featured {
          padding: var(--spaceMd) var(--spaceSm);
        }
      }
    </style>
  `;
};

// Variant: default - standard stat card with accent background
export const Default = Template.bind({});
Default.args = {
  number: '97%',
  description: 'Approval Rate',
  variant: 'default',
};

// Variant: compact - smaller card for space-constrained layouts
export const Compact = Template.bind({});
Compact.args = {
  number: '30+',
  description: 'Banks & Lenders',
  variant: 'compact',
};

// Variant: featured - prominent card for key statistics
export const Featured = Template.bind({});
Featured.args = {
  number: '$2.5B+',
  description: 'Loans Processed',
  variant: 'featured',
};