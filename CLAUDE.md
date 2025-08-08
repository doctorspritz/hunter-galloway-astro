# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

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