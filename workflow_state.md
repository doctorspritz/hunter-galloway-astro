# Workflow State — Hunter Galloway

Last updated: 2025-08-08

## Rules
- Follow `instructions.md` SOP for every new UI.
- Prefer variants over duplication; use tokens only.
- All work must be demoed in `src/pages/design-system.astro` before PR.

## Plan (active)
1. Implement `WhyChoose` organism using `WhyChooseItem` molecule.
2. Extend `RiskWidget` with professional/refinance variants.

## Items (queue)
- ReputationWidget (awards + rating + review snippets)
- AccordionWidget (+ AccordionItem)
- DarkSection layout
- ContentWidget + TextWidget
- Button extensions (dark/img variants)

## Logs
- 2025-01-08: Established SOP files (`instructions.md`, `project_config.md`, `workflow_state.md`).
- 2025-08-08: Refactored HeroSection into HeroWidget with variants.
- 2025-01-08: Added NavDropdown molecule to design system page for proper documentation and testing.
- 2025-01-08: Fixed NavDropdown visibility in design system by adding CSS overrides for demo display.
- 2025-01-08: Enhanced CSS specificity for NavDropdown demo visibility using ID selectors and !important declarations.
- 2025-08-12: Fixed Button atom styling by wiring missing token variables and refactoring Button to consume semantic tokens with define:vars (atomic-compliant, no slots, <=5 props).

## Results
- HeroSection replaced by flexible HeroWidget with variant support.
- NavDropdown molecule now properly documented in design system with all variants (standard, promo, image card).
- NavDropdown demos now visible and properly styled in design system page with high-specificity CSS overrides.
- Button atom styles now apply correctly across variants and sizes; tokens flow from `semantic` → `TokenStyles.astro`/component define:vars.


