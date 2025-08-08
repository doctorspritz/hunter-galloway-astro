/**
 * Badge Component Types
 * Hunter Galloway Design System
 */

export interface BadgeProps {
  /** Badge visual variant */
  variant?: 'primary' | 'secondary' | 'success' | 'warning' | 'error' | 'info';
  /** Badge size */
  size?: 'sm' | 'md' | 'lg';
  /** Badge shape */
  shape?: 'rounded' | 'pill' | 'square';
  /** Additional CSS classes */
  class?: string;
}