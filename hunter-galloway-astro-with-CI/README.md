# WordPress → Astro Migration CI Scaffold

This repository scaffold enforces **pixel-perfect parity**, **atomic design principles**, and **design token compliance** when migrating the Hunter Galloway WordPress site to Astro.

## 🚦 Pipeline Overview

**CI/CD stack includes:**
- **ESLint** — Atomic import boundaries + no raw CSS values
- **Stylelint** — Design token enforcement
- **Storybook + Chromatic** — Component-level visual diffs
- **Playwright + Percy** — Full-page WP vs Astro visual diffs
- **Automatic WordPress Screenshot Fetching** — No manual baseline updates needed

---

## 📂 Key Folders

```
src/components/atoms/
src/components/molecules/
src/components/organisms/
tests/visual/
tests/visual/baseline/  # Auto-updated WP screenshots
.storybook/             # Storybook config
.github/workflows/      # GitHub Actions CI
```

---

## 🧑‍💻 Local Development Workflow

1. **Install dependencies**
```bash
npm install
npx playwright install
```

2. **Run lint checks**
```bash
npm run lint
npm run lint:css
```

3. **Run Storybook locally**
```bash
npm run storybook
```

4. **Run visual comparison tests**
```bash
npm run build
npx playwright test tests/visual/wp-comparison.spec.ts
```

---

## 🛡 CI Enforcement Rules

**Fail conditions:**
- Raw hex/RGB values in code
- Imports that break atomic hierarchy
- Missing Storybook coverage
- Component visual diff changes > tolerance
- Full-page Astro vs WordPress diff > 500 pixels
- Accessibility or performance drop vs baseline

---

## 🌐 Secrets Required for CI

- `CHROMATIC_PROJECT_TOKEN` — for Chromatic visual diffs
- `PERCY_TOKEN` — for Percy full-page visual diffs

Set these in your GitHub repo → **Settings → Secrets → Actions**.

---

## 🔄 Automatic WordPress Baseline Updates

The Playwright test automatically:
- Loads the live WordPress page
- Captures a fresh screenshot
- Compares it to the Astro build

No manual baseline update step is required.

---

## 📜 Commit Hooks

You may optionally add Husky to block commits that fail lint/tests:
```bash
npx husky add .husky/pre-commit "npm run lint && npm run lint:css && npm test"
```

---

## ✅ Summary

Following this setup:
- Every PR will be **blocked** unless it adheres to your mandatory workflow
- Agents can **only** produce token-compliant, atomic, pixel-perfect components
- Visual, functional, and accessibility parity with WordPress is guaranteed
