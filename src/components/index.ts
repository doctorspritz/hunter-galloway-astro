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

// Organism Components
export * from './organisms';

// Re-export commonly used components for convenience
export { default as Button } from './atoms/Button/Button.astro';
export { default as Typography } from './atoms/Typography/Typography.astro';
export { default as Icon } from './atoms/Icon/Icon.astro';
export { default as Container } from './atoms/Container/Container.astro';
export { default as Slider } from './atoms/Slider/Slider.astro';
export { default as StatCard } from './molecules/StatCard/StatCard.astro';
export { default as PurposeCard } from './molecules/PurposeCard/PurposeCard.astro';
export { default as AwardItem } from './molecules/AwardItem/AwardItem.astro';
export { default as Tooltip } from './molecules/Tooltip/Tooltip.astro';
export { default as RiskCard } from './molecules/RiskCard/RiskCard.astro';
export { default as CalculatorResult } from './molecules/CalculatorResult/CalculatorResult.astro';
export { default as Header } from './organisms/Header.astro';
export { default as Footer } from './organisms/Footer.astro';
export { default as MortgageRentCalculator } from './organisms/MortgageRentCalculator/MortgageRentCalculator.astro';

// Design System Metadata
export const designSystem = {
  version: '1.0.0',
  name: 'Hunter Galloway Design System',
  description: 'A comprehensive design system built with atomic design principles for the Hunter Galloway mortgage broker website.',
  
  components: {
    atoms: {
      count: 8,
      list: ['Button', 'Typography', 'Icon', 'Input', 'Badge', 'Container', 'Logo', 'Slider'],
    },
    molecules: {
      count: 11,
      list: ['StatCard', 'PurposeCard', 'AwardItem', 'Tooltip', 'RiskCard', 'FooterStatCard', 'PhoneLink', 'ReviewCard', 'SocialLinks', 'CalculatorResult', 'FooterNavigation'],
    },
    organisms: {
      count: 10,
      list: ['Header', 'Footer', 'HeroSection', 'Awards', 'BankLogos', 'LoanPurpose', 'PropertyMap', 'Reviews', 'Statistics', 'MortgageRentCalculator'],
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