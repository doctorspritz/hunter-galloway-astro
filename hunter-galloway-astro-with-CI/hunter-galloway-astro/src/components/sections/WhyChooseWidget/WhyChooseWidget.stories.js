export default {
  title: 'Sections/WhyChooseWidget',
  parameters: {
    layout: 'fullscreen',
  },
  argTypes: {
    title: { control: 'text' },
    buttonText: { control: 'text' },
    buttonHref: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['default', 'light', 'dark'],
    },
  },
};

const Template = (args) => {
  const {
    title = 'Why Choose Hunter Galloway As Your Mortgage Broker?',
    buttonText = 'Get a Free Assessment',
    buttonHref = '#',
    variant = 'default',
  } = args;

  return `
    <section class="why_choose why_choose_widget widget why-choose-widget--${variant}">
      <div class="container">
        <div class="why_choose_title">${title}</div>
        
        <div class="why_choose_blocks">
          <div class="why_choose_blocks_inner">
            <div class="hg-benefit-card why_choose_item hg-benefit-card--default">
              <div class="benefit-icon">
                <div style="width: 96px; height: 96px; display: flex; align-items: center; justify-content: center;">
                  <svg viewBox="0 0 24 24" fill="#FDB948" style="width: 48px; height: 48px;">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                  </svg>
                </div>
              </div>
              <div class="benefit-title">One of the lowest rejection rates</div>
              <div class="benefit-description">across Mortgage Brokers in Australia</div>
            </div>
            
            <div class="hg-benefit-card why_choose_item hg-benefit-card--default">
              <div class="benefit-icon">
                <div style="width: 96px; height: 96px; display: flex; align-items: center; justify-content: center;">
                  <svg viewBox="0 0 24 24" fill="#FDB948" style="width: 48px; height: 48px;">
                    <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2c0 .88-.57 1.64-1.36 1.89L20 8v6h-6V8l1.36-2.11C14.57 5.64 14 4.88 14 4c0-1.11.89-2 2-2s2 .89 2 2"/>
                    <circle cx="9" cy="9" r="4"/>
                    <path d="M9 15c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4"/>
                  </svg>
                </div>
              </div>
              <div class="benefit-title">The highest rated and most reviewed</div>
              <div class="benefit-description">mortgage broker on Google Reviews</div>
            </div>
            
            <div class="hg-benefit-card why_choose_item hg-benefit-card--default">
              <div class="benefit-icon">
                <div style="width: 96px; height: 96px; display: flex; align-items: center; justify-content: center;">
                  <svg viewBox="0 0 24 24" fill="#FDB948" style="width: 48px; height: 48px;">
                    <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1m1 2v14h16V5H4m2 2h2v2H6V7m4 0h8v2h-8V7m-4 4h2v2H6v-2m4 0h8v2h-8v-2m-4 4h2v2H6v-2m4 0h8v2h-8v-2"/>
                  </svg>
                </div>
              </div>
              <div class="benefit-title">Direct access to 30+ banks and lenders</div>
              <div class="benefit-description">finding you the best rates and terms</div>
            </div>
          </div>
        </div>
        
        ${buttonText && buttonHref ? `
          <div class="btn_wrap">
            <a href="${buttonHref}" class="hg-button hg-button--primary hg-button--full-width btn_yellow">
              ${buttonText}
            </a>
          </div>
        ` : ''}
      </div>
    </section>
    <style>
      :root {
        --surfaceSecondary: #f8f9fa;
        --surfaceTertiary: #f1f3f4;
        --textPrimary: #1f2937;
        --textInverse: #ffffff;
        --fontSize4xl: 2.5rem;
        --fontWeightDisplay: 900;
        --lineHeightTight: 1.1;
        --spaceLg: 2rem;
        --spaceXl: 3rem;
        --space3xl: 110px;
      }

      .why_choose_widget {
        padding: 35px 0 0;
        margin-bottom: 80px;
      }

      .why_choose_title {
        font-size: var(--fontSize4xl);
        font-weight: var(--fontWeightDisplay);
        color: var(--textPrimary);
        line-height: var(--lineHeightTight);
        margin-bottom: var(--space3xl);
        text-align: center;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }

      .why_choose_blocks {
        margin-bottom: var(--spaceXl);
      }

      .why_choose_blocks_inner {
        display: flex;
        flex-wrap: wrap;
        gap: var(--spaceLg);
        justify-content: center;
        align-items: stretch;
      }

      .why_choose_blocks_inner > * {
        flex: 1;
        min-width: 250px;
        max-width: 350px;
      }

      .btn_wrap {
        text-align: center;
        margin-top: var(--spaceXl);
      }

      /* BenefitCard styles */
      .hg-benefit-card {
        text-align: center;
        border-radius: 12px;
        padding: 2rem;
        transition: transform 300ms ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
      }

      .hg-benefit-card:hover {
        transform: translateY(-4px);
      }

      .hg-benefit-card--default {
        background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), #5BD5FA;
      }

      .benefit-icon {
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 96px;
        height: 96px;
      }

      .benefit-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        line-height: 1.25;
        margin-bottom: 8px;
      }

      .benefit-description {
        font-size: 0.875rem;
        color: #6b7280;
        line-height: 1.5;
        margin: 0;
      }

      /* Button styles */
      .hg-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-family: 'Open Sans', system-ui, sans-serif;
        font-weight: 600;
        border-radius: 33px;
        transition: all 0.35s ease;
      }

      .hg-button--primary {
        background: #FDB948;
        color: #1f2937;
        box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
        padding: 15px 20px;
        font-size: 15px;
        line-height: 1;
      }

      .hg-button--primary:hover {
        background: #E5A43F;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0px 8px 16px rgba(43, 43, 43, 0.2);
      }

      /* Container */
      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
      }

      /* Variants */
      .why-choose-widget--light {
        background: var(--surfaceSecondary);
        padding: var(--spaceXl) 0;
      }

      .why-choose-widget--dark {
        background: #2d3748;
        padding: var(--spaceXl) 0;
      }

      .why-choose-widget--dark .why_choose_title {
        color: var(--textInverse);
      }

      /* Responsive */
      @media (max-width: 768px) {
        .why_choose_widget {
          padding: 2rem 0 0;
          margin-bottom: 3rem;
        }
        
        .why_choose_title {
          font-size: 28px;
          margin-bottom: 3rem;
          padding: 0 2rem;
        }
        
        .why_choose_blocks_inner {
          flex-direction: column;
          gap: 1.5rem;
          padding: 0 2rem;
        }
        
        .why_choose_blocks_inner > * {
          max-width: 100%;
          min-width: 100%;
        }
      }
    </style>
  `;
};

// Style variant: default - standard background
export const Default = Template.bind({});
Default.args = {
  title: 'Why Choose Hunter Galloway As Your Mortgage Broker?',
  buttonText: 'Get a Free Assessment',
  buttonHref: '#',
  variant: 'default',
};

// Style variant: light - light background
export const Light = Template.bind({});
Light.args = {
  title: 'Why Choose Hunter Galloway As Your Mortgage Broker?',
  buttonText: 'Get a Free Assessment',
  buttonHref: '#',
  variant: 'light',
};

// Style variant: dark - dark background
export const Dark = Template.bind({});
Dark.args = {
  title: 'Why Choose Hunter Galloway As Your Mortgage Broker?',
  buttonText: 'Get a Free Assessment',
  buttonHref: '#',
  variant: 'dark',
};