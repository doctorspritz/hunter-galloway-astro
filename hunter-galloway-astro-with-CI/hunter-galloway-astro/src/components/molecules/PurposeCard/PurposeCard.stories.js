export default {
  title: 'Molecules/PurposeCard',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    title: { control: 'text' },
    description: { control: 'text' },
    icon: {
      control: { type: 'select' },
      options: ['home-icon', 'invest-icon', 'refinance-icon', 'upgrade-icon'],
    },
    image: { control: 'text' },
    href: { control: 'text' },
    badge: { control: 'text' },
    variant: {
      control: { type: 'select' },
      options: ['normal', 'highlighted', 'with-badge'],
    },
    size: {
      control: { type: 'select' },
      options: ['sm', 'md', 'lg'],
    },
  },
};

const Template = (args) => {
  const {
    title = 'First Home Buyers',
    description = 'Get expert guidance and access to first home buyer grants and schemes.',
    icon = 'home-icon',
    image = '/images/first-home.webp',
    href = '#',
    badge = '',
    variant = 'normal',
    size = 'md',
  } = args;

  return `
    <a href="${href}" class="hg-purpose-card load-purpose__block purpose-block purpose-block--${variant === 'highlighted' ? 'highlighted' : 'normal'}" ${((variant === 'with-badge' || variant === 'highlighted') && badge) ? 'data-purpose="first"' : ''}>
      ${((variant === 'with-badge' || variant === 'highlighted') && badge) ? `
        <div class="purpose-block__badge">${badge}</div>
      ` : ''}
      
      <div class="purpose-block__content">
        <div class="purpose-block__title">
          <span class="hg-icon hg-icon--md hg-icon--inherit hg-icon--inline">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
            </svg>
          </span>
          ${title}
        </div>
        <div class="purpose-block__description">${description}</div>
        <div class="purpose-block__action">
          <button class="hg-button hg-button--primary hg-button--md">Learn More</button>
        </div>
      </div>
      
      <div class="purpose-block__img">
        <img src="${image}" alt="${title} background" width="100%" height="100%" loading="lazy">
      </div>
    </a>
    <style>
      :root {
        --borderPrimary: #e5e7eb;
        --brandPrimary: #FDB948;
        --brandPrimaryHover: #E5A43F;
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --surfaceHighlight: #FFF5E2;
        --surfaceSecondary: #f8f9fa;
        --fontSize2xl: 1.5rem;
        --fontSizeXl: 1.25rem;
        --fontSizeMd: 1rem;
        --fontSizeSm: 0.875rem;
        --fontWeightBold: 700;
        --fontWeightEmphasis: 500;
        --radiusLg: 24px;
        --radiusPill: 33px;
        --durationNormal: 300ms;
        --shadowProminent: 0 8px 30px rgba(0, 0, 0, 0.15);
        --space3xl: 2.75rem;
        --spaceXl: 3rem;
        --spaceLg: 2rem;
        --spaceMd: 1.5rem;
        --spaceSm: 1rem;
        --colorInteractivePrimary: #FDB948;
        --colorInteractivePrimaryHover: #E5A43F;
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

      .hg-icon--md {
        width: 20px;
        height: 20px;
      }

      .hg-icon--inherit {
        color: inherit;
      }

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
        border-radius: var(--radiusPill);
        transition: all var(--durationNormal) ease;
      }

      .hg-button--primary {
        background: var(--colorInteractivePrimary);
        color: var(--textPrimary);
        box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
        border-radius: 33px;
        font-weight: 600;
        font-size: 15px;
        min-height: 48px;
        line-height: 1;
        transition: all 0.35s ease;
      }

      .hg-button--primary:hover {
        background: var(--colorInteractivePrimaryHover);
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0px 8px 16px rgba(43, 43, 43, 0.2);
      }

      .hg-button--md {
        padding: var(--spaceSm) var(--spaceMd);
        font-size: 1rem;
      }

      .hg-purpose-card {
        position: relative;
        flex: 1;
        display: block;
        padding: var(--space3xl) var(--spaceXl);
        border-radius: var(--radiusLg);
        max-width: 600px;
        min-width: 400px;
        border: 1px solid var(--borderPrimary);
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        transition: all var(--durationNormal) ease;
      }

      .hg-purpose-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadowProminent);
        text-decoration: none;
        color: inherit;
      }

      .purpose-block__badge {
        position: absolute;
        top: 0;
        right: 0;
        padding: var(--spaceSm) var(--spaceMd);
        border-radius: 0px var(--radiusLg);
        background: rgba(253, 185, 72, 0.5);
        color: var(--textPrimary);
        text-align: center;
        font-size: var(--fontSizeSm);
        font-weight: var(--fontWeightEmphasis);
        z-index: 3;
      }

      .purpose-block__content {
        position: relative;
        max-width: 370px;
        z-index: 2;
      }

      .purpose-block__title {
        display: flex;
        align-items: center;
        gap: var(--spaceSm);
        color: var(--textPrimary);
        font-size: var(--fontSize2xl);
        font-weight: var(--fontWeightBold);
        margin-bottom: var(--spaceSm);
      }

      .purpose-block__description {
        margin-top: var(--spaceSm);
        color: var(--textSecondary);
        font-size: var(--fontSizeMd);
        line-height: 2;
        margin-bottom: var(--spaceMd);
      }

      .purpose-block__img {
        position: absolute;
        bottom: 0;
        right: 0;
        height: 100%;
        opacity: 0;
        z-index: 1;
        transition: opacity var(--durationNormal) ease;
      }

      .hg-purpose-card:hover .purpose-block__img {
        opacity: 1;
      }

      .purpose-block__img img {
        width: auto;
        height: 100%;
        object-fit: contain;
      }

      .purpose-block--highlighted {
        background: var(--surfaceHighlight);
      }

      .purpose-block--normal {
        background: var(--surfaceSecondary);
      }

      @media (max-width: 768px) {
        .hg-purpose-card {
          min-width: 100%;
          max-width: 100%;
          padding: var(--spaceXl) var(--spaceMd);
        }
        
        .purpose-block__content {
          max-width: 100%;
        }
        
        .purpose-block__title {
          font-size: var(--fontSizeXl);
        }
      }
    </style>
  `;
};

// Variant: with-badge (includes a badge like "Most Popular")
export const WithBadge = Template.bind({});
WithBadge.args = {
  title: 'First Home Buyers',
  description: 'Get expert guidance and access to first home buyer grants and schemes.',
  icon: 'home-icon',
  image: '/images/first-home.webp',
  variant: 'with-badge',
  badge: 'Most Popular',
};

// Variant: highlighted (peach background, no badge)
export const Highlighted = Template.bind({});
Highlighted.args = {
  title: 'Investment Property',
  description: 'Build your property portfolio with specialized investment loan advice.',
  icon: 'invest-icon',
  image: '/images/buy-luxury.webp',
  variant: 'highlighted',
};

// Variant: normal (default appearance)
export const Normal = Template.bind({});
Normal.args = {
  title: 'Refinancing',
  description: 'Switch to a better rate and save thousands on your existing home loan.',
  icon: 'refinance-icon',
  image: '/images/refinance.webp',
  variant: 'normal',
};

// Variant: highlighted with badge (combines highlighted background with badge)
export const HighlightedWithBadge = Template.bind({});
HighlightedWithBadge.args = {
  title: 'Upgrade Your Home',
  description: 'Ready to move up? We will help you navigate the upgrade process seamlessly.',
  icon: 'upgrade-icon',
  image: '/images/upgrade.webp',
  variant: 'highlighted',
  badge: 'Limited Time',
};