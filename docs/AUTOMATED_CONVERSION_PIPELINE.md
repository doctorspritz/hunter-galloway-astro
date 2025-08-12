# Automated Conversion Pipeline

## Overview
This guide outlines the scripted pipeline that automates much of the WordPress → Astro migration.  The process is built to maintain pixel-perfect parity with WordPress and to enforce the atomic design hierarchy used throughout the project.

## Environment Setup
1. **Install prerequisites**
   - Node.js 18+
   - Python 3 for helper scripts
2. **Install dependencies**
   - `npm install`
3. **Create local environment file**
   - Copy `.env.example` to `.env`
   - Fill in the API keys listed below
4. **Verify atomic design & pixel-perfect requirements**
   - Review `docs/ATOMIC_DESIGN.md`
   - Review `docs/DEVELOPMENT_GUIDELINES.md`

## Required API Keys
The pipeline expects the following variables in `.env`:
- `STORYBLOK_TOKEN` – Storyblok preview access
- `PUBLIC_GOOGLE_ANALYTICS_ID` – client-side analytics ID
- `FORMSPREE_ENDPOINT` *or* `SENDGRID_API_KEY` plus `SENDGRID_FROM_EMAIL` / `SENDGRID_TO_EMAIL` – form submissions
- `CHROMATIC_PROJECT_TOKEN` – Chromatic visual regression tests

## Script Execution Order
Run the following commands in sequence when converting or updating pages:
1. **Generate WordPress page map**
   ```bash
   python generate_wp_page_map.py
   ```
2. **Review or update conversion status**
   ```bash
   python manage_conversion.py
   ```
3. **Scaffold new components**
   ```bash
   npm run new:component <atoms|molecules|organisms> <Name>
   ```
4. **Generate missing demo pages**
   ```bash
   node scripts/generate-all-demos.mjs
   ```
5. **Build and run token scan**
   ```bash
   npm run prepr
   ```
6. **Run structural checks**
   ```bash
   npm run check
   ```
7. **Execute Storybook visual tests (optional during development)**
   ```bash
   npm run test:storybook
   ```

Each step reinforces the project's non‑negotiable goals: pixel-perfect replication of the WordPress source and strict adherence to atomic design principles.
