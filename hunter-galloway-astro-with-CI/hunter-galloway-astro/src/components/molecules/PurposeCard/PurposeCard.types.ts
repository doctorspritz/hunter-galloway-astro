/**
 * PurposeCard Component Types
 * Hunter Galloway Design System
 */

export interface PurposeCardProps {
  /** Card title */
  title: string;
  /** Card description text */
  description: string;
  /** Icon name for the card */
  icon: string;
  /** Background image for hover effect */
  image: string;
  /** URL to navigate to when clicked */
  href: string;
  /** Card size variant */
  size?: 'md' | 'lg';
  /** Card style variant */
  variant?: 'normal' | 'highlighted' | 'with-badge';
  /** Badge text when using with-badge variant */
  badge?: string;
  /** Additional CSS classes */
  class?: string;
}

export interface PurposeCardConfig {
  sizes: Record<PurposeCardProps['size'], {
    container: string;
    content: string;
    title: string;
    description: string;
  }>;
}