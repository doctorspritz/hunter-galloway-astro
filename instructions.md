# Hunter Galloway — Atomic Reuse SOP (Single Source of Truth)

Updated: 2025-01-08

Purpose: Define a clear, enforceable workflow for building new UI that maximizes reuse (atoms → molecules → organisms) and mirrors WordPress with minimal, tokenized differences.

## Core Principles
- Replicate existing WordPress UI/UX faithfully; ignore trivial visual differences unless they are consistent across multiple pages.
- Prefer reuse over new code: organism → molecule → atom search, then variants, then new component as last resort.
- No hardcoded styles. Use tokens from `src/tokens` exclusively.
- All visual work must be previewable in `src/pages/design-system.astro`.

## Reuse Decision Flow
1. Check existing organisms in `src/components/organisms` and the design system page.
   - If an organism exists: use it.
   - If minor differences: add a variant (prop, slot, or token override). Do not fork.
2. If no organism: search molecules in `src/components/molecules` that compose the section.
   - If molecules exist: assemble a new organism from them.
   - If close molecules exist: extend via variant. Avoid duplication.
3. If molecules are missing: search atoms in `src/components/atoms`.
   - If atoms exist: build missing molecule(s), then the organism.
   - If atoms are missing: create atoms first (reusable, tokenized), then molecule(s), then the organism.

Variant vs New
- Variant when behavior/layout largely matches, with small visual/layout tweaks or optional features controlled by props/slots.
- New component only when structure and behavior differ meaningfully and cannot be expressed by a clean variant.

## Day-to-day Loop (for every widget/section/organism)
1) Read `workflow_state.md` to pick the next item and follow any active rules.
2) Inspect WordPress source under `WP-FILES/` (CSS/PHP/JS) to understand structure.
   - Grep tips:
     ```bash
     grep -R "risk_widget" WP-FILES/assets/css/ WP-FILES/*.php
     ```
3) Search the design system and components for matches by role (not page name).
   - Browse `src/pages/design-system.astro`
   - Search code: `src/components/{atoms,molecules,organisms}`
4) Decide: reuse, variant, or new (using the flow above). Record the decision in `workflow_state.md`.
5) Implement on a feature branch and add a demo block to `src/pages/design-system.astro`.
6) Safety checks before PR:
   - Build: `npm run build`
   - No hardcoded styles:
     ```bash
     # Hex colors
     grep -R --line-number -E "#[0-9a-fA-F]{3,8}\b" src/components || true
     # Raw rgba/hsl
     grep -R --line-number -E "rgba?\(|hsla?\(" src/components || true
     ```
   - Tokens present via `define:vars` in styles where needed.
7) Open PR with screenshots from `design-system.astro`. Update `workflow_state.md` results/logs.

## Branching & Commits
- Branch: `feat/<area>-<short-desc>` (e.g., `feat/risk-widget-variants`)
- Conventional commits: `feat: add RiskWidget refinance variant`
- PR targets `main`, use squash merge.

## Implementation Rules
- Type props in `Component.types.ts` where applicable.
- Export from `src/components/**/index.ts` barrels where present.
- Place demo assets in `public/images/...`, reference via `/images/...`.
- Keep styles scoped; wire tokens with `define:vars`.

## Visual Parity & Non-goals
- Match layout, spacing, and behavior. Use tokens to approximate colors/shadows if exact values are not present.
- Do not chase one-off pixel tweaks unless they appear across multiple pages (then consider a variant).

## Flowchart
```mermaid
flowchart TD
  A[Start: New WP widget/section] --> B[Search organisms in design system + code]
  B -->|Found exact| C[Use organism]
  B -->|Close| D[Add variant (props/slots/tokens)]
  B -->|None| E[Search molecules]
  E -->|Found| F[Assemble organism from molecules]
  E -->|Close| G[Variant of molecules]
  E -->|None| H[Search atoms]
  H -->|Found| I[Create missing molecules]
  H -->|None| J[Create atoms → molecules]
  I --> F
  G --> F
  F --> K[Add demo to design-system]
  C --> K
  D --> K
  K --> L[Build + token checks]
  L --> M[Open PR + update workflow_state]
```

All agents must follow this SOP. If a situation is unclear, document it in `workflow_state.md` under Logs and propose an update to this file via PR.


