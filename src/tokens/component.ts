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

  // HeroWidget component tokens
  heroWidget: {
    content: {
      maxWidth: '680px',
      titleFontSize: semantic.typography.size['5xl'],
      titleLineHeight: semantic.typography.lineHeight.tight,
      titleWeight: semantic.typography.weight.display,
    },
    media: {
      maxWidth: '500px',
    },
    checkmark: {
      size: '24px',
      marginTop: '2px',
    },
    tooltip: {
      width: '300px',
      fontSize: semantic.typography.size.sm,
    },
    breakpoint: {
      tablet: semantic.breakpoint.tablet,
    },
    title: {
      fontSize: semantic.typography.size['5xl'],
      lineHeight: semantic.typography.lineHeight.tight,
      weight: semantic.typography.weight.display,
      color: semantic.color.text.primary,
    },
    // Live site exact values
    layout: {
      containerMaxWidth: '1272px',
      contentMaxWidth: '680px',
      checkmarkContainerMaxWidth: '688px',
      mediaMaxWidth: '1240px',
      mediaWidth: '560px',
      minHeight: '500px',
    },
    spacing: {
      paddingX: '5rem', // px-80
      paddingTop: '0.75rem', // pt-3
      paddingBottom: '3rem', // pb-12
      paddingBottomSmall: '0.5rem', // pb-2
      paddingBottomMedium: '0.625rem', // pb-2.5
      paddingTopLarge: '2.5rem', // pt-10
      paddingRight: '0.5rem', // pr-2
      paddingContainer: '1rem', // px-4
      paddingPixel: '1px', // p-px
    },
    gaps: {
      small: '0.5rem', // gap-2
      medium: '1.25rem', // gap-5
      large: '1.5rem', // gap-6
      extraLarge: '4rem', // gap-16
    },
    dimensions: {
      checkmark: {
        width: '1.5rem', // w-6
        height: '1.5rem', // h-6
        innerWidth: '1.25rem', // w-5
        innerHeight: '1.25rem', // h-5
        checkWidth: '0.625rem', // w-2.5
        checkHeight: '0.5rem', // h-2
        leftOffset: '2px',
        topOffset: '2px',
        checkLeftOffset: '7px',
        checkTopOffset: '8px',
      },
      button: {
        width: '24rem', // w-96
        minHeight: '3rem', // min-h-12
        borderRadius: '33px',
      },
      experience: {
        width: '3.5rem', // w-14
        height: '3.5rem', // h-14
        fontSize: '1.875rem', // text-3xl
        lineHeight: '52px',
        borderRadius: '27px',
        outlineWidth: '1px',
        outlineOffset: '-1px',
      },
      logo: {
        width: '7rem', // w-28
        height: '2.5rem', // h-10
        maxWidth: '15rem', // max-w-60
      },
    },
    colors: {
      grey27: '#444444',
      grey15: '#262626',
      chartreuseGreen52: '#77B255',
      whiteSolid: 'white',
      orange64: '#FDB948',
    },
    typography: {
      title: {
        fontSize: '2.25rem', // text-4xl
        lineHeight: '48px',
        weightExtrabold: '800',
        weightNormal: '400',
      },
      body: {
        fontSize: '1rem', // text-base
        lineHeight: '1.5',
        weightNormal: '400',
        weightSemibold: '600',
      },
      button: {
        fontSize: '1.125rem', // text-lg
        lineHeight: '48px',
        weightSemibold: '600',
      },
      experience: {
        fontSize: '1.875rem', // text-3xl
        lineHeight: '52px',
        weightExtrabold: '800',
      },
    },
    shadows: {
      tooltip: '0 4px 6px -1px rgba(0, 0, 0, 0.1)',
    },
    responsive: {
      breakpoint: '1024px',
      mobilePadding: '2rem',
      mobileGap: '2rem',
      mobileMediaWidth: '100%',
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
      minWidth: '200px',
      maxWidth: '250px',
      maxWidthMobile: '300px',
      numberColor: semantic.color.text.primary,
      numberSize: semantic.typography.size['5xl'],
      numberSizeTablet: semantic.typography.size['4xl'],
      numberSizeMobile: semantic.typography.size['3xl'],
      numberWeight: semantic.typography.weight.display,
      descriptionColor: semantic.color.text.secondary,
      descriptionSize: semantic.typography.size.md,
      descriptionWeight: semantic.typography.weight.emphasis,
      transition: semantic.duration.normal,
      hoverTransform: 'translateY(-4px)',
      paddingMobile: `${semantic.space.md} ${semantic.space.sm}`,
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