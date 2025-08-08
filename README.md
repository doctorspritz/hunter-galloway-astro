# Hunter Galloway - WordPress to Astro Migration

## 🎯 Project Goal

This project is **migrating the Hunter Galloway WordPress mortgage broker website to Astro** while maintaining **pixel-perfect visual parity** and implementing **enterprise-grade atomic design principles**.

**⚠️ CRITICAL**: This is not a redesign or modernization - it's an exact WordPress replica built with modern tooling.

## 🏗️ Core Mission

### Primary Objectives
1. **Pixel-Perfect Migration**: Every section must visually match WordPress exactly
2. **Atomic Design Implementation**: Build scalable component library using atoms → molecules → organisms
3. **Design System First**: Establish comprehensive token system replacing all hardcoded CSS
4. **Performance Enhancement**: Leverage Astro's static generation while maintaining WordPress functionality

### Success Criteria
- [ ] Visual regression tests pass 100%
- [ ] Component library covers all WordPress UI patterns
- [ ] Zero hardcoded CSS values (tokens only)
- [ ] Page load performance improved vs WordPress
- [ ] Responsive behavior identical across all breakpoints

## 📋 Current Status

**Phase**: Component Library Development (Atomic Design Implementation)
**Progress**: Header ✅ | Footer ✅ | Atoms Library ✅ | Molecules 70% | Pages 10%

## 🔄 Development Workflow

This project follows the **mandatory** [WordPress to Astro Refactoring Workflow](./WORDPRESS_TO_ASTRO_WORKFLOW.md).

### Phase Overview
1. **Analysis & Setup** - WordPress audit, design system foundation
2. **Component Library** - Build atoms → molecules → organisms 
3. **Page Assembly** - Compose components into WordPress-exact pages
4. **Quality Assurance** - Visual regression, performance, accessibility

### Key Principles
- **Bottom-Up Development**: Components before pages
- **Token-Only Styling**: No hardcoded CSS values permitted
- **WordPress-First**: All decisions reference WordPress implementation
- **Quality Gates**: Cannot proceed without passing visual QA

## 🧩 Atomic Design Architecture

```
src/components/
├── atoms/           # Smallest reusable elements
│   ├── Button/      # WordPress btn_yellow styling
│   ├── Logo/        # Brand logo variants
│   ├── Icon/        # SVG icon system
│   └── Container/   # Layout wrapper
├── molecules/       # Functional component combinations  
│   ├── PhoneLink/   # Header phone number
│   ├── SocialLinks/ # Social media icons
│   └── FooterNavigation/ # Navigation lists
└── organisms/       # Complex section components
    ├── Header/      # Full navigation + branding
    ├── Footer/      # Multi-column footer
    └── HeroWidget/  # Flexible hero component
```

### Component Development Rules
1. **Atoms First**: Build smallest reusable pieces
2. **Compose Up**: Molecules use atoms, organisms use molecules
3. **Token Styling**: All CSS via semantic design tokens
4. **WordPress Exact**: Visual parity is non-negotiable

## 🎨 Design System

### Token Architecture (3-Tier System)
```typescript
// 1. Primitive Tokens (Raw values extracted from WordPress)
primitive.color.yellow500 = '#FDB948'

// 2. Semantic Tokens (Role-based meanings)
semantic.color.brand.primary = primitive.color.yellow500

// 3. Component Tokens (Context-specific applications)
component.button.background.primary = semantic.color.brand.primary
```

### WordPress Analysis Process
**Why WordPress PHP/CSS Review is Critical:**

1. **Exact Value Extraction**: WordPress CSS contains precise measurements, colors, animations that must be preserved
2. **Interaction Behavior**: PHP logic reveals form handling, navigation states, responsive breakpoints
3. **Content Structure**: WordPress templates show content hierarchy and dynamic sections
4. **Theme Dependencies**: Divi parent theme provides base styling and functionality
5. **Custom Functionality**: Child theme modifications reveal business-specific features

### Required WordPress Files Analysis
- `style.css` - Complete theme CSS with exact measurements
- `functions.php` - Theme functionality and WordPress hooks
- `enqueue-scripts.php` - Asset loading and dependencies  
- `enqueue-styles.php` - CSS loading order and versioning
- `/assets/css/*` - Modular CSS for pages, calculators, forms
- `/assets/js/*` - Interactive functionality and form validation
- Template files (`*.php`) - Content structure and dynamic elements

## 🛠️ Technical Implementation

### Astro + TypeScript Stack
- **Framework**: Astro 4.x (Static Site Generator)
- **Styling**: CSS with design tokens via `define:vars`
- **Type Safety**: TypeScript for all components
- **Assets**: Public directory matching WordPress structure

### Design Token Implementation
```astro
---
import { semantic } from '../tokens/semantic';
---

<style define:vars={{
  brandPrimary: semantic.color.brand.primary,
  fontSizeMd: semantic.typography.size.md,
  spaceLg: semantic.space.lg,
}}>
.component {
  background: var(--brandPrimary);
  font-size: var(--fontSizeMd);
  padding: var(--spaceLg);
}
</style>
```

### Component Structure Template
```astro
---
/**
 * ComponentName - Hunter Galloway Design System
 * Atomic Level: [Atom|Molecule|Organism]
 * WordPress Reference: [CSS class or section]
 */
import { semantic } from '../../../tokens/semantic';

export interface Props {
  // TypeScript interface required
}

const { ...props } = Astro.props;
---

<div class="hg-component">
  <!-- WordPress-exact HTML structure -->
</div>

<style define:vars={{
  // Only semantic tokens allowed
}}>
/* CSS using var() tokens only */
</style>
```

## 🧞 Development Commands

All commands are run from the root of the project:

| Command                   | Action                                           |
| :------------------------ | :----------------------------------------------- |
| `npm install`             | Installs dependencies                            |
| `npm run dev`             | Starts local dev server at `localhost:4321`      |
| `npm run build`           | Build your production site to `./dist/`          |
| `npm run preview`         | Preview your build locally, before deploying     |
| `npm run lint`            | Check code quality and standards                 |

## 📏 Quality Standards

### Visual QA Requirements
- [ ] Pixel-perfect match at 320px, 768px, 1024px, 1272px+
- [ ] Hover states identical to WordPress
- [ ] Animation timing matches WordPress exactly
- [ ] Typography (size, weight, line-height) exact
- [ ] Color values match WordPress (including transparency)

### Code Quality Requirements  
- [ ] All components use TypeScript interfaces
- [ ] Zero hardcoded CSS values (design tokens only)
- [ ] Atomic design structure maintained
- [ ] Component composition over inline HTML
- [ ] Performance metrics acceptable

### Testing Approach
- **Visual Regression**: Side-by-side WordPress comparison
- **Responsive Testing**: All breakpoints across devices
- **Cross-Browser**: Chrome, Firefox, Safari compatibility
- **Performance**: Lighthouse scores vs WordPress baseline
- **Accessibility**: WCAG compliance maintained

## 🚀 Getting Started

### Prerequisites
- Node.js 18+
- Access to WordPress source files
- Visual comparison tools (browser dev tools)

### Component Development Process
1. **Analyze WordPress**: Extract CSS, take screenshots
2. **Check Dependencies**: Identify required atoms/molecules
3. **Build Component**: Use tokens only, match WordPress exactly
4. **Visual QA**: Compare with WordPress at all breakpoints
5. **Document**: Update design system docs

## 📚 Key Documentation

- [WordPress to Astro Workflow](./WORDPRESS_TO_ASTRO_WORKFLOW.md) - **MANDATORY** development process
- [Atomic Design Principles](./docs/ATOMIC_DESIGN.md) - Component architecture guide
- [WordPress Analysis Guide](./docs/WORDPRESS_ANALYSIS.md) - PHP/CSS review process
- [Design System Documentation](./docs/DESIGN_SYSTEM.md) - Token system and usage
- [Development Guidelines](./docs/DEVELOPMENT_GUIDELINES.md) - Code standards and practices
- [Project Structure](./docs/PROJECT_STRUCTURE.md) - File organization and conventions

## 🗂️ WordPress Reference Files

**CRITICAL**: The [`wordpress-source/`](./wordpress-source/) directory contains the complete WordPress theme files that serve as the **authoritative reference** for migration:

- **`style.css`** (174KB) - Main WordPress CSS with exact measurements
- **`functions.php`** - Theme functionality and WordPress hooks
- **`header.php`** & **`footer.php`** - Template structure
- **`assets/css/`** - Modular component CSS (pages, blocks, calculators)
- **`assets/js/`** - Interactive functionality and form validation
- **Page templates** - Complete WordPress page implementations

These files are **essential** for the workflow - no component should be built without first analyzing the relevant WordPress source files.

## 🤝 Contributing

### For AI Agents
1. **Read Workflow First**: [WORDPRESS_TO_ASTRO_WORKFLOW.md](./WORDPRESS_TO_ASTRO_WORKFLOW.md) is mandatory reading
2. **Follow Atomic Design**: Components must be atoms → molecules → organisms
3. **WordPress Analysis**: Always review WordPress source before building
4. **Quality Gates**: Visual QA is non-negotiable
5. **Token Usage**: Never use hardcoded CSS values

### Code Standards
- TypeScript interfaces required for all components
- Design tokens only (no hardcoded values)
- WordPress visual parity mandatory
- Atomic design structure enforced
- Performance impact considered

## 📞 Project Context

**Client**: Hunter Galloway (Mortgage Broker, Brisbane)
**WordPress Theme**: Divi Child Theme with custom calculators
**Timeline**: Component-driven development (quality over speed)
**Stakeholders**: Development team, client approval for visual matching

## 🎯 Success Definition

This project succeeds when:
1. **Visual Indistinguishable**: Users cannot tell difference from WordPress
2. **Performance Improved**: Faster loading than WordPress baseline  
3. **Maintainable**: Component system enables rapid future development
4. **Scalable**: Design system supports business growth
5. **Quality**: Zero regression bugs, accessible, cross-browser compatible

---

**Last Updated**: January 2025  
**Next Milestone**: Complete molecules library, begin organisms phase
