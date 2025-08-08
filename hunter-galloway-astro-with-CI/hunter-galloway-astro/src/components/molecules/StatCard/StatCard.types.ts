/**
 * StatCard Component Types
 * Hunter Galloway Design System
 */

export interface StatCardProps {
  /** The main statistic number/value to display */
  number: string;
  /** Description text below the number */
  description: string;
  /** Background variant for the card */
  background?: 'white' | 'lightBlue' | 'gray';
  /** Size variant */
  size?: 'sm' | 'md' | 'lg';
  /** Whether to show hover effect */
  hoverable?: boolean;
  /** Additional CSS classes */
  class?: string;
}

export interface StatCardConfig {
  backgrounds: Record<StatCardProps['background'], string>;
  sizes: Record<StatCardProps['size'], {
    container: string;
    number: string;
    description: string;
  }>;
}