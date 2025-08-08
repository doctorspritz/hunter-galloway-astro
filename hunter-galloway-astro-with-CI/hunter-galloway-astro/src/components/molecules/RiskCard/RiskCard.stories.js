/**
 * RiskCard Component Stories
 * Hunter Galloway Design System - Molecular Component
 * 
 * Stories for the RiskCard component used within RiskWidget sections.
 * Each story demonstrates different icon types, content, and variants.
 */

export default {
  title: 'Molecules/RiskCard',
  parameters: {
    layout: 'centered',
    docs: {
      description: {
        component: 'Individual risk item card displaying icon, title, and content blocks. Used within RiskWidget sections for WordPress-exact risk mitigation content.'
      }
    }
  },
  argTypes: {
    icon: { 
      control: { type: 'select' },
      options: ['scheme', 'umbrella', 'video-conference', 'arrow', 'puzzle', 'dollar', 'custom'],
      description: 'Icon type for the risk item'
    },
    title: { 
      control: 'text',
      description: 'Title/heading for this risk item' 
    },
    content: { 
      control: 'object',
      description: 'Array of text content blocks' 
    },
    variant: {
      control: { type: 'select' },
      options: ['default', 'compact', 'highlighted'],
      description: 'Visual variant for the card'
    },
  },
};

const Template = (args) => {
  const {
    title = 'We know the banks inside out',
    content = [
      'Our brokers have over 35 years of combined experience in the finance industry, including decades of banking experience, and have processed thousands of home loan applications.',
      'We have a wide range of lenders on our panel and we intimately understand their credit policies.'
    ],
    icon = 'scheme',
    variant = 'default',
  } = args;

  return `
    <div style="max-width: 500px; background: #eeeeee; padding: 2rem; border-radius: 10px;">
      <ul class="risk_list" style="list-style: none; padding: 45px 0 0 0; margin: 0;">
        <li class="hg-risk-card hg-risk-card--${variant} ${icon}_ico">
          <p class="list_title">${title}</p>
          ${content.map(text => `<p class="list_text">${text}</p>`).join('')}
        </li>
      </ul>
    </div>
    <style>
      /* WordPress exact RiskCard implementation */
      .hg-risk-card {
        position: relative;
        padding: 0 0 34px 54px;
        list-style: none;
      }

      .hg-risk-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
      }

      /* Icon mappings - WordPress exact base64 data URIs */
      .scheme_ico::before {
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPDSURBVHgBvVj/VeMwDP7g8T+MYDYIE5xvguMmaDYoGzRMADdBywQtEzQblA3ITdBu0IuuElYcOb8KfO/pxYll+7Mky3aAr8OyliPLAt8AX8t9LW6Abo4TsV0t71z2+EI8IViDBnQ9+gXr/sLJelL+EmSK2LMqb2tZJ9p4hAmR7GFP6qaWeS0zLp9FkMgsooGPHe1yhMlkRr1DcL/oTSa5Rdsa8k2DBvBKjqxnIef6ZwTP5LHSFYbhJzd2tWxqqRJ6RCbDMIi1rmu54PJ+aMMhprYs+M6DLJXcd4wTu7gXOsaeMI3goIEYDmFSvUbxCDORmenUMOeOjmcK9b3AwEldRbMhvNRS4mShu1peucOilgPXnQPHfclYnbhQZYkJbWoi+IYwQ1osldEPtdG7DFn6NaFLOrtoHNK75XJeyw+cDPFqNRY36uDuShdAM9i1EBFv6Ev8LlkeFDnd3hzTCn5LOUewGJXnCPmP3tdIHxasMfT3rENnEMEbhCQbk9aWdwjWXfSMQZBJLRFW92iCGXfk0U4N1op0aJ9oUgS1LskDJhDc8buLdOYIW2HsUh/1kXSf0i3o5RLj4HCyYLxCya3k7gNLHrUrWTyGnSc/cNlDRkQTIawNXTAxShd3Rn+S8zxGoOuw8G58k5j7G30v+bnh8iPaCb3ip+sZowGL4AvaCTZHNyiZUxKn2PMskuSnoBrbVgI8R+LchmDde9grMFffuxZJA1eq0/kA/ZKfs1pWUd0uIhq7Tw4eG0y4nxToP4XEKcIbfcg2GVvPIWx9ug8NuZ8UMFZ6kRhUoAl6pG935yRqnaBbl6wCwwlq/ZgkhcpMvXs1cKG+b2F7aa36/q/fdyfZwk6sBT8XTGDDQulHEvUMYcKPaBIUlGhOhtx8ze8HqaBZS+xoizgEc8cW1J3K1peKW2+0s1ysTz8Nz8ipQZ8kNMEt16cu36IrAU6S9+hasUrw3PbjEHLBJCgp/uZGJU5J16l32nvpElUhfeUciowJpNzeQhywkiIcmq4tkD45j5E9EseoFBxOSXcbNYwJDoHlOo/2Kh4MWsUV7K1L/hA4lsrQoQWmdwVy3QFpUD0tqj/c/0zVUViVMAgiQW6tCJIVbw09uYdoVNH7Gw/8pur3/CyZdIaR50Q6fJJbyEIrhItMDIlfr2TIbxONFffR9yejgQLNywuVXaSTqboZpkH/GB0Vp/GPnbihQ/s3iMd47BH+H0p5FDzs2JAzXxGVx0I2CQmpHT4JHmFLkq1uipv1NkvPDJ+IAsG9K0yHrGJzcf0DmGawuv4vemgAAAAASUVORK5CYII=');
        width: 40px;
        height: 40px;
      }

      .umbrella_ico::before {
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIOSURBVHgB7VjtUcMwDH3HMUBGMBNQJsAbwAaUCegG9Qhs0DBBYYKwQdmgbFA2gOgq1apbKcm1pX/67nQG61l+kT9kAA7HuLXf1p4czmMPDq5wOAK3Nw5nxO2dw8E1/gd10fYCpbNprXI4obWX1matLVtbYb0E1C5am7M/wEfVxWk4cNzji8rf14hv7RP5EBMTrL8sqL5RIWJV/D5nzrzo06KW2M3CCh1iSrwUIhLW6R3vmaRCXrIH7k/MkRhTFZv8ET0xxfaX6n0kmSmXICEvj560NgQNFpIKX1C+UPgq5asMoYMEjdWgieNvjPGNM3aiYj+iAwF5jZPBqZ3J9IQzw/+KvAe9K2Qz0dLhLGAff3B/VwzJXrIIATmFETasPSHQ+8ZCREd2JL2NE2SkgniQIx4czk52dKF84rZ2AshXfMHHN7fB4bxxey8d12oSqaxUfeVWpf4fDl5j+4KjCzGqcVA8AflusT45oeC9889RzbPp+D2j0fybZQqFato/d5wlap+RUy/4Yp6k+83gfTLvxokX9ICEfBy9sy8FcLFnbFJ9sjnn8LF1QV4p9RL4xxn8we0rfEi23jt4Em9Q9faQ0HGB9cUx3sBHw0WMhYsYCxcxFi5iLJxKDNU3qjvTIYOOKUYXWHrHRPT4C+DYiMhPURIRkKv7DGeAPAW0rdD9n4iTgJaoRn6Ik7jRwBj4A/+t2wsaJVKWAAAAAElFTkSuQmCC');
        width: 35px;
        height: 35px;
      }

      .video-conference_ico::before {
        background-image: url('/images/video-conference.svg');
        width: 43px;
        height: 43px;
      }

      .arrow_ico::before {
        background-image: url('/images/risk_arrow.svg');
        width: 44px;
        height: 44px;
      }

      .puzzle_ico::before {
        background-image: url('/images/risk_puzzle.svg');
        width: 40px;
        height: 40px;
      }

      .dollar_ico::before {
        background-image: url('/images/nurse_risk2.svg');
        width: 50px;
        height: 50px;
      }

      .hg-risk-card .list_title {
        font-weight: 900;
        font-size: 20px;
        padding-bottom: 8px;
        margin: 0;
        color: #2b2b2b;
      }

      .hg-risk-card .list_text {
        font-size: 17px;
        line-height: 1.2;
        margin: 0 0 16px 0;
        color: #2b2b2b;
      }

      .hg-risk-card .list_text:last-child {
        margin-bottom: 0;
      }

      /* Variant styles */
      .hg-risk-card--compact {
        padding-bottom: 24px;
      }

      .hg-risk-card--highlighted .list_title {
        color: #FDB948;
      }

      /* Mobile responsive */
      @media screen and (max-width: 767px) {
        .hg-risk-card {
          font-size: 13px;
        }
        
        .hg-risk-card .list_title {
          font-size: 17px;
          padding-bottom: 25px;
        }
        
        .hg-risk-card .list_text {
          font-size: 13px;
          line-height: 1.4;
          margin-left: -54px;
        }
      }
    </style>
  `;
};

// Default risk card - WordPress standard styling with scheme icon
export const SchemeIcon = Template.bind({});
SchemeIcon.args = {
  icon: 'scheme',
  title: 'We know the banks inside out',
  content: [
    'Our brokers have over 35 years of combined experience in the finance industry, including decades of banking experience, and have processed thousands of home loan applications.',
    'We have a wide range of lenders on our panel and we intimately understand their credit policies. This means we know the problems you may face on your loan application and how to mitigate them when applying with any specific bank or lender.'
  ],
  variant: 'default',
};

// Umbrella icon risk card - risk reduction content
export const UmbrellaIcon = Template.bind({});
UmbrellaIcon.args = {
  icon: 'umbrella',
  title: 'Reducing risk of rejection',
  content: [
    'Unlike other brokers, Hunter Galloway completes our own internal credit assessment process before applying with any lender.',
    'Your application will be assigned its own Credit Manager who reviews each application thoroughly before it is submitted to the lenders, meaning we won\'t apply with a lender who won\'t approve your loan.'
  ],
  variant: 'default',
};

// Video conference icon - for support content
export const VideoConferenceIcon = Template.bind({});
VideoConferenceIcon.args = {
  icon: 'video-conference',
  title: 'Ongoing support',
  content: [
    'Our team is available to help you throughout your home loan journey.',
    'From application to settlement and beyond, we\'re here for you.'
  ],
  variant: 'default',
};

// Arrow icon - for refinance content
export const ArrowIcon = Template.bind({});
ArrowIcon.args = {
  icon: 'arrow',
  title: 'Access to lower interest rates',
  content: [
    'We can help you access competitive interest rates that may be lower than your current rate.',
    'Even a small reduction in your interest rate can save thousands over the life of your loan.'
  ],
  variant: 'default',
};

// Puzzle icon - for professional content
export const PuzzleIcon = Template.bind({});
PuzzleIcon.args = {
  icon: 'puzzle',
  title: 'Better loan features',
  content: [
    'Modern home loans come with features like offset accounts and redraw facilities.',
    'These features can help you pay off your loan faster and save on interest.'
  ],
  variant: 'default',
};

// Compact variant
export const Compact = Template.bind({});
Compact.args = {
  icon: 'scheme',
  title: 'Specialist knowledge',
  content: ['Simplified content for compact layouts.'],
  variant: 'compact',
};

// Highlighted variant
export const Highlighted = Template.bind({});
Highlighted.args = {
  icon: 'umbrella',
  title: 'Key benefit',
  content: ['This risk card is highlighted for emphasis.'],
  variant: 'highlighted',
};