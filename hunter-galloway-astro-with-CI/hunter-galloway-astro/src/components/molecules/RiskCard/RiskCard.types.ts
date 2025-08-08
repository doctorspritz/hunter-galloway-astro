/**
 * RiskCard Component Types
 * Hunter Galloway Design System
 */

export interface RiskCardProps {
  /** Icon name or URL for the risk item */
  icon: string;
  /** Title of the risk item */
  title: string;
  /** Description text of the risk item */
  description: string;
  /** Card style variant - design-based, not content-based */
  variant?: 'default' | 'compact' | 'highlighted';
  /** Additional CSS classes */
  class?: string;
}

export interface RiskCardConfig {
  variants: Record<RiskCardProps['variant'], {
    iconSize: string;
    spacing: string;
    textSizes: {
      title: string;
      description: string;
    };
  }>;
}