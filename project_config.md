# Project Config — Hunter Galloway

Agent name: HG-AI
Primary goal: Migrate WordPress UI to Astro using a tokenized Atomic Design system, maximizing component reuse and minimizing divergence.

Tech context
- Framework: Astro 5
- Languages: TypeScript, CSS (scoped in Astro), minimal React where necessary
- Design tokens: `src/tokens/{primitive.ts, semantic.ts, component.ts}`
- Design system preview: `src/pages/design-system.astro`
- Source parity: `WP-FILES/` contains reference PHP/CSS/JS

Repositories & paths
- Monorepo root: this workspace
- Component library: `src/components/{atoms,molecules,organisms}`
- Legacy code (do not reintroduce): `hunter-galloway-astro-with-CI/...`

Branching & CI expectations
- Branch naming: `feat/...`, `fix/...`, `chore/...`, `docs/...`
- Required local checks before PR: `npm run build`, token/literal scans, design-system demo present
- Visual checks: compare against WordPress screenshots when available

Document sources of truth
- SOP: `instructions.md`
- Context: `project_config.md`
- State/logs/plan: `workflow_state.md`


