/**
 * StatCard Component Types
 * Hunter Galloway Design System
 */

export interface StatCardProps {
  /** The main statistic number/value to display */
  number: string;
  /** Description text below the number */
  description: string;
  /** Card style variant */
  variant?: 'default' | 'compact' | 'featured';
  /** Additional CSS classes */
  class?: string;
}

export interface StatCardConfig {
  variants: Record<StatCardProps['variant'], {
    container: string;
    number: string;
    description: string;
    background: string;
  }>;
}