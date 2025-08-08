# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Agent Operating References (read first)

- Standard Operating Procedure (SOP): `instructions.md`
- Project context and paths: `project_config.md`
- Active plan, rules, and logs: `workflow_state.md`
- Contribution workflow: `docs/CONTRIBUTING.md`
- Component strategy backlog: `REUSABLE_COMPONENTS_STRATEGY.md`

Quick rules for Claude Code
- Always follow the reuse flow in `instructions.md` (organism → molecule → atom; add variants before creating new components).
- Preview all visual work in `src/pages/design-system.astro` (canonical). Do not rely on Storybook for this project.
- Use tokens only; run local checks before PR:
  - `npm run build`
  - `npm run -s check:tokens`
- Use branches: `feat/...`, `fix/...`, `docs/...`; open PRs to `main` and complete the PR template checklist.

## Project Overview

This is a WordPress child theme for Hunter Galloway, a mortgage broker website. It's built on top of the Divi theme framework and includes custom calculators, forms, and landing pages.

## Architecture

### Theme Structure
- **Parent Theme**: Divi (WordPress theme framework)
- **Child Theme Engine**: Uses Divi Children Engine (`divi-children-engine/`) for customization capabilities
- **Template System**: PHP-based WordPress templates with page-specific templates for calculators and landing pages
- **Asset Organization**:
  - CSS: `/assets/css/` - Modular CSS organized by pages, blocks, calculators, and templates
  - JavaScript: `/assets/js/` - Modular JS with separate files for pages, forms, calculators, and blocks
  - Images: `/assets/img/` - Static assets including icons, backgrounds, and awards
  - Fonts: Custom Gotham Pro fonts in `/assets/fonts/`

### Key Components
- **Calculators**: Deposit calculator, stamp duty calculator, capacity calculator (in `/assets/js/calcs/`)
- **Forms**: Assessment forms with validation (`/assets/js/forms/`)
- **Page Templates**: Custom PHP templates for specific pages (mortgage calculators, landing pages, blog)
- **Block System**: Reusable blocks for awards, badges, ratings in `/blocks/` and `/template-parts/blocks/`

## Astro Component Development Progress

### ✅ COMPLETED Components

#### **HeroWidget** (`src/components/sections/HeroWidget.astro`)
- **Used by**: 7+ pages (doctors, nurses, suburb, posts, covid, refinance)
- **Variants**: Professional, nurse, general, calculator, refinance
- **Features**: Dynamic backgrounds, responsive design, WordPress-exact styling, proper Button atom integration
- **Status**: ✅ Complete and tested - ready for page assembly
- **Recent Updates**: 
  - ✅ Integrated with Button atom component (removed style conflicts)
  - ✅ Fixed button sizing to match WordPress design (`15px 20px` padding)
  - ✅ All variants tested and working in Storybook

#### **PurposeCard** (`src/components/molecules/PurposeCard/PurposeCard.astro`)
- **Used by**: Purpose selection sections, loan type cards
- **Variants**: `normal`, `highlighted`, `with-badge` (supports highlighted + badge combination)
- **Features**: Hover effects, background images, badge overlays, responsive design
- **Status**: ✅ Complete and refactored - redundancy eliminated
- **Recent Updates**: 
  - ✅ Refactored from 5+ redundant variants to 3 clear variants
  - ✅ Eliminated redundancy between 'investment property' and 'refinancing' cards
  - ✅ Added support for highlighted + badge combination

#### **StatCard** (`src/components/molecules/StatCard/StatCard.astro`)
- **Used by**: Statistics sections, achievement displays
- **Variants**: `default`, `compact`, `featured`
- **Features**: Number display, responsive sizing, hover effects
- **Status**: ✅ Complete and refactored - redundancy eliminated
- **Recent Updates**:
  - ✅ Refactored from 7+ redundant stories to 3 clear variants
  - ✅ Removed unused props (background, size, hoverable)
  - ✅ Created meaningful size/style variants for different use cases

#### **Image** (`src/components/atoms/Image/Image.astro`)
- **Used by**: All sections with images - HeroWidget backgrounds, PurposeCard images, Awards, Reviews
- **Features**: Responsive loading, object fit variants, border radius options, WordPress-style optimization
- **Variants**: Border radius (`none`, `sm`, `md`, `lg`, `full`), Object fit (`cover`, `contain`, `fill`, `none`, `scale-down`)
- **Status**: ✅ Complete with full feature set - ready for integration
- **Recent Updates**: 
  - ✅ Created comprehensive Image atom with WordPress-style features
  - ✅ Implemented lazy loading, placeholders, error states
  - ✅ Added responsive behavior and optimization hooks
  - ✅ 7 story variants covering all use cases (default, rounded, avatar, bordered, contain, placeholder, error)

#### **BenefitCard** (`src/components/molecules/BenefitCard/BenefitCard.astro`)
- **Used by**: WhyChooseWidget sections across 7+ pages for trust-building
- **Features**: Icon display, title/description content, hover effects, WordPress-exact styling
- **Variants**: `default` (WordPress light blue), `light`, `featured`
- **Status**: ✅ Complete - ready for WhyChooseWidget integration
- **Recent Updates**: 
  - ✅ Created with WordPress-exact styling and dimensions
  - ✅ Supports SVG icons with 96px container (WordPress exact)
  - ✅ 5 story variants covering different benefit types

#### **WhyChooseWidget** (`src/components/sections/WhyChooseWidget/WhyChooseWidget.astro`)
- **Used by**: 7+ pages (doctors, nurses, covid, posts, suburb, refinance) for trust-building sections
- **Features**: 3-column benefit layout, dynamic titles, CTA buttons, responsive design
- **Variants**: `default`, `light`, `dark` with different backgrounds
- **Status**: ✅ Complete - replaces WordPress why_choose_widget
- **Recent Updates**: 
  - ✅ WordPress-exact implementation with 3-column responsive layout
  - ✅ Dynamic content support for different page types (medical, nurse, refinance)
  - ✅ Integrated with BenefitCard and Button atoms
  - ✅ 5 story variants for different page contexts

#### **RiskCard** (`src/components/molecules/RiskCard/RiskCard.astro`)
- **Used by**: RiskWidget sections across 7+ pages for risk mitigation and trust-building
- **Variants**: `default`, `compact`, `highlighted` (design-based, not content-based)
- **Features**: Icon display, title/description content, WordPress-exact styling and spacing
- **Status**: ✅ Complete - ready for RiskWidget integration
- **Recent Updates**: 
  - ✅ Created with WordPress-exact styling (54px left padding, 40px icons, 20px titles)
  - ✅ Design-based variants for different visual treatments
  - ✅ Responsive behavior matching WordPress mobile patterns
  - ✅ 3 story variants covering different design approaches

#### **RiskWidget** (`src/components/sections/RiskWidget/RiskWidget.astro`)
- **Used by**: 7+ pages (doctors, nurses, suburb, posts, covid, refinance) for risk mitigation content
- **Features**: Horizontal layout with image, risk list items, market statistics, tooltips
- **Variants**: `default`, `light`, `reversed` with different backgrounds and layouts
- **Status**: ✅ Complete - replaces WordPress risk_widget
- **Recent Updates**: 
  - ✅ WordPress-exact implementation with gray background (#eeeeee) and rounded corners
  - ✅ Horizontal layout (45% content, 55% image) with responsive behavior
  - ✅ Integrated market statistics with tooltip support
  - ✅ 3 design variants: standard, light background, and reversed layout
  - ✅ Uses RiskCard molecules for consistent risk item display

### 🔄 REFACTORED Components
- **Button Atom**: Enhanced primary variant with WordPress-exact sizing
- **Component Stories**: Cleaned up redundant examples across PurposeCard and StatCard

## Development Commands

### File Locations
Since this is a WordPress theme without build tools, development is done directly on PHP, CSS, and JS files:
- Edit PHP templates directly in the root and template directories
- Edit styles in `/assets/css/` files
- Edit JavaScript in `/assets/js/` files
- Assets are enqueued via `enqueue-scripts.php` and `enqueue-styles.php`

### WordPress Development
- This appears to be deployed on WP Engine (based on style.css references)
- Uses ACF (Advanced Custom Fields) for options pages and custom fields
- Contact Form 7 integration for forms

## Key Files
- `functions.php`: Main theme functions, loads Divi parent theme and child engine
- `enqueue-scripts.php`: Manages JavaScript file loading with versioning
- `enqueue-styles.php`: Manages CSS file loading with versioning
- `style.css`: Theme declaration and base styles

## External Dependencies
- **jQuery UI**: For UI components
- **Swiper**: For sliders (`swiper.min.css`, `swiper.min.js`)
- **noUiSlider**: For range sliders in calculators
- **AutoNumeric**: For number formatting in calculators
- **Tippy.js/Popper.js**: For tooltips in awards section