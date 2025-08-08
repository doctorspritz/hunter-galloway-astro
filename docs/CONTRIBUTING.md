### Hunter Galloway Design System – Team Workflow

This project implements Atomic Design (atoms → molecules → organisms) using Astro components and a strict token system. Multiple agents contribute; please follow this guide to keep the codebase consistent and redundancy‑free.

## Current state (single sources of truth)
- Components: `src/components/{atoms,molecules,organisms}`
- Tokens: `src/tokens/{primitive.ts,semantic.ts,component.ts}`
- Reference gallery: `src/pages/design-system.astro` (canonical preview; Storybook/Astrobook are not used)
- Canonical `Header.astro` and `Footer.astro`: `src/components/organisms/`
- Legacy/nested duplicates in `hunter-galloway-astro-with-CI/...` are ignored/removed – do not reintroduce them.
 - SOP: see `instructions.md`
 - Project context: see `project_config.md`
 - Active plan/logs: see `workflow_state.md`

## Rules for new components (atoms/molecules/organisms)
- No hard‑coded colors, shadows, borders, or typography in CSS or inline styles.
- Always import tokens and bind them via `define:vars` in `<style>`.
- Prefer `semantic` tokens; only extend `primitive` or `component` tokens if truly needed.
- Keep styles scoped (omit `is:global` unless strictly necessary).
- Type props in a `Component.types.ts` file and import them where used.
 - Follow the reuse flow in `instructions.md` (organism → molecule → atom; variants first, no duplication).

Minimal structure example (molecule):

```astro
---
import { semantic } from '../../tokens/semantic';
export interface ExampleProps { label: string }
const { label } = Astro.props as ExampleProps;
---
<div class="example">{label}</div>
<style define:vars={{
  textPrimary: semantic.color.text.primary,
  surfacePrimary: semantic.color.surface.primary,
  shadowCard: semantic.shadow.card,
}}>
.example { color: var(--textPrimary); background: var(--surfacePrimary); box-shadow: var(--shadowCard); }
</style>
```

Checklist for a new component
- [ ] Create `Component.astro` (and `Component.types.ts` if needed)
- [ ] Use tokens via `define:vars` (no literals like `#fff`, `rgba(...)`, `box-shadow: 0 ...`)
- [ ] Export from the appropriate `index.ts` barrel if one exists
- [ ] Add a small demo to `src/pages/design-system.astro`
- [ ] Record reuse/variant/new decision in `workflow_state.md`
- [ ] Place any images under `public/images/...` and reference with absolute `/images/...` paths

Adding or changing tokens
- Prefer existing `semantic` tokens. If adding tokens:
  - Add raw values to `src/tokens/primitive.ts`
  - Map to roles in `src/tokens/semantic.ts`
  - If component‑specific, add to `src/tokens/component.ts`
- Keep names meaningful and consistent; avoid duplicating near‑identical roles.

## Git workflow

Branching
- Feature: `feat/<area>-<short-desc>` (e.g., `feat/organism-risk-widget`) 
- Fix: `fix/<area>-<short-desc>`
- Chore/Docs: `chore/...`, `docs/...`

Local development
- Run the site: `npm run dev` and view `http://localhost:4321/design-system`
- Validate visual parity in `design-system.astro` only (no Storybook/Astrobook)
 - Before PR, run token literal scans per `instructions.md`

Commits (Conventional Commits)
- `feat: add LoanPurpose organism`
- `fix: tokenize RiskWidget shadows`
- `docs: update contributing guide`

Pull requests
- Open a PR to `main` with a clear title/description
- Include screenshots of the new component in `design-system.astro` if visual
- Request review; address feedback; prefer “Squash and merge”

Do not
- Re‑add files from `hunter-galloway-astro-with-CI/...`
- Hard‑code colors/shadows/typography
- Introduce duplicate components under different paths

## Where to put things
- Atoms: `src/components/atoms/<Name>/<Name>.astro`
- Molecules: `src/components/molecules/<Name>/<Name>.astro`
- Organisms: `src/components/organisms/<Name>.astro` or folder if multi‑file

## QA before opening a PR
- Component renders inside `design-system.astro`
- No console errors; no missing assets (404)
- No hard‑coded styles; tokens only
- Imports resolve; TypeScript types compile

Thank you for keeping the system consistent and maintainable.


