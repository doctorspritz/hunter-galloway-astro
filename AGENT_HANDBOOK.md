Perfect — here’s your **Agent Handbook** markdown file that combines:

1. The **Parallel Development Playbook flow**
2. The **Component Reuse Checklist flow**

You can save this as `AGENT_HANDBOOK.md` in your repo so every agent has **one reference doc** for both how to work in parallel and how to decide if they should build or reuse a component.

---

````markdown
# 🛠 Agent Handbook — WordPress → Astro Migration

This handbook combines the **Parallel Development Playbook** and the **Component Reuse Checklist** so every agent knows **how to work in parallel** and **how to decide when to reuse or build components**.

---

## **1️⃣ Parallel Development Flow**

```mermaid
flowchart TD
    A[Start: Assign work from wp_page_map.json] --> B{Is it a page or component?}
    B -->|Page| C[Create branch: feature/page-[slug]]
    B -->|Component| D[Create branch: feature/component-[name]]

    C --> E[Check Storybook + repo for existing components]
    D --> E

    E --> F{Component exists?}
    F -->|Yes| G[Reuse as-is or extend with variant/props]
    F -->|No| H[Build new component in correct atomic folder + Storybook entry]

    G --> I[Assemble page using existing components]
    H --> I

    I --> J[Run local QA: lint, css-lint, build, Playwright, Storybook, Lighthouse]
    J --> K[Push branch & open PR to develop]
    K --> L[CI runs: token checks, visual diffs, a11y, performance]

    L --> M{CI Passes?}
    M -->|No| N[Fix issues, re-run QA, push updates]
    M -->|Yes| O[Merge PR to develop]

    O --> P[Rebase all other branches from develop]
    P --> Q[Continue parallel work without duplication]
````

---

## **2️⃣ Component Reuse Decision Tree**

```mermaid
flowchart TD
    A[Need a UI element from WordPress page] --> B[Search Storybook + components/<br>(by role, not name)]
    B --> C{Exact match found?}
    C -->|Yes| D[Use existing component<br>✅ Done]
    C -->|No| E{Close match found?}
    E -->|Yes| F[Extend existing component<br>via variant/props<br>Update Storybook]
    E -->|No| G[Create new component in correct atomic folder<br>+ Storybook story<br>+ Tokens only]
    D --> H[Assemble page using only components]
    F --> H
    G --> H
    H --> I[Run CI checks<br>(lint, visual, a11y, perf)]
    I --> J[PR review with visual diffs]
```

---

## **Key Rules**

* **One feature per branch** — never mix unrelated pages/components.
* Always **check Storybook** before building anything new.
* Use **design tokens only** — no hardcoded values.
* Every component needs a **Storybook story** with all props/variants.
* **CI must pass** before merge (lint, visual diffs, accessibility, performance).
* After each merge → **rebase other branches** from `develop` to get the latest components.

---

✅ **Follow these flows and you can run multiple agents in parallel without duplication or broken merges.**

```

---

This file would sit in the root of your repo so agents see it immediately.  
If you want, I can **also add it into your current Astro migration repo zip** so it’s ready to go.  

Do you want me to embed this into the repo now?
```
