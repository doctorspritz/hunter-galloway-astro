export default {
  title: 'Sections/HeroWidget',
  parameters: {
    layout: 'fullscreen',
  },
  argTypes: {
    variant: {
      control: { type: 'select' },
      options: ['professional', 'nurse', 'general', 'calculator', 'refinance'],
    },
    title: { control: 'text' },
    subtitle: { control: 'text' },
    description: { control: 'text' },
    buttonText: { control: 'text' },
    buttonHref: { control: 'text' },
    bottomText: { control: 'text' },
    backgroundImage: { control: 'text' },
  },
};

const Template = (args) => {
  const {
    variant = 'general',
    title = 'Expert Mortgage Advice',
    subtitle = "Australia's highest-rated mortgage broker with 97% approval rate",
    description = 'Get personalized mortgage solutions from our award-winning team',
    buttonText = 'Get a Free Assessment',
    buttonHref = '#',
    bottomText = 'We promise to get back to you within 4 business hours',
    backgroundImage
  } = args;

  // Determine background image based on variant if not provided
  const getBackgroundImage = (variant, customImage) => {
    if (customImage) return customImage;
    
    const images = {
      professional: '/images/doctors-hero.jpg',
      nurse: '/images/nurse-hero.jpg',
      general: '/images/post_hero.jpg',
      calculator: '/images/coronavirus-hero.jpg',
      refinance: '/images/post_hero.jpg',
    };
    
    return images[variant] || images.general;
  };

  const heroImage = getBackgroundImage(variant, backgroundImage);

  return `
    <section class="hero_widget widget" style="--heroBackgroundImage: url('${heroImage}');">
      <div class="container">
        <div class="inner_widget">
          <h1 class="hero_title">${title}</h1>
          ${subtitle ? `<p class="hero_subtitle">${subtitle}</p>` : ''}
          ${description ? `<p class="hero_text">${description}</p>` : ''}
          <div class="btn_wrap">
            <a href="${buttonHref}" class="hg-button hg-button--primary hg-button--full-width rc_open A-trigger">
              ${buttonText}
            </a>
          </div>
          ${bottomText ? `<p class="hero_text bottom-text">${bottomText}</p>` : ''}
        </div>
      </div>
    </section>
    <style>
      :root {
        --hg-font-family: 'Open Sans', system-ui, sans-serif;
        --hg-font-weight-black: 900;
      }
      
      .hero_widget {
        background: var(--heroBackgroundImage) no-repeat scroll center;
        background-size: cover;
        background-color: #000000;
        position: relative;
        padding: 50px 0 125px;
      }
      
      .hero_widget:after {
        content: '';
        background: rgba(4, 3, 3, 0.7);
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 0;
      }
      
      .hero_widget .inner_widget {
        text-align: center;
        position: relative;
        padding: 0 15px;
        z-index: 1;
      }
      
      .hero_widget .hero_title {
        color: #fff;
        font-family: var(--hg-font-family);
        font-weight: var(--hg-font-weight-black);
        font-size: 40px;
        padding-bottom: 30px;
        margin: 0;
        line-height: 1.2;
      }
      
      .hero_widget .hero_subtitle {
        color: #fff;
        font-family: var(--hg-font-family);
        font-weight: var(--hg-font-weight-black);
        font-size: 20px;
        padding-bottom: 40px;
        max-width: 840px;
        margin: 0 auto;
        line-height: 1.6;
      }
      
      .hero_widget .hero_text {
        color: #fff;
        font-family: var(--hg-font-family);
        font-size: 17px;
        padding-bottom: 43px;
        margin: 0 auto;
        line-height: 1.4;
      }
      
      .hero_widget .btn_wrap {
        margin: 0 auto;
        width: 370px;
        max-width: 100%;
        padding-bottom: 15px;
      }
      
      /* Button atom styles */
      .hg-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        user-select: none;
        white-space: nowrap;
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
        border-radius: 33px;
        font-weight: 600;
        font-size: 15px;
        min-height: auto;
        padding: 15px 20px;
        line-height: 1;
        transition: all 0.35s ease;
      }

      .hg-button--primary:hover {
        background: #E5A43F;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0px 8px 16px rgba(43, 43, 43, 0.2);
      }


      .hg-button--full-width {
        width: 100%;
      }
      
      .hero_widget .bottom-text {
        font-size: 15px;
        padding-bottom: 0;
      }
      
      @media screen and (max-width: 767px) {
        .hero_widget {
          padding: 15px 0 25px;
        }
        
        .hero_widget .inner_widget {
          text-align: left;
        }
        
        .hero_widget .hero_title {
          font-size: 28px;
          padding-bottom: 20px;
        }
        
        .hero_widget .hero_subtitle {
          font-size: 18px;
          line-height: 1.3;
          padding-bottom: 25px;
        }
        
        .hero_widget .hero_text {
          font-size: 16px;
          padding-bottom: 25px;
        }
        
        .hero_widget .btn_wrap {
          max-width: 342px;
          width: auto;
        }
        
        .hero_widget .bottom-text {
          text-align: center;
          font-size: 14px;
        }
      }
    </style>
  `;
};

export const Professional = Template.bind({});
Professional.args = {
  variant: 'professional',
  title: 'Home Loans for Doctors',
  subtitle: 'Borrow up to 95% of the property value without paying Lenders<br>Mortgage Insurance and access exclusive interest rate discounts.',
  description: 'Find out how we can save you $10,000 to $40,000 (or more)<br>in repayments across the life of your loan.',
};

export const Nurse = Template.bind({});
Nurse.args = {
  variant: 'nurse',
  title: 'Special Home Loan Offer for Nurses',
  subtitle: 'Nurses qualify for discounted interest rates and an LMI waiver up to 85% LVR',
  description: 'This would save $5,168 on a $500,000 purchase in Queensland, see how much you could save.',
};

export const Calculator = Template.bind({});
Calculator.args = {
  variant: 'calculator',
  title: 'Stamp Duty Calculator',
  subtitle: 'Calculate your stamp duty costs across all Australian states',
  description: 'Get an accurate estimate of stamp duty, transfer fees, and other government charges',
  buttonText: 'Start Calculator',
  buttonHref: '#calculator',
  bottomText: 'Free accurate calculations for all Australian states',
};

export const Refinance = Template.bind({});
Refinance.args = {
  variant: 'refinance',
  title: 'The RBA has cut interest rates twice this year <br> Has your bank done the same for you?',
  subtitle: 'If you have had your home loan for over 2 years, you may be on an <br>  uncompetitive interest rate.',
  description: 'Find out how much you can save',
};

export const General = Template.bind({});