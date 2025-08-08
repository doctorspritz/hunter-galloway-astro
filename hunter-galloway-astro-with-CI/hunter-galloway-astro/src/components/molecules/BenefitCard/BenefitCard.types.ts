/**
 * BenefitCard Component Types
 * Hunter Galloway Design System
 */

export interface BenefitCardProps {
  /** Icon name or URL for the benefit */
  icon: string;
  /** Title of the benefit */
  title: string;
  /** Description text of the benefit */
  description: string;
  /** Card style variant */
  variant?: 'default' | 'light' | 'featured';
  /** Additional CSS classes */
  class?: string;
}

export interface BenefitCardConfig {
  variants: Record<BenefitCardProps['variant'], {
    background: string;
    border?: string;
  }>;
}