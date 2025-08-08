/**
 * Typography Component Types
 * Hunter Galloway Design System
 */

export interface TypographyProps {
  /** HTML element to render */
  element?: 'h1' | 'h2' | 'h3' | 'h4' | 'h5' | 'h6' | 'p' | 'span' | 'div';
  /** Font size using design tokens */
  size?: 'xs' | 'sm' | 'md' | 'lg' | 'xl' | '2xl' | '3xl' | '4xl' | '4.5xl' | '5xl';
  /** Text color */
  color?: 'primary' | 'secondary' | 'tertiary' | 'inverse';
  /** Text alignment */
  align?: 'left' | 'center' | 'right' | 'justify';
  /** Font weight using design tokens */
  weight?: 'body' | 'emphasis' | 'strong' | 'heading' | 'bold' | 'display';
  /** Whether text should not wrap */
  noWrap?: boolean;
  /** Additional CSS classes */
  class?: string;
}

export interface TypographyVariantStyles {
  fontSize: string;
  fontWeight: string;
  lineHeight: string;
  letterSpacing?: string;
}