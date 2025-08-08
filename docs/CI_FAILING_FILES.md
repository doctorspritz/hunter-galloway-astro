# CI failing files snapshot

Generated from running `pnpm check` (hard-coded styles guard) on this branch.

Failing due to hard-coded colors/px (scripts/check-no-literals.mjs):

- src/styles/global.css
- src/pages/design-system.astro
- src/pages/risk-widget-test.astro
- src/tokens/colors.ts
- src/tokens/component.ts
- src/tokens/effects.ts
- src/tokens/primitive.ts
- src/tokens/semantic.ts
- src/tokens/spacing.ts
- src/tokens/typography.ts
- src/components/organisms/Awards.astro
- src/components/organisms/BankLogos.astro
- src/components/organisms/Footer.astro
- src/components/organisms/Header.astro
- src/components/organisms/Header.stories.ts
- src/components/organisms/HeroSection.astro
- src/components/organisms/LoanPurpose.astro
- src/components/organisms/PropertyMap.astro
- src/components/organisms/Reviews.astro
- src/components/organisms/Statistics.astro
- src/pages/legacy/header-new.astro
- src/pages/legacy/header-old.astro
- src/components/atoms/Button/Button.astro
- src/components/atoms/Container/Container.astro
- src/components/atoms/Container/Container.stories.ts
- src/components/atoms/Logo/Logo.astro
- src/components/atoms/Icon/Icon.astro
- src/components/atoms/Input/Input.astro
- src/components/atoms/Slider/Slider.astro
- src/components/atoms/Slider/Slider.stories.ts
- src/components/molecules/CalculatorResult/CalculatorResult.astro
- src/components/molecules/AwardItem/AwardItem.astro
- src/components/molecules/FooterNavigation/FooterNavigation.astro
- src/components/molecules/FooterStatCard/FooterStatCard.astro
- src/components/molecules/NavDropdown/NavDropdown.astro
- src/components/molecules/PhoneLink/PhoneLink.astro
- src/components/molecules/PurposeCard/PurposeCard.astro
- src/components/molecules/PurposeCard/PurposeCard.stories.ts
- src/components/molecules/ReviewCard/ReviewCard.astro
- src/components/molecules/RiskCard/RiskCard.astro
- src/components/molecules/SocialLinks/SocialLinks.astro
- src/components/molecules/StatCard/StatCard.astro
- src/components/molecules/WhyChooseItem/WhyChooseItem.astro
- src/components/organisms/HeroWidget/HeroWidget.astro
- src/components/organisms/MortgageRentCalculator/MortgageRentCalculator.astro
- src/components/organisms/RiskWidget/RiskWidget.astro
- src/components/organisms/RiskWidget/RiskWidget.types.ts
- src/components/organisms/WhyChoose/WhyChoose.astro
- src/components/sections/RiskWidget/RiskWidget.astro
- src/components/sections/RiskWidget/RiskWidget.types.ts

Notes:
- This list reflects the initial strict guard. We later scoped checks to changed files in PRs to avoid blocking unrelated work. Use this file as a backlog for refactors to tokenized styles.


