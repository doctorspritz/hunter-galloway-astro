# Hunter Galloway Design System

## 🎯 System Overview

The Hunter Galloway design system is a **3-tier token architecture** extracted from WordPress and organized using **atomic design principles**. This system ensures **pixel-perfect WordPress parity** while providing **scalable, maintainable** styling.

## 🏗️ Token Architecture

### Tier 1: Primitive Tokens (Raw Values)
**Source**: Extracted directly from WordPress CSS
**Purpose**: Store exact WordPress measurements, colors, and values
**Usage**: Referenced by semantic tokens only

```typescript
// primitive.ts
export const primitive = {
  // Colors extracted from WordPress CSS
  color: {
    // WordPress brand colors
    yellow500: '#FDB948',    // btn_yellow background
    yellow600: '#e5a642',    // btn_yellow hover
    yellow400: '#fdc55d',    // btn_yellow lighter
    
    // WordPress grays  
    gray50: '#ffffff',       // backgrounds
    gray100: '#f8f8f8',      // light backgrounds
    gray200: '#eeeeee',      // search, form backgrounds
    gray300: '#ddd',         // borders
    gray400: '#ccc',         // inactive elements
    gray500: '#999',         // secondary text
    gray600: '#666',         // muted text
    gray700: '#444',         // dark text
    gray800: '#333',         // footer navigation bg
    gray900: '#2b2b2b',      // primary text
    gray950: '#1a1a1a',      // footer bottom bg
    
    // WordPress accent colors
    blue500: '#007cba',      // links
    green500: '#46b450',     // success states
    red500: '#dc3232',       // error states
  },
  
  // Spacing extracted from WordPress
  space: {
    xs: '8px',    // WordPress small gaps
    sm: '12px',   // WordPress list spacing  
    md: '16px',   // WordPress default padding
    lg: '20px',   // WordPress section spacing
    xl: '24px',   // WordPress large padding
    '2xl': '30px', // WordPress nav spacing
    '3xl': '36px', // WordPress footer padding
    '4xl': '48px', // WordPress section padding
    '5xl': '60px', // WordPress large sections
  },
  
  // Typography from WordPress CSS
  typography: {
    // Font families
    fontFamily: {
      primary: ['Gotham Pro', 'Arial', 'sans-serif'],
      system: ['system-ui', 'sans-serif'],
    },
    
    // Font sizes from WordPress
    fontSize: {
      xs: '12px',   // footer info
      sm: '14px',   // WordPress default
      md: '15px',   // WordPress nav, buttons
      lg: '16px',   // WordPress body
      xl: '18px',   // WordPress mobile title
      '2xl': '20px', // WordPress footer titles
      '3xl': '24px', // WordPress headings
      '4xl': '28px', // WordPress CTA text
      '5xl': '32px', // WordPress section titles
      '6xl': '40px', // WordPress hero text
    },
    
    // Font weights from WordPress
    fontWeight: {
      normal: 400,
      medium: 500,
      semibold: 600, // WordPress nav, buttons
      bold: 700,     // WordPress headings
      black: 900,    // WordPress hero text
    },
    
    // Line heights from WordPress calculations
    lineHeight: {
      tight: 1.1,
      snug: 1.2,  // WordPress titles
      normal: 1.4, // WordPress nav links
      relaxed: 1.6, // WordPress body text
      loose: 1.8,
    },
  },
  
  // Border radius from WordPress
  radius: {
    none: '0px',
    sm: '4px',
    md: '8px',    // WordPress default
    lg: '12px',   // WordPress dropdowns
    xl: '20px',
    pill: '33px', // WordPress btn_yellow
    full: '50%',  // WordPress circular elements
  },
  
  // Shadows extracted from WordPress
  shadow: {
    sm: '0px 2px 4px rgba(0, 0, 0, 0.1)',
    md: '0px 4px 8px rgba(0, 0, 0, 0.1)',
    lg: '0px 6px 12px rgba(43, 43, 43, 0.06)',    // WordPress header
    xl: '0px 6px 18px rgba(43, 43, 43, 0.12)',    // WordPress header fixed
    '2xl': '0px 10px 40px rgba(0, 0, 0, 0.1)',     // WordPress dropdowns
    button: '0px 6px 12px rgba(43, 43, 43, 0.15)', // WordPress btn_yellow
  },
  
  // Animation values from WordPress
  duration: {
    fast: '0.15s',
    normal: '0.35s',  // WordPress button transitions
    slow: '0.5s',     // WordPress search animation
    slower: '0.9s',   // WordPress dropdown delays
  },
  
  // Z-index scale from WordPress
  zIndex: {
    base: 1,
    dropdown: 999,   // WordPress search form
    sticky: 1000,    // WordPress header
    modal: 1001,     // WordPress mobile menu
    tooltip: 1002,
  },
};
```

### Tier 2: Semantic Tokens (Role-Based)
**Purpose**: Assign meaningful names to primitive values
**Usage**: Primary tokens used by components
**Mapping**: Connect design intent to primitive values

```typescript
// semantic.ts
import { primitive } from './primitive';

export const semantic = {
  color: {
    // Brand colors
    brand: {
      primary: primitive.color.yellow500,   // Main brand color
      secondary: primitive.color.blue500,   // Secondary brand
      accent: primitive.color.yellow400,    // Accent/highlight
    },
    
    // Text colors
    text: {
      primary: primitive.color.gray900,     // Main text
      secondary: primitive.color.gray600,   // Secondary text
      muted: primitive.color.gray500,       // Muted text
      inverse: primitive.color.gray50,      // White text
      inverseSecondary: 'rgba(255, 255, 255, 0.7)', // Footer text
    },
    
    // Interactive colors
    interactive: {
      primary: primitive.color.yellow500,         // Primary buttons
      primaryHover: primitive.color.yellow600,    // Button hover
      phoneLink: '#f3f6f7',                      // WordPress phone bg
      phoneLinkHover: '#e8eef0',                 // WordPress phone hover
      link: primitive.color.blue500,             // Links
      linkHover: '#005a87',                      // Link hover
    },
    
    // Surface colors
    surface: {
      white: primitive.color.gray50,        // Pure white
      primary: primitive.color.gray100,     // Light backgrounds
      secondary: primitive.color.gray200,   // Form, search backgrounds
      tertiary: primitive.color.gray300,    // Subtle backgrounds
    },
    
    // Border colors
    border: {
      primary: primitive.color.gray300,     // Default borders
      secondary: primitive.color.gray400,   // Muted borders
      subtle: 'rgba(255, 255, 255, 0.1)',  // Footer borders
    },
    
    // State colors
    state: {
      success: primitive.color.green500,
      warning: primitive.color.yellow500,
      error: primitive.color.red500,
    },
  },
  
  // Typography semantics
  typography: {
    fontFamily: {
      primary: primitive.typography.fontFamily.primary,
      system: primitive.typography.fontFamily.system,
    },
    
    size: {
      xs: primitive.typography.fontSize.xs,
      sm: primitive.typography.fontSize.sm,
      md: primitive.typography.fontSize.md,
      lg: primitive.typography.fontSize.lg,
      xl: primitive.typography.fontSize.xl,
      '2xl': primitive.typography.fontSize['2xl'],
      '3xl': primitive.typography.fontSize['3xl'],
      '4xl': primitive.typography.fontSize['4xl'],
    },
    
    weight: {
      normal: primitive.typography.fontWeight.normal,
      emphasis: primitive.typography.fontWeight.semibold, // WordPress emphasis
      strong: primitive.typography.fontWeight.bold,
      heavy: primitive.typography.fontWeight.black,
    },
    
    lineHeight: {
      tight: primitive.typography.lineHeight.tight,
      normal: primitive.typography.lineHeight.normal,
      relaxed: primitive.typography.lineHeight.relaxed,
    },
  },
  
  // Spacing semantics
  space: {
    xs: primitive.space.xs,
    sm: primitive.space.sm,
    md: primitive.space.md,
    lg: primitive.space.lg,
    xl: primitive.space.xl,
    '2xl': primitive.space['2xl'],
    '3xl': primitive.space['3xl'],
    '4xl': primitive.space['4xl'],
  },
  
  // Radius semantics
  radius: {
    none: primitive.radius.none,
    sm: primitive.radius.sm,
    md: primitive.radius.md,
    lg: primitive.radius.lg,
    pill: primitive.radius.pill,    // WordPress buttons
    full: primitive.radius.full,
  },
  
  // Shadow semantics
  shadow: {
    subtle: primitive.shadow.lg,      // WordPress header
    elevated: primitive.shadow.xl,    // WordPress header fixed
    floating: primitive.shadow['2xl'], // WordPress dropdowns
    button: primitive.shadow.button,   // WordPress button shadow
  },
  
  // Animation semantics
  duration: {
    fast: primitive.duration.fast,
    normal: primitive.duration.normal,  // WordPress standard
    slow: primitive.duration.slow,
  },
  
  // Layer semantics
  layer: {
    base: primitive.zIndex.base,
    dropdown: primitive.zIndex.dropdown,
    sticky: primitive.zIndex.sticky,
    modal: primitive.zIndex.modal,
  },
};
```

### Tier 3: Component Tokens (Context-Specific)
**Purpose**: Component-specific customizations
**Usage**: Fine-tune components for specific contexts
**Scope**: Used sparingly for unique component needs

```typescript
// component.ts
import { semantic } from './semantic';

export const component = {
  button: {
    // WordPress btn_yellow exact styling
    primary: {
      background: semantic.color.interactive.primary,
      backgroundHover: semantic.color.interactive.primaryHover,
      color: semantic.color.text.primary,
      shadow: semantic.shadow.button,
      radius: semantic.radius.pill,
      fontWeight: semantic.typography.weight.emphasis,
      fontSize: semantic.typography.size.md,
      minHeight: '48px',  // WordPress button height
      padding: '16px 32px', // WordPress button padding
    },
  },
  
  header: {
    // WordPress header exact styling
    desktop: {
      height: '80px',      // WordPress desktop header
      padding: '30px 0',   // WordPress desktop padding
    },
    mobile: {
      height: '57px',      // WordPress mobile header  
      padding: '13px 0',   // WordPress mobile padding
    },
    shadow: semantic.shadow.subtle,
    shadowFixed: semantic.shadow.elevated,
  },
  
  footer: {
    // WordPress footer sections
    main: {
      background: '#262626',  // WordPress footer main
      padding: '36px 0',
    },
    navigation: {
      background: '#333',     // WordPress footer nav (lighter)
      padding: '20px 0',
    },
    bottom: {
      background: '#1a1a1a',  // WordPress footer bottom
      padding: '20px 0',
    },
  },
  
  dropdown: {
    // WordPress dropdown exact styling
    default: {
      width: '735px',       // WordPress default dropdown
      padding: '30px',
      shadow: semantic.shadow.floating,
      radius: semantic.radius.lg,
    },
    calculator: {
      width: '770px',       // WordPress calc dropdown
    },
  },
};
```

## 🎨 Usage in Components

### Astro Component Implementation
```astro
---
// Button.astro
import { semantic } from '../../tokens/semantic';

export interface Props {
  variant?: 'primary' | 'secondary';
  size?: 'sm' | 'md' | 'lg';
}

const { variant = 'primary', size = 'md' } = Astro.props;
---

<button class={`hg-button hg-button--${variant} hg-button--${size}`}>
  <slot />
</button>

<style define:vars={{
  // Use semantic tokens via Astro define:vars
  brandPrimary: semantic.color.brand.primary,
  brandPrimaryHover: semantic.color.interactive.primaryHover,
  textPrimary: semantic.color.text.primary,
  shadowButton: semantic.shadow.button,
  radiusPill: semantic.radius.pill,
  fontSizeMd: semantic.typography.size.md,
  fontWeightEmphasis: semantic.typography.weight.emphasis,
  durationNormal: semantic.duration.normal,
}}>
.hg-button {
  /* Base styles using design tokens */
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-family: inherit;
  font-weight: var(--fontWeightEmphasis);
  font-size: var(--fontSizeMd);
  line-height: 1;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all var(--durationNormal) ease;
  border-radius: var(--radiusPill);
}

.hg-button--primary {
  /* WordPress btn_yellow exact styling */
  background: var(--brandPrimary);
  color: var(--textPrimary);
  box-shadow: var(--shadowButton);
  min-height: 48px;
  padding: 16px 32px;
}

.hg-button--primary:hover {
  background: var(--brandPrimaryHover);
  transform: translateY(-1px);
}
</style>
```

### CSS Variable Injection
```css
/* Generated CSS with injected variables */
.hg-button {
  --brandPrimary: #FDB948;
  --brandPrimaryHover: #e5a642;
  --textPrimary: #2b2b2b;
  --shadowButton: 0px 6px 12px rgba(43, 43, 43, 0.15);
  --radiusPill: 33px;
  --fontSizeMd: 15px;
  --fontWeightEmphasis: 600;
  --durationNormal: 0.35s;
}

.hg-button--primary {
  background: var(--brandPrimary);
  color: var(--textPrimary);
  box-shadow: var(--shadowButton);
  /* etc... */
}
```

## 🛠️ Token Management

### Adding New Tokens
1. **WordPress Analysis**: Extract exact values from WordPress CSS
2. **Primitive Addition**: Add raw value to appropriate primitive category
3. **Semantic Mapping**: Create meaningful semantic token name
4. **Component Usage**: Use in components via `define:vars`
5. **Documentation**: Update design system documentation

### Token Naming Conventions
```typescript
// Pattern: [category].[subcategory].[variant]
color.brand.primary          // ✅ Clear hierarchy
color.interactive.primaryHover // ✅ Descriptive intent
space.section.large          // ✅ Context and size
typography.size.hero         // ✅ Semantic meaning

// Avoid
color.yellow500             // ❌ Primitive in semantic
buttonBackground           // ❌ Missing category
large                     // ❌ No context
```

### WordPress Value Extraction Process
```bash
# Extract colors from WordPress CSS
grep -r "color:\|background:" style.css | grep "#"

# Extract spacing values  
grep -r "padding:\|margin:" style.css | grep "px"

# Extract font properties
grep -r "font-size:\|font-weight:" style.css

# Extract border radius
grep -r "border-radius:" style.css

# Extract shadows
grep -r "box-shadow:" style.css
```

## 🎯 Design System Benefits

### For Developers
- **Consistent Values**: No more guessing measurements
- **WordPress Parity**: Exact WordPress visual matching
- **Maintenance**: Change tokens to update entire system
- **Type Safety**: TypeScript interfaces for all tokens
- **Performance**: CSS custom properties for runtime efficiency

### For Design
- **Brand Consistency**: Enforced through token system
- **Scalability**: New components inherit brand standards
- **Documentation**: Self-documenting design decisions
- **Collaboration**: Shared language between design and development

### For Users
- **Visual Consistency**: Uniform experience across pages
- **Performance**: Optimized CSS delivery
- **Accessibility**: Consistent contrast ratios and sizing
- **Brand Recognition**: Cohesive Hunter Galloway identity

## 📋 Quality Assurance

### Token Validation Checklist
- [ ] WordPress value extracted accurately
- [ ] Semantic name describes intent clearly
- [ ] Used in components via `define:vars`
- [ ] No hardcoded values in component CSS
- [ ] Visual output matches WordPress exactly
- [ ] Performance impact acceptable
- [ ] Documentation updated

### Common Token Mistakes
❌ **Hardcoded CSS**: `background: #FDB948;`  
✅ **Token Usage**: `background: var(--brandPrimary);`

❌ **Primitive in Components**: `color: primitive.color.yellow500;`  
✅ **Semantic in Components**: `color: semantic.color.brand.primary;`

❌ **Vague Names**: `color.light;`  
✅ **Descriptive Names**: `color.surface.secondary;`

## 🔄 Token Evolution

### Maintenance Process
1. **WordPress Updates**: Monitor WordPress theme changes
2. **Value Audits**: Regularly check token accuracy
3. **Usage Analysis**: Track which tokens are most used
4. **Cleanup**: Remove unused or redundant tokens
5. **Expansion**: Add tokens for new WordPress patterns

### Future Enhancements
- **Dark Mode**: Add dark theme token variants
- **Brand Extensions**: Support multiple brand variations
- **Animation Library**: Expand motion design tokens
- **Component Variants**: Specialized component token sets

---

**The design system is the foundation of pixel-perfect WordPress migration. Every visual decision must trace back to WordPress via the token system.**

**Last Updated**: January 2025