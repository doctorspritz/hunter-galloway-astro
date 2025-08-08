export default {
  title: 'Sections/RiskWidget',
  parameters: {
    layout: 'fullscreen',
  },
  argTypes: {
    title: { control: 'text' },
    introText: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['default', 'light', 'reversed'],
    },
  },
};

const Template = (args) => {
  const {
    title = "Don't risk having your home loan declined",
    introText = 'Most people are unaware that',
    variant = 'default',
  } = args;

  const sampleItems = [
    {
      icon: 'risk-arrow',
      title: 'Specialist bank knowledge',
      description: 'We know which banks approve different types of applicants and which ones to avoid.',
      variant: 'default'
    },
    {
      icon: 'umbrella',
      title: 'Risk reduction expertise',
      description: 'Our proven process significantly reduces the chance of loan application rejection.',
      variant: 'default'
    },
    {
      icon: 'risk-puzzle',
      title: 'Complex application handling',
      description: 'We specialise in difficult applications that other brokers struggle with.',
      variant: 'default'
    }
  ];

  const marketStatExample = {
    text: 'banks reject around',
    percentage: '40%',
    tooltipText: 'Source: Industry statistics from major Australian banks'
  };

  const imageExample = {
    src: '/images/risk-manager.jpg',
    alt: 'Professional mortgage manager'
  };

  return `
    <section class="risk_widget widget risk-widget--${variant}">
      <div class="container">
        <div class="inner_widget">
          <h2 class="inner_title">${title}</h2>
          <div class="risk_holder">
            <div class="risk_inner-left">
              <div class="intro_text">
                ${introText}
                <span class="market_text">
                  ${marketStatExample.text} <strong class="market_percentage">${marketStatExample.percentage}</strong>
                  <span class="tooltip-trigger" title="${marketStatExample.tooltipText}">ⓘ</span>
                </span>
                of all home loan applications each year.
              </div>
              <ul class="risk_list">
                ${sampleItems.map(item => `
                  <li class="hg-risk-card hg-risk-card--${item.variant}">
                    <div class="risk-icon">
                      <div class="hg-icon hg-icon--md hg-icon--primary">
                        <svg viewBox="0 0 24 24" fill="currentColor" style="width: 24px; height: 24px;">
                          <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/>
                        </svg>
                      </div>
                    </div>
                    <p class="list_title">${item.title}</p>
                    <p class="list_text">${item.description}</p>
                  </li>
                `).join('')}
              </ul>
            </div>
            <div class="risk_imgwrap">
              <img src="https://via.placeholder.com/400x300/f0f0f0/666666?text=Professional+Manager" 
                   alt="${imageExample.alt}" 
                   style="width: 100%; height: auto; border-radius: 12px;">
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>
      :root {
        --surfacePrimary: #ffffff;
        --surfaceSecondary: #f8f9fa;
        --surfaceTertiary: #f1f3f4;
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --brandPrimary: #FDB948;
        --fontSize4xl: 40px;
        --fontSizeLg: 20px;
        --fontSizeMd: 17px;
        --fontSizeSm: 13px;
        --fontWeightDisplay: 900;
        --fontWeightHeading: 700;
        --lineHeightTight: 1.2;
        --lineHeightBody: 1.5;
        --radiusLg: 16px;
        --radiusMd: 12px;
        --spaceLg: 2rem;
        --spaceMd: 1.5rem;
        --spaceXl: 3rem;
        --space2xl: 4rem;
        --space3xl: 110px;
      }

      .risk_widget {
        margin-bottom: var(--space2xl);
      }

      .risk_widget .inner_widget {
        background: #eeeeee;
        border-radius: 10px;
        padding: 60px 70px;
        position: relative;
      }

      .risk_widget .inner_title {
        font-size: var(--fontSize4xl);
        font-weight: var(--fontWeightDisplay);
        color: var(--textPrimary);
        line-height: var(--lineHeightTight);
        text-align: center;
        max-width: 800px;
        margin: 0 auto 45px;
      }

      .risk_holder {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        gap: var(--spaceLg);
      }

      .risk_inner-left {
        flex: 0 0 45%;
        font-size: var(--fontSizeMd);
        line-height: var(--lineHeightBody);
        color: var(--textPrimary);
      }

      .intro_text {
        margin-bottom: var(--spaceLg);
        font-size: var(--fontSizeMd);
        line-height: var(--lineHeightBody);
      }

      .market_text {
        display: inline-block;
        margin-top: var(--spaceSm);
      }

      .market_percentage {
        color: var(--brandPrimary);
        font-weight: var(--fontWeightHeading);
      }

      .tooltip-trigger {
        display: inline-block;
        margin-left: 4px;
        color: var(--brandPrimary);
        cursor: help;
        font-size: 0.9em;
      }

      .risk_list {
        list-style: none;
        padding: 45px 0 0;
        margin: 0;
      }

      .risk_imgwrap {
        flex: 0 0 55%;
        position: relative;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      /* RiskCard embedded styles */
      .hg-risk-card {
        position: relative;
        padding-left: 54px;
        padding-bottom: 34px;
        list-style: none;
        display: block;
      }

      .hg-risk-card:last-child {
        padding-bottom: 0;
      }

      .hg-risk-card .risk-icon {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .hg-risk-card .list_title {
        font-size: var(--fontSizeLg);
        font-weight: var(--fontWeightDisplay);
        color: var(--textPrimary);
        line-height: var(--lineHeightTight);
        padding-bottom: 8px;
        margin: 0;
      }

      .hg-risk-card .list_text {
        font-size: var(--fontSizeMd);
        color: var(--textPrimary);
        line-height: var(--lineHeightTight);
        margin: 0;
      }

      .hg-icon--primary {
        color: var(--brandPrimary);
      }

      /* Variants */
      .risk-widget--light .inner_widget {
        background: #F2F2F2;
      }

      .risk-widget--light .hg-risk-card {
        background: var(--surfacePrimary);
        border-radius: var(--radiusMd);
        padding: var(--spaceMd);
        padding-left: calc(var(--spaceMd) + 54px);
        margin-bottom: var(--spaceSm);
      }

      .risk-widget--reversed .risk_holder {
        flex-direction: row-reverse;
      }

      .risk-widget--reversed .risk_inner-left {
        flex: 0 0 58%;
      }

      .risk-widget--reversed .risk_imgwrap {
        flex: 0 0 42%;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
      }

      /* Responsive */
      @media (max-width: 991px) {
        .risk_widget .inner_widget {
          padding: 40px 20px;
        }
        
        .risk_holder {
          flex-direction: column;
          gap: var(--spaceMd);
        }
        
        .risk_inner-left,
        .risk_imgwrap {
          flex: 1 1 100%;
        }
        
        .risk-widget--reversed .risk_inner-left,
        .risk-widget--reversed .risk_imgwrap {
          flex: 1 1 100%;
        }
      }

      @media (max-width: 767px) {
        .risk_widget .inner_widget {
          padding: 40px 20px;
        }
        
        .risk_widget .inner_title {
          font-size: 28px;
          margin-bottom: 30px;
        }
        
        .risk_inner-left {
          font-size: var(--fontSizeSm);
        }
        
        .risk_list {
          padding-top: 30px;
        }
        
        .risk_imgwrap {
          min-height: 200px;
        }
        
        .hg-risk-card {
          padding-left: 44px;
          padding-bottom: var(--spaceMd);
        }
        
        .hg-risk-card .risk-icon {
          width: 32px;
          height: 32px;
        }
        
        .hg-risk-card .list_title {
          font-size: var(--fontSizeSm);
        }
        
        .hg-risk-card .list_text {
          font-size: var(--fontSizeSm);
          margin-bottom: -5px;
        }

        .container {
          padding: 0 1rem;
        }
      }
    </style>
  `;
};

// Style variant: default - standard WordPress styling
export const Default = Template.bind({});
Default.args = {
  title: "Don't risk having your home loan declined",
  introText: 'Most people are unaware that',
  variant: 'default',
};

// Style variant: light - lighter background for blog posts/suburb pages
export const Light = Template.bind({});
Light.args = {
  title: "Don't risk having your home loan declined",
  introText: 'Most people are unaware that',
  variant: 'light',
};

// Style variant: reversed - image on left, content on right (doctor template style)
export const Reversed = Template.bind({});
Reversed.args = {
  title: "Specialist knowledge for medical professionals",
  introText: 'As a medical professional, you face unique challenges when',
  variant: 'reversed',
};