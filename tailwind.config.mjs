import { colors, typography, spacing, effects } from './src/tokens/index.ts';

/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
  theme: {
    extend: {
      // Colors from design tokens
      colors: {
        // Primary brand colors
        yellow: {
          primary: colors.primary.yellow,
          dark: colors.primary.yellowDark,
          alt: colors.primary.yellowAlt,
        },
        // Neutral colors
        gray: {
          dark: colors.neutral.dark,
          text: colors.neutral.text,
          'text-light': colors.neutral.textLight,
          light: colors.semantic.cream,
          background: colors.neutral.background,
          'background-alt': colors.neutral.backgroundAlt,
          border: colors.neutral.border,
        },
        // Semantic colors
        'light-blue': colors.semantic.lightBlue,
        cream: colors.semantic.cream,
        success: colors.semantic.success,
        warning: colors.semantic.warning,
        error: colors.semantic.error,
        info: colors.semantic.info,
      },

      // Typography from design tokens
      fontFamily: {
        primary: typography.fontFamily.primary,
        sans: typography.fontFamily.primary,
      },
      fontSize: typography.fontSize,
      fontWeight: typography.fontWeight,
      lineHeight: typography.lineHeight,
      letterSpacing: typography.letterSpacing,

      // Spacing from design tokens
      spacing: spacing.scale,
      gap: spacing.gap,
      borderRadius: spacing.borderRadius,

      // Effects from design tokens
      boxShadow: effects.shadow,
      transitionDuration: {
        fast: effects.transition.fast,
        normal: effects.transition.normal,
        slow: effects.transition.slow,
      },
      opacity: effects.opacity,
      zIndex: effects.zIndex,
      backdropBlur: effects.backdrop,

      // Container configuration
      container: {
        center: true,
        padding: spacing.layout.containerPadding,
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: spacing.layout.containerMaxWidth,
          '2xl': spacing.layout.containerMaxWidth,
        },
      },
    },
  },
  plugins: [],
}