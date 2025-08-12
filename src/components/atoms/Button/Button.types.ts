/**
 * Button Component Types
 * Hunter Galloway Design System
 */

export interface ButtonProps {
  /** Button text content - atoms should not use slots */
  text: string;
  /** Button visual variant */
  variant?: 'primary' | 'secondary' | 'ghost' | 'outline';
  /** Button size */
  size?: 'sm' | 'md' | 'lg';
  /** Disabled state */
  disabled?: boolean;
  /** Additional CSS classes */
  class?: string;
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