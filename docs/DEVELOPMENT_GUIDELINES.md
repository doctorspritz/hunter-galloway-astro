# Development Guidelines & Quality Gates

## 🎯 Purpose

This document establishes **mandatory development standards** and **quality gates** for the Hunter Galloway WordPress to Astro migration. These guidelines ensure **pixel-perfect WordPress parity** and **maintainable code architecture**.

## 🚨 Non-Negotiable Rules

### 1. WordPress Analysis First
**Rule**: Never build a component without analyzing WordPress source  
**Process**: Extract CSS, document measurements, take screenshots  
**Verification**: Side-by-side visual comparison required

### 2. Atomic Design Mandatory
**Rule**: All components must fit atomic hierarchy (Atoms → Molecules → Organisms)  
**Verification**: Component lives in correct `/atoms/`, `/molecules/`, or `/organisms/` directory  
**Exception**: None - this is absolute

### 3. Design Tokens Only
**Rule**: Zero hardcoded CSS values permitted  
**Process**: Use `define:vars` with semantic tokens  
**Verification**: Code review checks for hardcoded values

### 4. TypeScript Interfaces Required
**Rule**: All components must have TypeScript Props interface  
**Purpose**: Type safety and self-documentation  
**Verification**: Build must pass TypeScript checks

### 5. Visual QA Gate
**Rule**: Cannot merge without WordPress visual match  
**Process**: Screenshots at all breakpoints  
**Verification**: Pixel-perfect comparison required

## 🏗️ Component Development Process

### Phase 1: WordPress Analysis
```bash
# Required before starting any component
1. Extract WordPress CSS for the component
2. Take screenshots at all breakpoints (320px, 768px, 1024px, 1272px+)
3. Document exact measurements, colors, animations
4. Identify required atoms/molecules for composition
5. Note interactive behaviors and transitions
```

### Phase 2: Dependency Check
```bash
# Verify component hierarchy
- Do required atoms exist? → If no, build atoms first
- Do required molecules exist? → If no, build molecules first  
- Is this an organism? → Ensure it uses existing molecules/atoms
```

### Phase 3: Implementation
```typescript
// Component structure template
---
/**
 * ComponentName - Hunter Galloway Design System
 * Atomic Level: [Atom|Molecule|Organism]
 * WordPress Reference: [CSS class or section name]
 * 
 * @description Clear description of component purpose
 * @example <ComponentName variant="primary" size="md" />
 */

import { semantic } from '../../../tokens/semantic';

// Required: TypeScript interface
export interface Props {
  variant?: 'primary' | 'secondary';
  size?: 'sm' | 'md' | 'lg';
  className?: string;
  children?: any; // Astro.slots or content
}

const {
  variant = 'primary',
  size = 'md', 
  className = '',
  ...restProps
} = Astro.props;
---

<!-- Required: WordPress-exact HTML structure -->
<div class={`hg-component hg-component--${variant} hg-component--${size} ${className}`} {...restProps}>
  <slot />
</div>

<!-- Required: Design tokens via define:vars -->
<style define:vars={{
  // Only semantic tokens allowed
  brandPrimary: semantic.color.brand.primary,
  fontSizeMd: semantic.typography.size.md,
  spaceLg: semantic.space.lg,
}}>
/* CSS using var() tokens only - no hardcoded values */
.hg-component {
  background: var(--brandPrimary);
  font-size: var(--fontSizeMd);
  padding: var(--spaceLg);
}

/* WordPress-exact responsive behavior */
@media (max-width: 768px) {
  .hg-component {
    /* Mobile styling matching WordPress exactly */
  }
}
</style>
```

### Phase 4: Quality Assurance
```bash
# Required QA checklist before merge
□ Visual comparison with WordPress (desktop/tablet/mobile)
□ All hover states and interactions match
□ Animation timing identical to WordPress
□ Typography exact (size, weight, line-height, letter-spacing)
□ Colors match WordPress (including transparency values)
□ Spacing matches WordPress exactly
□ No hardcoded CSS values
□ TypeScript interface defined
□ Component follows atomic design level
□ Performance impact acceptable
□ No console errors or warnings
```

## 📏 Code Quality Standards

### CSS Standards
```css
/* ✅ REQUIRED: Use design tokens */
.component {
  background: var(--brandPrimary);
  padding: var(--spaceLg);
  font-size: var(--fontSizeMd);
}

/* ❌ FORBIDDEN: Hardcoded values */
.component {
  background: #FDB948;
  padding: 24px;
  font-size: 15px;
}

/* ✅ REQUIRED: WordPress-exact measurements */
.hg-button--primary {
  min-height: 48px;        /* WordPress exact */
  padding: 16px 32px;      /* WordPress exact */
  border-radius: 33px;     /* WordPress pill radius */
  font-size: 15px;         /* WordPress exact */
  font-weight: 600;        /* WordPress exact */
  transition: all 0.35s ease; /* WordPress timing */
}

/* ✅ REQUIRED: Responsive breakpoints matching WordPress */
@media (max-width: 992px) { /* WordPress mobile breakpoint */
  .hg-header {
    padding: 13px 0; /* WordPress mobile padding */
    min-height: 57px; /* WordPress mobile height */
  }
}
```

### TypeScript Standards
```typescript
// ✅ REQUIRED: Clear interface with descriptions
export interface Props {
  /** Button visual style variant */
  variant?: 'primary' | 'secondary' | 'outline';
  
  /** Button size preset */
  size?: 'sm' | 'md' | 'lg';
  
  /** Additional CSS classes */
  className?: string;
  
  /** Button text or content */
  children?: any;
  
  /** Click handler function */
  onClick?: (event: MouseEvent) => void;
}

// ❌ FORBIDDEN: Unclear or missing interfaces  
export interface Props {
  type?: string;
  data?: any;
}
```

### File Organization Standards
```bash
# ✅ REQUIRED: Atomic design structure
src/components/
├── atoms/
│   └── Button/
│       ├── Button.astro      # Component implementation
│       └── Button.types.ts   # TypeScript types (if complex)
├── molecules/
│   └── PhoneLink/
│       ├── PhoneLink.astro
│       └── PhoneLink.types.ts
└── organisms/
    └── Header/
        └── Header.astro

# ❌ FORBIDDEN: Flat structure or wrong categorization
src/components/
├── Button.astro        # Missing atomic structure
├── Header.astro        # Header should be organism
└── SocialIcon.astro    # Should be atom in atoms/ directory
```

## 🚧 Quality Gates

### Gate 1: Component Creation
**Requirements:**
- [ ] WordPress analysis documented
- [ ] Screenshots taken for visual reference
- [ ] Required dependencies identified
- [ ] Atomic design level determined

**Blockers:**
- Missing WordPress analysis
- Unclear atomic design level
- Required atoms/molecules don't exist

### Gate 2: Implementation Complete
**Requirements:**
- [ ] TypeScript interface defined
- [ ] Design tokens used exclusively
- [ ] WordPress HTML structure replicated
- [ ] Responsive behavior implemented
- [ ] Interactive states included

**Blockers:**
- Hardcoded CSS values found
- Missing TypeScript interface
- Non-atomic design structure

### Gate 3: Visual QA Pass
**Requirements:**
- [ ] Desktop (1272px+) matches WordPress exactly
- [ ] Tablet (768px-1024px) matches WordPress exactly
- [ ] Mobile (320px-767px) matches WordPress exactly
- [ ] Hover states identical to WordPress
- [ ] Animation timing matches WordPress

**Blockers:**
- Any visual differences from WordPress
- Missing responsive behavior
- Incorrect hover states

### Gate 4: Technical QA Pass
**Requirements:**
- [ ] Build passes without errors
- [ ] TypeScript compilation successful
- [ ] No console warnings
- [ ] Performance impact acceptable
- [ ] Cross-browser compatibility verified

**Blockers:**
- Build failures
- TypeScript errors
- Performance regressions

## 🛠️ Development Tools

### Required Commands
```bash
# Before every development session
npm run dev          # Start development server
npm run typecheck    # Verify TypeScript
npm run lint         # Check code quality
npm run build        # Test production build

# Visual comparison tools
# Use browser dev tools for side-by-side WordPress comparison
# Take screenshots at required breakpoints
# Measure exact pixel values
```

### WordPress Analysis Tools
```bash
# Extract WordPress values
grep -r "font-size:" /wp-content/themes/hunter-galloway/
grep -r "padding:" /wp-content/themes/hunter-galloway/ 
grep -r "background:" /wp-content/themes/hunter-galloway/
grep -r "@media" /wp-content/themes/hunter-galloway/

# Browser console helpers
// Extract computed styles
const element = document.querySelector('.btn_yellow');
const styles = window.getComputedStyle(element);
console.log({
  background: styles.backgroundColor,
  padding: styles.padding,
  fontSize: styles.fontSize,
  borderRadius: styles.borderRadius,
});
```

### Component Testing
```typescript
// Test component in isolation
// Verify all variants work correctly
// Check responsive behavior
// Validate TypeScript props
// Performance profiling
```

## 🚨 Anti-Patterns & Common Mistakes

### ❌ Critical Violations

#### Skipping WordPress Analysis
```astro
<!-- BAD: Guessing WordPress styles -->
<style>
.footer { 
  background: #333; /* Guessed color */
  padding: 20px;    /* Guessed spacing */
}
</style>

<!-- GOOD: WordPress-extracted styles -->
<style define:vars={{
  footerBackground: '#333',  /* WordPress exact: #333 */
  footerPadding: '20px 0',   /* WordPress exact: 20px 0 */
}}>
.footer {
  background: var(--footerBackground);
  padding: var(--footerPadding);
}
</style>
```

#### Breaking Atomic Design
```astro
<!-- BAD: Organism in atoms directory -->
/src/components/atoms/Header.astro

<!-- BAD: Inline molecule functionality -->
<Button>
  <Icon name="phone" />
  <span>1300 088 065</span>
</Button>

<!-- GOOD: Proper atomic structure -->
/src/components/organisms/Header.astro
/src/components/molecules/PhoneLink.astro
/src/components/atoms/Button.astro
```

#### Hardcoded Values
```css
/* BAD: Direct WordPress values */
.button {
  background: #FDB948;
  padding: 16px 32px;
  border-radius: 33px;
}

/* GOOD: Design tokens */
.button {
  background: var(--brandPrimary);
  padding: var(--buttonPadding);
  border-radius: var(--radiusPill);
}
```

#### Missing TypeScript
```astro
<!-- BAD: No interface -->
---
const { type, data } = Astro.props;
---

<!-- GOOD: Clear interface -->
---
export interface Props {
  variant: 'primary' | 'secondary';
  size: 'sm' | 'md' | 'lg';
}
const { variant, size } = Astro.props;
---
```

### ⚠️ Warning-Level Issues

#### Incomplete Responsive Behavior
- Missing mobile-specific styles
- Wrong breakpoint values
- Inconsistent responsive patterns

#### Performance Issues
- Excessive CSS output
- Heavy JavaScript for simple interactions
- Missing optimization opportunities

#### Accessibility Oversights
- Missing ARIA labels
- Poor keyboard navigation
- Insufficient color contrast

## 📊 Success Metrics

### Code Quality KPIs
- **100% Token Usage**: Zero hardcoded CSS values
- **100% TypeScript**: All components have interfaces
- **100% Atomic Design**: Components in correct hierarchy
- **Build Success Rate**: All builds pass without errors

### Visual Quality KPIs
- **Pixel-Perfect Match**: Visual regression tests pass
- **Responsive Consistency**: Identical behavior at all breakpoints
- **Interactive Parity**: Hover/focus states match WordPress exactly
- **Animation Accuracy**: Timing and easing identical to WordPress

### Development Velocity KPIs
- **Reduced Revision Cycles**: Fewer back-and-forth changes
- **Faster Component Creation**: Reuse existing atoms/molecules
- **Maintainability**: Changes propagate through token system
- **Team Efficiency**: Clear standards reduce decision time

## 🔄 Continuous Improvement

### Weekly Code Reviews
- Audit new components for standard compliance
- Identify patterns for atom/molecule extraction
- Review WordPress parity accuracy
- Performance impact assessment

### Monthly Process Review
- Evaluate development velocity
- Identify pain points in workflow
- Update guidelines based on lessons learned
- Token system expansion planning

### Quarterly WordPress Sync
- Review WordPress theme updates
- Update design tokens for changes
- Refresh visual reference screenshots
- Performance benchmark comparison

---

**These guidelines are mandatory, not suggestions. Every component must meet these standards before merge. Quality is non-negotiable in WordPress migration.**

**Last Updated**: January 2025