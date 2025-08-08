export default {
  title: 'Molecules/ReviewCard',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    name: { control: 'text' },
    image: { control: 'text' },
    text: { control: 'text' },
    rating: { control: { type: 'range', min: 1, max: 5 } },
    isExpanded: { control: 'boolean' },
    hasReadMore: { control: 'boolean' },
  },
};

const Template = (args) => {
  const {
    name = 'Sarah Johnson',
    image = '/images/pages/comments/jess.webp',
    text = 'Hunter Galloway made our home buying process so smooth and stress-free. Their expertise and personal attention were outstanding.',
    rating = 5,
    isExpanded = false,
    hasReadMore = false,
  } = args;

  const needsReadMore = text.length > 180;
  const shouldShowReadMore = hasReadMore && needsReadMore;

  const textClasses = [
    'hg-review-card__text',
    needsReadMore && !isExpanded ? 'hg-review-card__text--truncated' : '',
  ].filter(Boolean).join(' ');

  const readMoreClasses = [
    'hg-review-card__read-more',
    !needsReadMore ? 'hg-review-card__read-more--hidden' : '',
  ].filter(Boolean).join(' ');

  return `
    <div class="hg-review-card swiper-slide">
      <div class="hg-review-card__image">
        <img src="${image}" alt="${name}" loading="lazy" />
      </div>
      
      <p class="hg-review-card__name">${name}</p>
      
      <div class="hg-review-card__content">
        <p class="${textClasses}">
          ${text}
        </p>
        
        ${shouldShowReadMore ? `
          <a class="${readMoreClasses}">
            <span class="hg-review-card__read-more-text">... <span>Read more</span></span>
            <span class="hg-review-card__read-less-text">Show less</span>
          </a>
        ` : ''}
      </div>
      
      <div class="hg-review-card__rating">
        ${Array.from({ length: rating }, (_, i) => `
          <img src="/images/star.svg" alt="star" width="16" height="16" />
        `).join('')}
      </div>
    </div>
    <style>
      :root {
        --surfacePrimary: #ffffff;
        --borderPrimary: #e5e7eb;
        --textPrimary: #1f2937;
        --textSecondary: #6b7280;
        --brandPrimary: #FDB948;
        --brandPrimaryHover: #E5A43F;
        --fontSizeSm: 0.875rem;
        --fontSizeLg: 1.125rem;
        --fontSizeMd: 1rem;
        --fontWeightStrong: 600;
        --fontWeightEmphasis: 500;
        --lineHeightBody: 1.5;
        --lineHeightTight: 1.25;
        --spaceSm: 1rem;
        --spaceMd: 1.5rem;
        --spaceLg: 2rem;
        --radiusMd: 12px;
        --shadowCard: 0 4px 20px rgba(0, 0, 0, 0.1);
        --durationNormal: 300ms;
      }

      .hg-review-card {
        background: var(--surfacePrimary);
        border-radius: var(--radiusMd);
        padding: var(--spaceLg) var(--spaceMd);
        text-align: center;
        min-height: 350px;
        display: flex;
        flex-direction: column;
        position: relative;
        border: 1px solid var(--borderPrimary);
        transition: transform var(--durationNormal) ease;
        max-width: 300px;
      }

      .hg-review-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadowCard);
      }

      .hg-review-card__image {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto var(--spaceSm);
      }

      .hg-review-card__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .hg-review-card__name {
        font-size: var(--fontSizeLg);
        font-weight: var(--fontWeightStrong);
        color: var(--textPrimary);
        margin: 0 0 var(--spaceSm) 0;
        line-height: var(--lineHeightTight);
      }

      .hg-review-card__content {
        flex: 1;
        margin-bottom: var(--spaceSm);
      }

      .hg-review-card__text {
        font-size: var(--fontSizeSm);
        line-height: var(--lineHeightBody);
        color: var(--textSecondary);
        margin: 0 0 calc(var(--spaceSm) * 0.75) 0;
        text-align: left;
      }

      .hg-review-card__text--truncated {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .hg-review-card__read-more {
        font-size: var(--fontSizeSm);
        color: var(--brandPrimary);
        text-decoration: none;
        cursor: pointer;
        font-weight: var(--fontWeightEmphasis);
        display: inline-block;
        margin-top: calc(var(--spaceSm) * 0.5);
      }

      .hg-review-card__read-more:hover {
        color: var(--brandPrimaryHover);
        text-decoration: underline;
      }

      .hg-review-card__read-less-text {
        display: none;
      }

      .hg-review-card__read-more.expanded .hg-review-card__read-more-text {
        display: none;
      }

      .hg-review-card__read-more.expanded .hg-review-card__read-less-text {
        display: inline;
      }

      .hg-review-card__read-more--hidden {
        display: none !important;
      }

      .hg-review-card__rating {
        display: flex;
        justify-content: center;
        gap: calc(var(--spaceSm) * 0.25);
        margin-top: auto;
      }

      .hg-review-card__rating img {
        width: 16px;
        height: 16px;
      }

      @media (max-width: 768px) {
        .hg-review-card {
          padding: var(--spaceMd) var(--spaceSm);
          min-height: 300px;
        }
        
        .hg-review-card__name {
          font-size: var(--fontSizeMd);
        }
      }
    </style>
  `;
};

export const Default = Template.bind({});
Default.args = {
  name: 'Sarah Johnson',
  image: '/images/pages/comments/jess.webp',
  text: 'Hunter Galloway made our home buying process so smooth and stress-free. Their expertise and personal attention were outstanding.',
  rating: 5,
};

export const LongReview = Template.bind({});
LongReview.args = {
  name: 'Michael Chen',
  image: '/images/pages/comments/joanna.webp',
  text: 'I cannot recommend Hunter Galloway enough! As a first-time home buyer, I was completely overwhelmed by the mortgage process. The team walked me through every step, explaining everything in detail and making sure I understood all my options. They secured me a fantastic rate and saved me thousands of dollars. The service was professional, friendly, and incredibly thorough. I felt supported throughout the entire journey.',
  rating: 5,
  hasReadMore: true,
};

export const ShortReview = Template.bind({});
ShortReview.args = {
  name: 'Emma Wilson',
  image: '/images/pages/comments/julie.webp',
  text: 'Excellent service and great rates!',
  rating: 5,
};

export const FourStars = Template.bind({});
FourStars.args = {
  name: 'David Thompson',
  image: '/images/pages/comments/marie.webp',
  text: 'Very good experience with Hunter Galloway. The process was smooth and the team was helpful throughout.',
  rating: 4,
};

export const InvestorReview = Template.bind({});
InvestorReview.args = {
  name: 'Lisa Martinez',
  image: '/images/pages/comments/rachel.webp',
  text: 'As an investor, I needed specialized advice for my property portfolio. Hunter Galloway delivered exactly what I needed with expert guidance.',
  rating: 5,
};

export const RefinanceReview = Template.bind({});
RefinanceReview.args = {
  name: 'James Anderson',
  image: '/images/pages/comments/ragni.webp',
  text: 'Refinanced my home loan through Hunter Galloway and saved over $300 per month. The team made the switch seamless and stress-free.',
  rating: 5,
};