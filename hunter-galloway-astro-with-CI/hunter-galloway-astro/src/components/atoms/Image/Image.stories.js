export default {
  title: 'Atoms/Image',
  parameters: {
    layout: 'centered',
  },
  argTypes: {
    src: { control: 'text' },
    alt: { control: 'text' },
    width: { control: 'text' },
    height: { control: 'text' },
    loading: {
      control: { type: 'select' },
      options: ['lazy', 'eager'],
    },
    fit: {
      control: { type: 'select' },
      options: ['cover', 'contain', 'fill', 'none', 'scale-down'],
    },
    radius: {
      control: { type: 'select' },
      options: ['none', 'sm', 'md', 'lg', 'full'],
    },
    bordered: { control: 'boolean' },
    placeholder: { control: 'boolean' },
    optimize: { control: 'boolean' },
  },
};

const Template = (args) => {
  const {
    src = '/images/first-home.webp',
    alt = 'Sample image',
    width = '300px',
    height = '200px',
    loading = 'lazy',
    fit = 'cover',
    radius = 'none',
    bordered = false,
    placeholder = false,
    optimize = true,
  } = args;

  // WordPress-style image optimization (convert to webp if enabled)
  const optimizedSrc = optimize && src.includes('/images/') && src.match(/\.(jpg|jpeg|png)$/i) 
    ? src.replace(/\.(jpg|jpeg|png)$/i, '.webp') 
    : src;

  return `
    <div class="hg-image-wrapper">
      ${placeholder ? '<div class="hg-image-placeholder" aria-hidden="true"><div class="placeholder-shimmer"></div></div>' : ''}
      <img 
        class="hg-image hg-image--fit-${fit} hg-image--radius-${radius}${bordered ? ' hg-image--bordered' : ''}${placeholder ? ' hg-image--with-placeholder' : ''}"
        src="${optimizedSrc}"
        alt="${alt}"
        width="${width}"
        height="${height}"
        loading="${loading}"
        style="width: ${width}; height: ${height};"
      />
    </div>
    <style>
      :root {
        --borderPrimary: #e5e7eb;
        --borderSecondary: #d1d5db;
        --surfaceSecondary: #f8f9fa;
        --surfaceTertiary: #f1f3f4;
        --radiusSm: 8px;
        --radiusMd: 12px;
        --radiusLg: 24px;
        --durationNormal: 300ms;
      }

      .hg-image-wrapper {
        position: relative;
        display: inline-block;
        overflow: hidden;
      }

      .hg-image {
        display: block;
        max-width: 100%;
        height: auto;
        transition: all var(--durationNormal) ease;
      }

      /* Object fit variants */
      .hg-image--fit-cover {
        object-fit: cover;
      }

      .hg-image--fit-contain {
        object-fit: contain;
      }

      .hg-image--fit-fill {
        object-fit: fill;
      }

      .hg-image--fit-none {
        object-fit: none;
      }

      .hg-image--fit-scale-down {
        object-fit: scale-down;
      }

      /* Border radius variants */
      .hg-image--radius-none {
        border-radius: 0;
      }

      .hg-image--radius-sm {
        border-radius: var(--radiusSm);
      }

      .hg-image--radius-md {
        border-radius: var(--radiusMd);
      }

      .hg-image--radius-lg {
        border-radius: var(--radiusLg);
      }

      .hg-image--radius-full {
        border-radius: 50%;
      }

      /* Border variant */
      .hg-image--bordered {
        border: 1px solid var(--borderPrimary);
      }

      /* Placeholder/loading state */
      .hg-image-placeholder {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--surfaceSecondary);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .placeholder-shimmer {
        width: 100%;
        height: 100%;
        background: linear-gradient(
          90deg,
          var(--surfaceSecondary) 25%,
          var(--surfaceTertiary) 50%,
          var(--surfaceSecondary) 75%
        );
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
      }

      @keyframes shimmer {
        0% {
          background-position: -200% 0;
        }
        100% {
          background-position: 200% 0;
        }
      }

      /* WordPress-style responsive behavior */
      @media (max-width: 768px) {
        .hg-image {
          width: 100% !important;
          height: auto !important;
        }
      }

      /* Error state styling */
      .hg-image:not([src]),
      .hg-image[src=""] {
        background: var(--surfaceSecondary);
        border: 1px dashed var(--borderSecondary);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 120px;
      }

      .hg-image:not([src])::after,
      .hg-image[src=""]::after {
        content: "Image not found";
        color: var(--borderSecondary);
        font-size: 0.875rem;
      }
    </style>
  `;
};

// Basic image with default settings
export const Default = Template.bind({});
Default.args = {
  src: '/images/first-home.webp',
  alt: 'First home buyer image',
  width: '300px',
  height: '200px',
};

// Rounded image
export const Rounded = Template.bind({});
Rounded.args = {
  src: '/images/buy-luxury.webp',
  alt: 'Luxury property',
  width: '250px',
  height: '250px',
  radius: 'lg',
  fit: 'cover',
};

// Circular avatar-style image
export const Avatar = Template.bind({});
Avatar.args = {
  src: '/images/testimonial-avatar.webp',
  alt: 'Customer testimonial',
  width: '80px',
  height: '80px',
  radius: 'full',
  fit: 'cover',
  bordered: true,
};

// Image with border
export const Bordered = Template.bind({});
Bordered.args = {
  src: '/images/investment-property.webp',
  alt: 'Investment property',
  width: '300px',
  height: '200px',
  radius: 'md',
  bordered: true,
};

// Different object fit - contain
export const Contain = Template.bind({});
Contain.args = {
  src: '/images/logo-white.svg',
  alt: 'Hunter Galloway logo',
  width: '200px',
  height: '100px',
  fit: 'contain',
  radius: 'sm',
};

// With placeholder loading state
export const WithPlaceholder = Template.bind({});
WithPlaceholder.args = {
  src: '/images/refinance.webp',
  alt: 'Refinancing image',
  width: '300px',
  height: '200px',
  placeholder: true,
  loading: 'lazy',
};

// Error state (broken image)
export const ErrorState = Template.bind({});
ErrorState.args = {
  src: '/images/non-existent.webp',
  alt: 'Broken image example',
  width: '300px',
  height: '200px',
  radius: 'md',
};