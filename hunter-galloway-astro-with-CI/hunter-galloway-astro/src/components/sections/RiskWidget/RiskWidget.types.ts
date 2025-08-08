/**
 * RiskWidget Component Types
 * Hunter Galloway Design System
 */

import type { RiskCardProps } from '../../molecules/RiskCard/RiskCard.types';

export interface RiskWidgetProps {
  /** Widget title */
  title: string;
  /** Optional intro text before risk items */
  introText?: string;
  /** Array of risk/benefit items */
  items: Omit<RiskCardProps, 'class'>[];
  /** Image for the right side */
  image?: {
    src: string;
    alt: string;
  };
  /** Optional market statistic with tooltip */
  marketStat?: {
    text: string;
    percentage: string;
    tooltipText: string;
  };
  /** Background style variant - design-based, not content-based */
  variant?: 'default' | 'light' | 'reversed';
  /** Additional CSS classes */
  class?: string;
}

export interface RiskWidgetConfig {
  variants: Record<RiskWidgetProps['variant'], {
    background: string;
    layout: 'standard' | 'reversed';
    padding: string;
  }>;
}