/**
 * Hunter Galloway Design System - Complete Component Library
 * Central export for all design system components
 */

// Design Tokens
export * from '../tokens';

// Atomic Components
export * from './atoms';

// Molecular Components  
export * from './molecules';

// Re-export commonly used components for convenience
export { default as Button } from './atoms/Button/Button.astro';
export { default as Typography } from './atoms/Typography/Typography.astro';
export { default as Icon } from './atoms/Icon/Icon.astro';
export { default as StatCard } from './molecules/StatCard/StatCard.astro';
export { default as PurposeCard } from './molecules/PurposeCard/PurposeCard.astro';
export { default as AwardItem } from './molecules/AwardItem/AwardItem.astro';
export { default as Tooltip } from './molecules/Tooltip/Tooltip.astro';

// Design System Metadata
export const designSystem = {
  version: '1.0.0',
  name: 'Hunter Galloway Design System',
  description: 'A comprehensive design system built with atomic design principles for the Hunter Galloway mortgage broker website.',
  
  components: {
    atoms: {
      count: 5,
      list: ['Button', 'Typography', 'Icon', 'Input', 'Badge'],
    },
    molecules: {
      count: 4,
      list: ['StatCard', 'PurposeCard', 'AwardItem', 'Tooltip'],
    },
  },
  
  tokens: {
    colors: 'Primary brand colors, semantic colors, component-specific colors',
    typography: 'Font families, sizes, weights, text style combinations',
    spacing: 'Margins, padding, gaps, layout dimensions',
    effects: 'Shadows, transitions, transforms, visual effects',
  },
  
  usage: {
    installation: "import { Button, StatCard } from '@/components';",
    customization: 'All components support variant props and additional CSS classes',
    accessibility: 'Built-in ARIA attributes and keyboard navigation',
    responsive: 'Mobile-first responsive design patterns',
  },
} as const;