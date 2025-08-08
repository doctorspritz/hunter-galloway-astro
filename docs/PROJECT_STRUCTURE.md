# Project Structure & File Organization

## 🎯 Overview

The Hunter Galloway project follows a **strict atomic design architecture** with **WordPress-exact file organization**. This structure ensures **scalable development**, **maintainable code**, and **pixel-perfect WordPress migration**.

## 📂 Root Directory Structure

```
hunter-galloway-astro/
├── README.md                    # Project overview and goals
├── WORDPRESS_TO_ASTRO_WORKFLOW.md # Mandatory development workflow
├── docs/                        # Comprehensive project documentation
│   ├── ATOMIC_DESIGN.md         # Component architecture principles
│   ├── DESIGN_SYSTEM.md         # Token system and implementation
│   ├── DEVELOPMENT_GUIDELINES.md # Code standards and quality gates
│   ├── PROJECT_STRUCTURE.md     # This file
│   └── WORDPRESS_ANALYSIS.md    # WordPress analysis methodology
├── public/                      # Static assets (WordPress structure match)
├── src/                         # Source code (atomic design organization)
├── package.json                 # Dependencies and scripts
├── astro.config.mjs            # Astro configuration
├── tsconfig.json               # TypeScript configuration
└── tailwind.config.mjs         # Tailwind configuration (minimal usage)
```

## 🏗️ Source Code Architecture (`src/`)

### Atomic Design Component Organization
```
src/components/
├── atoms/                       # Smallest reusable elements
│   ├── Badge/
│   │   ├── Badge.astro         # Badge component implementation
│   │   └── Badge.types.ts      # TypeScript interfaces
│   ├── Button/
│   │   ├── Button.astro        # WordPress btn_yellow replica
│   │   └── Button.types.ts
│   ├── Container/
│   │   ├── Container.astro     # Layout wrapper with WordPress max-widths
│   │   └── Container.types.ts
│   ├── Icon/
│   │   ├── Icon.astro          # SVG icon system
│   │   └── Icon.types.ts
│   ├── Input/
│   │   ├── Input.astro         # Form field WordPress styling
│   │   └── Input.types.ts
│   ├── Logo/
│   │   └── Logo.astro          # Hunter Galloway brand logos
│   ├── Typography/
│   │   ├── Typography.astro    # Text elements with WordPress typography
│   │   └── Typography.types.ts
│   └── index.ts                # Atom exports
├── molecules/                   # Functional component combinations
│   ├── AwardItem/
│   │   ├── AwardItem.astro     # Individual award badge with tooltip
│   │   └── AwardItem.types.ts
│   ├── FooterNavigation/
│   │   └── FooterNavigation.astro # Navigation lists (horizontal/vertical)
│   ├── FooterStatCard/
│   │   ├── FooterStatCard.astro   # Pre-footer statistics cards
│   │   └── FooterStatCard.types.ts
│   ├── PhoneLink/
│   │   ├── PhoneLink.astro     # Header phone number component
│   │   └── PhoneLink.types.ts
│   ├── PurposeCard/
│   │   ├── PurposeCard.astro   # Loan purpose selection cards
│   │   └── PurposeCard.types.ts
│   ├── ReviewCard/
│   │   ├── ReviewCard.astro    # Customer review display
│   │   └── ReviewCard.types.ts
│   ├── SocialLinks/
│   │   └── SocialLinks.astro   # Social media icon groups
│   ├── StatCard/
│   │   ├── StatCard.astro      # Statistics display cards
│   │   └── StatCard.types.ts
│   ├── Tooltip/
│   │   ├── Tooltip.astro       # Interactive tooltip component
│   │   └── Tooltip.types.ts
│   └── index.ts                # Molecule exports
├── organisms/                   # Complex section components
│   └── [Future implementation] # Header, Footer, HeroWidget, etc.
├── sections/                    # Page sections (temporary organism location)
│   ├── Awards.astro            # Awards showcase section
│   ├── BankLogos.astro         # Lender logos section
│   ├── Footer.astro            # Complete footer organism
│   ├── HeroWidget/             # Flexible hero component
│   ├── LoanPurpose.astro       # Loan purpose selection
│   ├── PropertyMap.astro       # Interactive property map
│   ├── Reviews.astro           # Customer reviews section
│   └── Statistics.astro        # Statistics cards section
├── navigation/                  # Navigation components
│   └── Header.astro            # Complete header organism
├── calculators/                 # WordPress calculator replicas
│   ├── MortgageRentCalculator.css
│   └── MortgageRentCalculator.tsx
└── index.ts                     # Component library exports
```

### Design System (`src/tokens/`)
```
src/tokens/
├── primitive.ts                 # Raw WordPress values
├── semantic.ts                  # Role-based token meanings
├── component.ts                 # Context-specific customizations
├── colors.ts                    # Color palette organization
├── spacing.ts                   # Spacing scale from WordPress
├── typography.ts                # Typography system
├── effects.ts                   # Shadows, transitions, animations
└── index.ts                     # Token system exports
```

### Pages & Layouts (`src/pages/` & `src/layouts/`)
```
src/pages/
├── index.astro                  # Homepage using WordPress structure
└── design-system.astro         # Component documentation page

src/layouts/
└── Layout.astro                 # Base page layout matching WordPress
```

### Utilities & Types
```
src/utils/                       # Helper functions
src/types/                       # Shared TypeScript interfaces
src/styles/
└── global.css                   # Global styles and CSS reset
```

## 📦 Static Assets (`public/`)

### WordPress Asset Structure Match
```
public/
├── fonts/                       # Gotham Pro fonts from WordPress
│   ├── GothamPro.woff
│   ├── GothamPro.ttf
│   ├── GothamPro-Black.woff
│   └── GothamPro-Black.ttf
├── images/                      # WordPress image structure replica
│   ├── awards/                  # Award badge images
│   │   └── Mortgage-Broker-Brisbane-Hunter-Galloway-Award-2024.webp
│   ├── badges_icons/            # Feature badge SVGs
│   │   ├── access_30_banks.svg
│   │   ├── highest_rated.svg
│   │   ├── mortgage_broker_of_the_year.svg
│   │   └── top_approval_rates.svg
│   ├── logos/                   # Lender logo collection
│   │   ├── anz.svg
│   │   ├── westpac_logo.svg
│   │   ├── nab.svg
│   │   └── [30+ lender logos]
│   ├── social/                  # Social media icons
│   │   ├── facebook.svg
│   │   ├── instagram.svg
│   │   ├── linkedin.svg
│   │   └── youtube.svg
│   ├── logo-white.svg           # Brand logo variants
│   ├── logo-yellow.svg          # Footer logo
│   ├── X_icon.svg              # Twitter/X icon
│   ├── star.svg                # Review stars
│   ├── google.svg              # Google reviews logo
│   ├── yellow_phone.svg        # Contact icons
│   ├── yellow_mail.svg
│   ├── yellow_map.svg
│   └── [WordPress image assets] # Additional WordPress images
├── favicon.svg                  # Site favicon
└── design-system.html          # Component showcase
```

## 🎨 Component File Standards

### Atom Component Structure
```
src/components/atoms/Button/
├── Button.astro                 # Main component file
└── Button.types.ts             # TypeScript interfaces (if complex)

// Button.astro structure:
---
/**
 * Button Atom - WordPress btn_yellow replica
 * Exact WordPress button styling with variants
 */
import { semantic } from '../../../tokens/semantic';

export interface Props {
  variant?: 'primary' | 'secondary';
  size?: 'sm' | 'md' | 'lg';
  // ... other props
}
---

<button class="hg-button">
  <slot />
</button>

<style define:vars={{ /* design tokens only */ }}>
/* WordPress-exact styling */
</style>
```

### Molecule Component Structure
```
src/components/molecules/PhoneLink/
├── PhoneLink.astro
└── PhoneLink.types.ts

// Uses existing atoms, adds molecule-specific functionality
// WordPress header phone number styling and behavior
```

### Organism Component Structure
```
src/components/organisms/Header/
└── Header.astro

// Complex component using multiple molecules and atoms
// Complete WordPress header section with navigation, search, mobile menu
```

## 🔧 Configuration Files

### TypeScript Configuration (`tsconfig.json`)
```json
{
  "extends": "astro/tsconfigs/strict",
  "compilerOptions": {
    "baseUrl": ".",
    "paths": {
      "@/*": ["src/*"],
      "@/components/*": ["src/components/*"],
      "@/tokens/*": ["src/tokens/*"]
    }
  }
}
```

### Astro Configuration (`astro.config.mjs`)
```javascript
// Minimal configuration for WordPress migration focus
// Tailwind integration (limited usage for utility classes only)
// TypeScript support
// Component integration setup
```

### Package Structure (`package.json`)
```json
{
  "scripts": {
    "dev": "astro dev",
    "build": "astro build", 
    "preview": "astro preview",
    "typecheck": "astro check",
    "lint": "astro check"
  },
  "dependencies": {
    "astro": "^4.x",
    "@astrojs/tailwind": "^5.x",
    "typescript": "^5.x"
  }
}
```

## 📋 File Naming Conventions

### Component Naming
- **PascalCase**: `Button.astro`, `PhoneLink.astro`, `FooterNavigation.astro`
- **Descriptive**: Names reflect component purpose
- **WordPress Reference**: Component names hint at WordPress origin when relevant

### File Extensions
- **`.astro`**: Astro components (primary)
- **`.ts`**: TypeScript types and utilities
- **`.tsx`**: React components (calculators only)
- **`.css`**: Standalone CSS (minimal usage)

### Directory Naming
- **lowercase**: `atoms`, `molecules`, `organisms`
- **kebab-case**: `footer-navigation` (if needed)
- **Descriptive**: Clear purpose indication

## 🗂️ Import Patterns

### Relative Imports for Components
```typescript
// Atom importing tokens
import { semantic } from '../../../tokens/semantic';

// Molecule importing atoms
import Button from '../../atoms/Button/Button.astro';
import Icon from '../../atoms/Icon/Icon.astro';

// Organism importing molecules
import PhoneLink from '../../molecules/PhoneLink/PhoneLink.astro';
import SocialLinks from '../../molecules/SocialLinks/SocialLinks.astro';
```

### Index File Exports
```typescript
// src/components/atoms/index.ts
export { default as Button } from './Button/Button.astro';
export { default as Logo } from './Logo/Logo.astro';
export { default as Icon } from './Icon/Icon.astro';

// Usage in pages/organisms
import { Button, Logo, Icon } from '../atoms';
```

## 📊 Project Metrics & Organization

### Component Count Targets
- **Atoms**: 15-20 components (foundational elements)
- **Molecules**: 25-30 components (functional combinations)  
- **Organisms**: 10-15 components (complete sections)
- **Pages**: 5-10 pages (WordPress page replicas)

### File Organization Benefits
1. **Clear Separation**: Atomic design prevents component confusion
2. **Reusability**: Atoms used across multiple molecules/organisms
3. **Maintainability**: Changes to atoms propagate automatically
4. **WordPress Mapping**: Structure mirrors WordPress theme organization
5. **Scalability**: New pages built from existing components

### Development Workflow Alignment
- **Bottom-Up**: Build atoms → molecules → organisms → pages
- **WordPress First**: Structure follows WordPress theme patterns
- **Token Integration**: Design system tokens accessible throughout structure
- **Type Safety**: TypeScript interfaces for all component levels

## 🎯 Future Structure Evolution

### Phase 1 (Current): Component Library
- Complete atoms library
- Essential molecules for WordPress sections
- Temporary sections/ directory for organisms

### Phase 2: Organism Refactoring  
- Move sections/ components to organisms/
- Create proper organism structure
- Refactor page assemblies

### Phase 3: Template System
- Create reusable page templates
- WordPress page type mapping
- Dynamic content integration

### Phase 4: CMS Integration
- Storyblok component mapping
- Dynamic content structure
- WordPress content migration

---

**This project structure is designed for WordPress migration success. Every file location serves the goal of pixel-perfect WordPress replication using modern, maintainable architecture.**

**Last Updated**: January 2025