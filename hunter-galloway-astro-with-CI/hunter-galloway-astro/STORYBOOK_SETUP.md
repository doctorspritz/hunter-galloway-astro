# Hunter Galloway Design System - Storybook Setup Guide

This guide shows how to set up Storybook for a more advanced component visualization and testing environment.

## Option 1: Built-in Design System Page (Already Created) ✅

**Access**: Visit `/design-system` in your Astro application

**Features**:
- ✅ Complete component showcase
- ✅ Design token visualization  
- ✅ Interactive examples
- ✅ Usage documentation
- ✅ Zero configuration needed
- ✅ Integrated with your existing Astro setup

**Benefits**:
- No additional dependencies
- Loads instantly with your app
- Uses your actual components in real environment
- Automatically stays in sync

## Option 2: Full Storybook Setup (Advanced)

If you want the full Storybook experience with isolated component testing, here's how to set it up:

### 1. Install Storybook

```bash
npx storybook@latest init
```

### 2. Configure for Astro Components

Create `.storybook/main.js`:

```javascript
module.exports = {
  stories: ['../src/components/**/*.stories.@(js|jsx|ts|tsx|astro)'],
  addons: [
    '@storybook/addon-essentials',
    '@storybook/addon-a11y',
    '@storybook/addon-design-tokens'
  ],
  framework: {
    name: '@storybook/web-components-vite',
    options: {}
  }
};
```

### 3. Create Component Stories

Example for Button component (`src/components/atoms/Button/Button.stories.ts`):

```typescript
import type { Meta, StoryObj } from '@storybook/web-components';
import { html } from 'lit';

const meta: Meta = {
  title: 'Atoms/Button',
  parameters: {
    docs: {
      description: {
        component: 'Hunter Galloway design system button component with multiple variants and states.'
      }
    }
  },
  argTypes: {
    variant: {
      control: { type: 'select' },
      options: ['primary', 'secondary', 'ghost', 'outline']
    },
    size: {
      control: { type: 'select' },
      options: ['sm', 'md', 'lg']
    },
    disabled: {
      control: { type: 'boolean' }
    },
    loading: {
      control: { type: 'boolean' }
    }
  }
};

export default meta;
type Story = StoryObj;

export const Primary: Story = {
  args: {
    variant: 'primary',
    size: 'md'
  },
  render: (args) => html`
    <hg-button 
      variant="${args.variant}" 
      size="${args.size}"
      ?disabled="${args.disabled}"
      ?loading="${args.loading}"
    >
      Click me
    </hg-button>
  `
};

export const AllVariants: Story = {
  render: () => html`
    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
      <hg-button variant="primary">Primary</hg-button>
      <hg-button variant="secondary">Secondary</hg-button>
      <hg-button variant="ghost">Ghost</hg-button>
      <hg-button variant="outline">Outline</hg-button>
    </div>
  `
};

export const AllSizes: Story = {
  render: () => html`
    <div style="display: flex; gap: 1rem; align-items: center;">
      <hg-button variant="primary" size="sm">Small</hg-button>
      <hg-button variant="primary" size="md">Medium</hg-button>
      <hg-button variant="primary" size="lg">Large</hg-button>
    </div>
  `
};
```

### 4. Design Token Documentation

Create `.storybook/design-tokens.js`:

```javascript
export const tokens = {
  colors: {
    primary: {
      yellow: { value: '#FDB948', type: 'color' },
      yellowDark: { value: '#E5A43F', type: 'color' }
    },
    semantic: {
      lightBlue: { value: '#f0f8ff', type: 'color' },
      lightPeach: { value: '#fdf5e4', type: 'color' }
    }
  },
  typography: {
    fontFamily: { value: 'Open Sans, system-ui, sans-serif', type: 'font' },
    fontSize: {
      sm: { value: '14px', type: 'dimension' },
      base: { value: '16px', type: 'dimension' },
      lg: { value: '18px', type: 'dimension' }
    }
  },
  spacing: {
    sectionPadding: { value: '50px', type: 'dimension' },
    cardGap: { value: '2rem', type: 'dimension' }
  }
};
```

### 5. Run Storybook

```bash
npm run storybook
```

## Comparison: Built-in vs Storybook

| Feature | Built-in Page | Storybook |
|---------|---------------|-----------|
| Setup Time | ✅ Instant | ⏱️ 30+ minutes |
| Dependencies | ✅ Zero | 📦 50+ packages |
| Performance | ✅ Fast | ⚠️ Slower |
| Component Isolation | ❌ No | ✅ Yes |
| Interactive Controls | ❌ Limited | ✅ Full |
| Visual Testing | ❌ Manual | ✅ Automated |
| Documentation | ✅ Good | ✅ Excellent |
| Team Collaboration | ✅ Good | ✅ Excellent |
| Maintenance | ✅ Low | ⚠️ High |

## Recommendation

**Start with the built-in design system page** (`/design-system`) because:

1. **It's already created and working** - Shows all your components with real data
2. **Zero maintenance** - Stays automatically in sync with your components
3. **Fast loading** - No additional build process
4. **Perfect for most needs** - Great for design reviews, developer reference, and client presentations

**Consider Storybook later if you need**:
- Component isolation for testing
- Interactive property controls
- Visual regression testing
- Advanced documentation features
- Large team collaboration tools

## Current Status

✅ **Built-in Design System Page**: Ready to use at `/design-system`
- Complete component showcase
- Design token visualization
- Interactive examples
- Usage guidelines
- Mobile responsive

The page showcases:
- **Design Tokens**: Colors, typography, spacing scales
- **Atomic Components**: Buttons, Typography, Icons, Badges, Inputs
- **Molecular Components**: StatCards, PurposeCards, AwardItems, Tooltips
- **Usage Examples**: Real component configurations
- **Code Examples**: Import statements and prop usage