import type { Preview } from '@storybook/html'

// Inject global styles approximating design tokens and base component classes
// so HTML stories render closer to Astro component styling.
const globalStyles = document.createElement('style');
globalStyles.innerHTML = `
  :root {
    --hg-yellow-primary: #FDB948;
    --hg-yellow-hover: #E5A43F;
    --hg-gray-50: #f8f9fa;
    --hg-gray-100: #f4f4f4;
    --hg-gray-200: #e5e7eb;
    --hg-gray-300: #d1d5db;
    --hg-gray-500: #6b7280;
    --hg-gray-600: #4b5563;
    --hg-gray-800: #1f2937;
    --hg-white: #ffffff;

    --font-size-xs: 12px;
    --font-size-sm: 14px;
    --font-size-md: 15px;
    --font-size-lg: 16px;
    --font-size-xl: 18px;
    --font-size-2xl: 20px;
    --font-size-3xl: 30px;
    --font-size-4xl: 36px;
    --font-size-45xl: 40px;
    --font-size-5xl: 48px;

    --space-xs: 8px;
    --space-sm: 16px;
    --space-md: 24px;
    --space-lg: 32px;
    --space-xl: 48px;

    --radius-sm: 4px;
    --radius-md: 12px;
    --radius-pill: 25px;

    --shadow-sm: 0 2px 8px rgba(0,0,0,.08);
    --shadow-md: 0 4px 20px rgba(0,0,0,.10);
    --shadow-lg: 0 8px 30px rgba(0,0,0,.15);
  }

  body, html { font-family: 'Open Sans', system-ui, sans-serif; }

  /* Container */
  .hg-container { max-width: 1229px; margin: 0 auto; padding-left: 16px; padding-right: 16px; }
  .hg-container--no-padding { padding-left: 0; padding-right: 0; }

  /* Button (kept for reference with existing stories) */
  .hg-button { display:inline-flex; align-items:center; justify-content:center; border:none; cursor:pointer; border-radius:33px; font-weight:600; transition:all .35s ease; }
  .hg-button--primary { background: var(--hg-yellow-primary); color:#2b2b2b; min-height:48px; padding:12px 24px; box-shadow: 0 6px 12px rgba(43,43,43,.15); }
  .hg-button--primary:hover { background: var(--hg-yellow-hover); transform: translateY(-2px); box-shadow: 0 8px 16px rgba(43,43,43,.2); }

  /* Badge */
  .hg-badge { display:inline-flex; align-items:center; justify-content:center; font-weight:600; line-height:1; }
  .hg-badge--sm { padding: 4px 8px; font-size: var(--font-size-xs); }
  .hg-badge--md { padding: 4px 12px; font-size: var(--font-size-sm); }
  .hg-badge--lg { padding: 8px 16px; font-size: var(--font-size-md); }
  .hg-badge--rounded { border-radius: var(--radius-sm); }
  .hg-badge--pill { border-radius: var(--radius-pill); }
  .hg-badge--square { border-radius: 0; }
  .hg-badge--primary { background: var(--hg-yellow-primary); color: #2b2b2b; }
  .hg-badge--secondary { background: var(--hg-gray-100); color: var(--hg-gray-600); }
  .hg-badge--success { background: #28a745; color: var(--hg-white); }
  .hg-badge--warning { background: #ffcc00; color: var(--hg-gray-800); }
  .hg-badge--error { background: #dc2626; color: var(--hg-white); }
  .hg-badge--info { background: #2563eb; color: var(--hg-white); }

  /* Input */
  .hg-input { display:block; font-weight:400; transition: all .15s ease; outline: none; font-family: inherit; }
  .hg-input--sm { padding: 12px; font-size: var(--font-size-sm); }
  .hg-input--md { padding: 16px; font-size: var(--font-size-md); }
  .hg-input--lg { padding: 24px; font-size: var(--font-size-lg); }
  .hg-input--default { background: var(--hg-white); border:1px solid var(--hg-gray-200); border-radius: var(--radius-md); }
  .hg-input--filled { background: var(--hg-gray-100); border:1px solid transparent; border-radius: var(--radius-md); }
  .hg-input--outlined { background: transparent; border:2px solid var(--hg-gray-200); border-radius: var(--radius-md); }
  .hg-input--default:focus { border-color: var(--hg-yellow-primary); box-shadow: 0 0 0 2px var(--hg-yellow-primary); }
  .hg-input--error { border-color: #dc2626; }
  .hg-input--success { border-color: #16a34a; }
  .hg-input--warning { border-color: #f59e0b; }
  .hg-input--disabled { opacity:.6; cursor: not-allowed; background: var(--hg-gray-100); }
  .hg-input--readonly { background: var(--hg-gray-100); }
  .hg-input--full-width { width: 100%; }

  /* Typography */
  .hg-typography { font-family: 'Open Sans', system-ui, sans-serif; margin:0; }
  .hg-typography--xs { font-size: var(--font-size-xs); }
  .hg-typography--sm { font-size: var(--font-size-sm); }
  .hg-typography--md { font-size: var(--font-size-md); }
  .hg-typography--lg { font-size: var(--font-size-lg); }
  .hg-typography--xl { font-size: var(--font-size-xl); }
  .hg-typography--2xl { font-size: var(--font-size-2xl); }
  .hg-typography--3xl { font-size: var(--font-size-3xl); }
  .hg-typography--4xl { font-size: var(--font-size-4xl); }
  .hg-typography--4_5xl { font-size: var(--font-size-45xl); }
  .hg-typography--5xl { font-size: var(--font-size-5xl); }
  .hg-typography--body { font-weight: 400; }
  .hg-typography--emphasis { font-weight: 500; }
  .hg-typography--strong { font-weight: 600; }
  .hg-typography--heading { font-weight: 700; }
  .hg-typography--display { font-weight: 800; }
  .hg-typography--primary { color: var(--hg-gray-800); }
  .hg-typography--secondary { color: var(--hg-gray-600); }
  .hg-typography--tertiary { color: var(--hg-gray-500); }
  .hg-typography--inverse { color: var(--hg-white); background: var(--hg-gray-800); padding: 4px 8px; }
  .hg-typography--left { text-align:left; }
  .hg-typography--center { text-align:center; }
  .hg-typography--right { text-align:right; }
  .hg-typography--justify { text-align:justify; }
  .hg-typography--nowrap { white-space: nowrap; }

  /* Icon */
  .hg-icon { display:inline-flex; align-items:center; justify-content:center; }
  .hg-icon--xs { width:12px; height:12px; }
  .hg-icon--sm { width:16px; height:16px; }
  .hg-icon--md { width:20px; height:20px; }
  .hg-icon--lg { width:24px; height:24px; }
  .hg-icon--xl { width:32px; height:32px; }
  .hg-icon--2xl { width:48px; height:48px; }
  .hg-icon--primary { color: var(--hg-yellow-primary); }
  .hg-icon--secondary { color: var(--hg-gray-600); }
  .hg-icon--success { color: #16a34a; }
  .hg-icon--warning { color: #f59e0b; }
  .hg-icon--error { color: #dc2626; }

  /* Molecules */
  .hg-statcard { padding: 24px; border-radius:12px; background: var(--hg-white); box-shadow: var(--shadow-sm); text-align:center; }
  .hg-statcard__value { font-size: 28px; font-weight: 700; color: var(--hg-gray-800); }
  .hg-statcard__label { margin-top: 4px; color: var(--hg-gray-600); }
  .hg-statcard__helper { margin-top: 8px; color: var(--hg-gray-500); font-size: 13px; }

  .hg-purpose-card { padding: 24px; border-radius: 12px; background: var(--hg-gray-100); text-align:center; }
  .hg-purpose-card__icon { width: 32px; height: 32px; margin-bottom: 8px; }
  .hg-purpose-card__title { margin: 0 0 8px; font-weight: 700; font-size: 18px; }
  .hg-purpose-card__body { margin: 0; color: var(--hg-gray-600); }

  .hg-review-card { padding: 20px; border-radius: 12px; background: var(--hg-white); box-shadow: var(--shadow-sm); }
  .hg-review-card__text { color: var(--hg-gray-800); }
  .hg-review-card__name { margin-top: 12px; color: var(--hg-gray-600); font-weight: 600; }

  /* PurposeCard (match Astro component structure) */
  .load-purpose__block.purpose-block.hg-purpose-card {
    position: relative;
    display: block;
    text-align: left;
    overflow: hidden;
    border: 1px solid var(--hg-gray-200);
    border-radius: 12px;
    padding: 44px 48px;
    max-width: 600px;
    min-width: 400px;
    transition: all .3s ease;
    background: var(--hg-gray-50);
  }
  .purpose-block--peach { background: #FFF5E2; }
  .purpose-block--default { background: var(--hg-gray-100); }
  .load-purpose__block.hg-purpose-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }
  .purpose-block__badge { position:absolute; top:0; right:0; padding: 8px 16px; background: rgba(253,185,72,.5); font-weight:600; border-bottom-left-radius: 12px; }
  .purpose-block__content { position: relative; z-index: 2; max-width: 370px; }
  .purpose-block__title { display:flex; align-items:center; gap: 8px; font-weight: 700; font-size: 20px; color: var(--hg-gray-800); margin-bottom: 8px; }
  .purpose-block__description { color: var(--hg-gray-600); margin: 8px 0 16px; line-height: 1.8; }
  .purpose-block__action .hg-button { box-shadow: 0 6px 12px rgba(43,43,43,.15); }
  .purpose-block__img { position:absolute; bottom:0; right:0; height:100%; opacity:0; z-index:1; transition: opacity .3s ease; }
  .purpose-block__img img { height:100%; width:auto; object-fit: contain; display:block; }
  .load-purpose__block.hg-purpose-card:hover .purpose-block__img { opacity:1; }
`;
document.head.appendChild(globalStyles);

const preview: Preview = {
  parameters: {
    controls: {
      matchers: {
       color: /(background|color)$/i,
       date: /Date$/i,
      },
    },

    a11y: {
      // 'todo' - show a11y violations in the test UI only
      // 'error' - fail CI on a11y violations
      // 'off' - skip a11y checks entirely
      test: 'todo'
    }
  },
};

export default preview;