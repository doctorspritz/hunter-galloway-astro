/**
 * Hunter Galloway Design System - Component Tokens
 * Tokens specific to individual components
 * These reference semantic tokens and tie them to specific component properties
 */

import { semantic } from './semantic';
import { primitive } from './primitive';

export const component = {
  // Button component tokens
  button: {
    // Primary button variant
    primary: {
      background: semantic.color.interactive.primary,
      backgroundHover: semantic.color.interactive.primaryHover,
      text: semantic.color.text.primary,
      borderRadius: semantic.radius.pill,
      paddingX: semantic.spacing.button.x,
      paddingY: semantic.spacing.button.y,
      fontSize: semantic.typography.size.md,
      fontWeight: semantic.typography.weight.strong,
      transition: semantic.duration.normal,
    },

    // Secondary button variant
    secondary: {
      background: semantic.color.interactive.secondary,
      backgroundHover: semantic.color.surface.tertiary,
      text: semantic.color.text.primary,
      borderRadius: semantic.radius.pill,
      paddingX: semantic.spacing.button.x,
      paddingY: semantic.spacing.button.y,
      fontSize: semantic.typography.size.md,
      fontWeight: semantic.typography.weight.strong,
      transition: semantic.duration.normal,
    },

    // Ghost button variant
    ghost: {
      background: semantic.color.interactive.ghost,
      backgroundHover: semantic.color.surface.secondary,
      text: semantic.color.brand.primary,
      borderRadius: semantic.radius.pill,
      paddingX: semantic.spacing.button.x,
      paddingY: semantic.spacing.button.y,
      fontSize: semantic.typography.size.md,
      fontWeight: semantic.typography.weight.strong,
      transition: semantic.duration.normal,
    },

    // Outline button variant
    outline: {
      background: semantic.color.interactive.ghost,
      backgroundHover: semantic.color.surface.secondary,
      text: semantic.color.brand.primary,
      border: semantic.color.brand.primary,
      borderRadius: semantic.radius.pill,
      paddingX: semantic.spacing.button.x,
      paddingY: semantic.spacing.button.y,
      fontSize: semantic.typography.size.md,
      fontWeight: semantic.typography.weight.strong,
      transition: semantic.duration.normal,
    },
  },

  // Card component tokens
  card: {
    // Stat card variant
    stat: {
      background: semantic.color.surface.accent,
      borderRadius: semantic.radius.md,
      padding: semantic.spacing.card,
      shadow: 'none', // Per requirements
      numberColor: semantic.color.text.primary,
      numberSize: semantic.typography.size['5xl'],
      numberWeight: semantic.typography.weight.display,
      descriptionColor: semantic.color.text.secondary,
      descriptionSize: semantic.typography.size.md,
      descriptionWeight: semantic.typography.weight.emphasis,
      transition: semantic.duration.normal,
      hoverTransform: 'translateY(-4px)',
    },

    // Purpose card variant  
    purpose: {
      background: semantic.color.surface.tertiary,
      backgroundPeach: semantic.color.surface.highlight,
      borderRadius: semantic.radius.lg,
      padding: semantic.spacing.card,
      border: semantic.color.border.primary,
      shadow: semantic.shadow.subtle,
      shadowHover: semantic.shadow.prominent,
      titleColor: semantic.color.text.primary,
      titleSize: semantic.typography.size['2xl'],
      titleWeight: semantic.typography.weight.heading,
      descriptionColor: semantic.color.text.secondary,
      descriptionSize: semantic.typography.size.md,
      descriptionLineHeight: semantic.typography.lineHeight.relaxed,
      transition: semantic.duration.normal,
      hoverTransform: 'translateY(-4px)',
    },
  },

  // Input component tokens
  input: {
    background: semantic.color.surface.primary,
    border: semantic.color.border.primary,
    borderFocus: semantic.color.border.focus,
    borderRadius: semantic.radius.sm,
    padding: semantic.space.md,
    fontSize: semantic.typography.size.md,
    textColor: semantic.color.text.primary,
    placeholderColor: semantic.color.text.tertiary,
    transition: semantic.duration.fast,
  },

  // Badge component tokens
  badge: {
    background: 'rgba(253, 185, 72, 0.5)', // Semi-transparent brand color
    text: semantic.color.text.primary,
    borderRadius: semantic.radius.lg,
    paddingX: semantic.space.md,
    paddingY: semantic.space.sm,
    fontSize: semantic.typography.size.sm,
    fontWeight: semantic.typography.weight.strong,
  },

  // Tooltip component tokens
  tooltip: {
    background: primitive.color.gray[800],
    text: semantic.color.text.inverse,
    borderRadius: semantic.radius.sm,
    padding: semantic.space.sm,
    fontSize: semantic.typography.size.sm,
    fontWeight: semantic.typography.weight.body,
    shadow: semantic.shadow.card,
    maxWidth: '200px',
  },

  // Navigation/Header component tokens
  navigation: {
    background: semantic.color.surface.primary,
    border: semantic.color.border.primary,
    linkColor: semantic.color.text.primary,
    linkHoverColor: semantic.color.brand.primary,
    padding: semantic.space.sm,

    dropdown: {
      background: semantic.color.surface.white,
      borderRadius: semantic.radius.dropdown,
      shadow: semantic.shadow.dropdown,
      padding: '30px 30px 17px', // WordPress dropdown padding
      width: '735px',            // Default dropdown width
      widthCalc: '770px',        // Calculator dropdown width
      gap: semantic.space.lg,
      columnMinWidth: '200px',
      report: {
        maxWidth: '220px',
        paddingLeft: semantic.space.lg,
        borderLeft: semantic.color.border.primary,
      },
      mobile: {
        top: '57px',
        padding: semantic.space.md,
      },
    },
  },

  // Section component tokens
  section: {
    paddingY: semantic.spacing.section,
    paddingX: semantic.spacing.container,
    headingColor: semantic.color.text.primary,
    headingSize: semantic.typography.size['4xl'],
    headingWeight: semantic.typography.weight.heading,
    headingLineHeight: semantic.typography.lineHeight.tight,
    headingMarginBottom: semantic.space.xl,
  },
} as const;

export default component;