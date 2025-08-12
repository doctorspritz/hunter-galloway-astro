# Astro + Atomic Design System Refactoring Plan

## 🚀 Astro-Specific Considerations

This refactoring plan is tailored specifically for **Astro components** following **Atomic Design System** principles. Every decision respects Astro's architecture and the atomic hierarchy.

---

## 🔬 Atomic Design System Structure

```
ATOMS       → Basic building blocks (Button, Icon, Input)
MOLECULES   → Simple component groups (SearchBar, Card, FormField)  
ORGANISMS   → Complex component sections (Header, HeroWidget, Footer)
TEMPLATES   → Page layouts (DefaultLayout, BlogLayout)
PAGES       → Specific page instances
```

### Current State Analysis
```
src/components/
├── atoms/        ✅ 9 components (needs token cleanup)
├── molecules/    ⚠️  21 components (heavy refactoring needed)
├── organisms/    ⚠️  10 components (duplication issues)
├── sections/     ❌ VIOLATION - should be organisms or templates
└── templates/    ❌ MISSING - no templates defined
```

---

## 📋 Phase 1: Atomic Architecture Correction (Week 1)

### 1.1 Fix Atomic Hierarchy Violations

#### Remove `sections/` Directory
```bash
# These violate atomic design - sections ARE organisms
src/components/sections/RiskWidget/ → src/components/organisms/RiskWidget/
src/components/sections/WhyChooseWidget/ → DELETE (duplicate of organisms/WhyChoose/)
```

#### Create Proper Templates Layer
```astro
<!-- src/components/templates/PageTemplate.astro -->
---
import Header from '../organisms/Header.astro';
import Footer from '../organisms/Footer.astro';
import type { TemplateProps } from './Template.types';

export interface Props extends TemplateProps {}
const { variant = 'default' } = Astro.props;
---

<div class="template-wrapper" data-variant={variant}>
  <Header />
  <main class="template-content">
    <slot /> <!-- Organisms and molecules go here -->
  </main>
  <Footer />
</div>

<style>
  /* Templates handle layout ONLY - no visual styling */
  .template-wrapper {
    display: grid;
    grid-template-rows: auto 1fr auto;
    min-height: 100vh;
  }
  
  .template-content {
    width: 100%;
    max-width: var(--hg-container-max-width);
    margin: 0 auto;
  }
</style>
```

### 1.2 Establish Atomic Boundaries

#### Create Boundary Rules
```typescript
// scripts/check-atomic-imports.mjs
// Enforce atomic hierarchy in imports

const rules = {
  atoms: {
    canImport: [], // Atoms import nothing from our system
    cannotImport: ['molecules', 'organisms', 'templates']
  },
  molecules: {
    canImport: ['atoms'], // Molecules can only import atoms
    cannotImport: ['organisms', 'templates', 'molecules']
  },
  organisms: {
    canImport: ['atoms', 'molecules'], // Organisms can import atoms and molecules
    cannotImport: ['templates', 'organisms']
  },
  templates: {
    canImport: ['atoms', 'molecules', 'organisms'], // Templates can import all except pages
    cannotImport: ['templates']
  }
};
```

---

## 📋 Phase 2: Astro Component Optimization (Week 2-3)

### 2.1 Astro-Specific Patterns

#### Replace `define:vars` with Astro's Built-in CSS Variables
```astro
<!-- ❌ OLD: Inefficient define:vars pattern -->
---
import { semantic } from '../../../tokens/semantic';
---
<style define:vars={{
  primaryColor: semantic.color.primary,
  textSize: semantic.typography.size.md,
  // ... 20 more variables
}}>
  .button { 
    background: var(--primaryColor);
    font-size: var(--textSize);
  }
</style>

<!-- ✅ NEW: Use CSS custom properties directly -->
<style>
  @import '../../../styles/tokens.css'; /* Global tokens */
  
  .button {
    background: var(--hg-color-primary);
    font-size: var(--hg-text-md);
  }
</style>
```

#### Optimize Astro Component Props
```astro
<!-- ❌ OLD: Loose prop handling -->
---
const { 
  variant, 
  size, 
  ...rest 
} = Astro.props;
---

<!-- ✅ NEW: Strict TypeScript props -->
---
import type { ButtonProps } from './Button.types';

export interface Props extends ButtonProps {}

const {
  variant = 'primary',
  size = 'md',
  disabled = false,
  onClick,
  children,
  class: className,
  ...attrs
} = Astro.props as Props;

// Validate at build time
if (!['primary', 'secondary', 'ghost'].includes(variant)) {
  throw new Error(`Invalid button variant: ${variant}`);
}
---
```

### 2.2 Astro Slot Patterns for Atomic Components

#### Atoms: No Slots (Self-contained)
```astro
<!-- src/components/atoms/Icon/Icon.astro -->
---
export interface Props {
  name: string;
  size?: 'sm' | 'md' | 'lg';
}
---
<!-- No slot - atoms are leaf nodes -->
<svg class="icon" aria-hidden="true">
  <use href={`#icon-${name}`}></use>
</svg>
```

#### Molecules: Named Slots for Structure
```astro
<!-- src/components/molecules/Card/Card.astro -->
---
import Icon from '../../atoms/Icon/Icon.astro';
import Button from '../../atoms/Button/Button.astro';
---
<article class="card">
  <header class="card-header">
    <slot name="icon">
      <Icon name="default" />
    </slot>
    <slot name="title" />
  </header>
  <div class="card-body">
    <slot /> <!-- Default slot for content -->
  </div>
  <footer class="card-footer">
    <slot name="actions">
      <Button>Learn More</Button>
    </slot>
  </footer>
</article>
```

#### Organisms: Composition of Molecules
```astro
<!-- src/components/organisms/HeroSection/HeroSection.astro -->
---
import Card from '../../molecules/Card/Card.astro';
import StatCard from '../../molecules/StatCard/StatCard.astro';
import CTAGroup from '../../molecules/CTAGroup/CTAGroup.astro';
---
<section class="hero-section">
  <div class="hero-content">
    <slot name="headline" />
    <slot name="benefits" />
    <CTAGroup>
      <slot name="cta" />
    </CTAGroup>
  </div>
  <aside class="hero-stats">
    <slot name="stats">
      <!-- Default stats composition -->
      <StatCard number="97%" description="Approval Rate" />
      <StatCard number="2000+" description="Happy Clients" />
    </slot>
  </aside>
</section>
```

---

## 📋 Phase 3: Atomic Token System (Week 4-5)

### 3.1 Token Hierarchy Matching Atomic Design

```typescript
// src/tokens/atomic.ts - Tokens organized by atomic level

export const tokens = {
  // ATOMS - Primitive tokens only
  atoms: {
    color: {
      yellow400: '#FDB948',
      gray800: '#1f2937',
      white: '#ffffff'
    },
    space: {
      xs: '0.5rem',
      sm: '1rem',
      md: '1.5rem',
      lg: '2rem'
    },
    radius: {
      none: '0',
      sm: '4px',
      md: '8px',
      lg: '16px',
      full: '9999px'
    }
  },

  // MOLECULES - Semantic tokens
  molecules: {
    card: {
      bg: 'var(--atom-color-white)',
      padding: 'var(--atom-space-md)',
      radius: 'var(--atom-radius-md)',
      shadow: '0 2px 8px rgba(0,0,0,0.1)'
    },
    input: {
      height: '48px',
      padding: 'var(--atom-space-sm)',
      border: '1px solid var(--atom-color-gray200)'
    }
  },

  // ORGANISMS - Composite tokens
  organisms: {
    hero: {
      minHeight: '500px',
      padding: 'var(--molecule-section-padding)',
      gap: 'var(--atom-space-lg)'
    },
    header: {
      height: '80px',
      bgColor: 'var(--atom-color-white)',
      shadow: 'var(--molecule-shadow-sm)'
    }
  },

  // TEMPLATES - Layout tokens only
  templates: {
    container: {
      maxWidth: '1272px',
      padding: '0 16px'
    },
    grid: {
      columns: '12',
      gap: 'var(--atom-space-md)'
    }
  }
};
```

### 3.2 Astro CSS Variable Injection

```astro
<!-- src/layouts/AtomicLayout.astro -->
---
import '../styles/atomic-tokens.css';
---
<!DOCTYPE html>
<html lang="en">
<head>
  <style is:global>
    /* Inject atomic tokens at root */
    :root {
      /* Atom tier */
      --atom-color-yellow400: #FDB948;
      --atom-space-sm: 1rem;
      
      /* Molecule tier references atoms */
      --molecule-card-padding: var(--atom-space-md);
      
      /* Organism tier references molecules */
      --organism-hero-gap: var(--molecule-section-gap);
      
      /* Template tier - layout only */
      --template-max-width: 1272px;
    }
  </style>
</head>
<body>
  <slot />
</body>
</html>
```

---

## 📋 Phase 4: Astro Performance Optimizations (Week 6)

### 4.1 Astro Component Lazy Loading

```astro
<!-- Optimize heavy organisms with lazy loading -->
---
import { Image } from 'astro:assets';

// Only import heavy components when needed
const HeavyChart = await import('../molecules/Chart/Chart.astro')
  .then(m => m.default);
---

<div class="dashboard">
  <!-- Lazy load below the fold -->
  <div class="chart-wrapper" data-lazy>
    {Astro.request.url.searchParams.has('chart') && 
      <HeavyChart data={chartData} />
    }
  </div>
</div>
```

### 4.2 Astro Island Architecture for Interactive Components

```astro
<!-- Use Astro Islands for interactive molecules -->
---
import StaticHero from '../organisms/HeroSection.astro';
---

<StaticHero>
  <!-- Only this calculator is hydrated -->
  <Calculator client:visible />
</StaticHero>
```

### 4.3 Astro CSS Scoping Strategy

```astro
<!-- Atoms: Always scoped -->
<style>
  /* Scoped to component */
  .button { }
</style>

<!-- Molecules: Scoped with CSS parts -->
<style>
  .card { }
  .card::part(header) { } /* Expose parts for customization */
</style>

<!-- Organisms: Mix of scoped and global -->
<style>
  /* Scoped layout */
  .hero { }
</style>
<style is:global>
  /* Global utility classes */
  .hero-section .container { }
</style>

<!-- Templates: Global layout styles -->
<style is:global>
  .template-grid { }
</style>
```

---

## 📋 Phase 5: Atomic Testing Strategy (Week 7)

### 5.1 Test Each Atomic Level Differently

#### Atoms: Unit Tests
```typescript
// src/components/atoms/Button/Button.test.ts
import { experimental_AstroContainer as AstroContainer } from 'astro/container';
import Button from './Button.astro';

test('Button atom renders with correct props', async () => {
  const container = await AstroContainer.create();
  const result = await container.renderToString(Button, {
    props: { variant: 'primary', size: 'md' }
  });
  
  expect(result).toContain('data-variant="primary"');
  expect(result).toContain('data-size="md"');
});
```

#### Molecules: Integration Tests
```typescript
// src/components/molecules/Card/Card.test.ts
test('Card molecule composes atoms correctly', async () => {
  const result = await renderCard({
    slots: {
      title: 'Test Title',
      default: 'Content'
    }
  });
  
  // Verify atoms are present and composed
  expect(result).toContain('class="icon"'); // Icon atom
  expect(result).toContain('class="button"'); // Button atom
});
```

#### Organisms: Visual Regression Tests
```typescript
// src/components/organisms/HeroSection/HeroSection.test.ts
test('HeroSection organism matches visual snapshot', async () => {
  const result = await renderHeroSection();
  await expect(result).toMatchVisualSnapshot();
});
```

---

## 📋 Phase 6: Atomic Documentation (Week 8)

### 6.1 Storybook Organization by Atomic Level

```typescript
// .storybook/main.ts
export default {
  stories: [
    '../src/components/atoms/**/*.stories.@(js|jsx|ts|tsx)',
    '../src/components/molecules/**/*.stories.@(js|jsx|ts|tsx)',
    '../src/components/organisms/**/*.stories.@(js|jsx|ts|tsx)',
    '../src/components/templates/**/*.stories.@(js|jsx|ts|tsx)',
  ],
  // Organize sidebar by atomic level
  sidebar: {
    atoms: { name: '⚛️ Atoms', order: 1 },
    molecules: { name: '🧬 Molecules', order: 2 },
    organisms: { name: '🦠 Organisms', order: 3 },
    templates: { name: '📄 Templates', order: 4 },
  }
};
```

### 6.2 Atomic Component Documentation

```astro
<!-- src/components/atoms/Button/README.md -->
# Button Atom

## Atomic Level: ATOM
- **Can import**: Nothing (atoms are self-contained)
- **Can be imported by**: Molecules, Organisms, Templates
- **Token tier**: Uses only primitive tokens

## Props
| Prop | Type | Default | Token |
|------|------|---------|-------|
| variant | 'primary' \| 'secondary' | 'primary' | `--atom-color-*` |
| size | 'sm' \| 'md' \| 'lg' | 'md' | `--atom-space-*` |

## Usage in Molecules
```astro
<!-- CardFooter molecule -->
<Button variant="primary" size="md">
  <slot name="cta-text" />
</Button>
```
```

---

## 🎯 Success Metrics for Astro + Atomic Design

### Atomic Hierarchy Compliance
- [ ] No `sections/` directory - only atomic levels
- [ ] All components in correct atomic level
- [ ] Import rules enforced (atoms → molecules → organisms)
- [ ] Templates handle layout only

### Astro-Specific Optimizations
- [ ] 0 uses of `define:vars` pattern
- [ ] All components use TypeScript interfaces
- [ ] Proper slot usage per atomic level
- [ ] Islands architecture for interactive components

### Token System Alignment
- [ ] Tokens organized by atomic level
- [ ] CSS variables follow atomic hierarchy
- [ ] No token tier violations

### Performance Targets
- [ ] Atoms: < 5KB per component
- [ ] Molecules: < 15KB per component  
- [ ] Organisms: < 30KB per component
- [ ] Templates: < 5KB (layout only)
- [ ] Total CSS: < 50KB gzipped

---

## 🚀 Quick Start Commands

```bash
# 1. Fix atomic hierarchy
npm run refactor:hierarchy

# 2. Migrate to atomic tokens
npm run refactor:tokens

# 3. Validate atomic boundaries
npm run check:atomic

# 4. Generate atomic component
npm run generate:component --level=molecule --name=SearchBar

# 5. Run atomic tests
npm run test:atoms
npm run test:molecules
npm run test:organisms
```

---

## 📚 Key Principles to Remember

1. **Atoms are pure** - No dependencies, no slots, minimal props
2. **Molecules compose atoms** - Simple, focused, reusable
3. **Organisms are sections** - Complex, may have business logic
4. **Templates are layouts** - Structure only, no visual styling
5. **Pages are instances** - Specific content in templates

6. **Astro components are static by default** - Use islands for interactivity
7. **CSS is scoped by default** - Use `is:global` sparingly
8. **Props are TypeScript-first** - Always define interfaces
9. **Tokens follow atomic hierarchy** - Atoms → Molecules → Organisms

This refactoring maintains the **integrity of both Astro's architecture** and the **Atomic Design System** while optimizing for performance and maintainability.