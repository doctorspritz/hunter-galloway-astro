/**
 * Image Component Types
 * Hunter Galloway Design System
 */

export interface ImageProps {
  /** Image source URL */
  src: string;
  /** Alt text for accessibility */
  alt: string;
  /** Image width (can be number for pixels or string for CSS units) */
  width?: number | string;
  /** Image height (can be number for pixels or string for CSS units) */
  height?: number | string;
  /** Loading strategy */
  loading?: 'lazy' | 'eager';
  /** Object fit behavior */
  fit?: 'cover' | 'contain' | 'fill' | 'none' | 'scale-down';
  /** Border radius variant */
  radius?: 'none' | 'sm' | 'md' | 'lg' | 'full';
  /** Whether to show a subtle border */
  bordered?: boolean;
  /** Placeholder background while loading */
  placeholder?: boolean;
  /** Additional CSS classes */
  class?: string;
  /** Responsive image sources for different screen sizes */
  srcSet?: string;
  /** Image sizes attribute for responsive images */
  sizes?: string;
  /** WordPress-style image optimization (WebP, AVIF fallbacks) */
  optimize?: boolean;
}

export interface ImageVariantStyles {
  base: string;
  fit: Record<ImageProps['fit'], string>;
  radius: Record<ImageProps['radius'], string>;
  states: {
    loading: string;
    error: string;
    bordered: string;
  };
}