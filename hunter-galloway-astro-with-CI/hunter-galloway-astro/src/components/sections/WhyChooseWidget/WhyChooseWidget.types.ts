/**
 * WhyChooseWidget Component Types
 * Hunter Galloway Design System
 */

import type { BenefitCardProps } from '../../molecules/BenefitCard/BenefitCard.types';

export interface WhyChooseWidgetProps {
  /** Widget title */
  title: string;
  /** Array of benefits to display */
  benefits: Omit<BenefitCardProps, 'class'>[];
  /** Call-to-action button text */
  buttonText?: string;
  /** Call-to-action button URL */
  buttonHref?: string;
  /** Widget background variant */
  variant?: 'default' | 'light' | 'dark';
  /** Additional CSS classes */
  class?: string;
}

export interface WhyChooseWidgetConfig {
  maxBenefits: number;
  defaultButtonText: string;
  variants: Record<WhyChooseWidgetProps['variant'], {
    background: string;
    titleColor: string;
    containerPadding: string;
  }>;
}