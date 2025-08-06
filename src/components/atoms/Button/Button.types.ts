/**
 * Button Component Types
 * Hunter Galloway Design System
 */

export interface ButtonProps {
  /** Button visual variant */
  variant?: 'primary' | 'secondary' | 'ghost' | 'outline';
  /** Button size */
  size?: 'sm' | 'md' | 'lg';
  /** Button type for forms */
  type?: 'button' | 'submit' | 'reset';
  /** Disabled state */
  disabled?: boolean;
  /** Loading state with spinner */
  loading?: boolean;
  /** Full width button */
  fullWidth?: boolean;
  /** HTML href for link-style buttons */
  href?: string;
  /** Target for link buttons */
  target?: '_blank' | '_self' | '_parent' | '_top';
  /** Additional CSS classes */
  class?: string;
  /** Click handler for button elements */
  onClick?: () => void;
}

export interface ButtonVariantStyles {
  base: string;
  variants: Record<ButtonProps['variant'], string>;
  sizes: Record<ButtonProps['size'], string>;
  states: {
    disabled: string;
    loading: string;
  };
}