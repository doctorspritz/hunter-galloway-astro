# Reusable Components Development Strategy
## Component-First Approach for Hunter Galloway Migration

**Created**: January 8, 2025  
**Purpose**: Build reusable components first to accelerate page conversion  
**Impact**: 27 reusable components identified across 20 pages

---

## 🎯 Strategy Overview

Instead of converting pages sequentially, we'll build **reusable components first** and then assemble pages quickly. This approach will:

- **Accelerate Development**: Build once, use many times
- **Ensure Consistency**: Same component behavior across all pages
- **Reduce Bugs**: Test components in isolation first
- **Enable Parallel Work**: Multiple agents can work on different components

---

## 🧭 Parallel Task Board (self‑contained units)

Each task below is independently shippable. Use feature branches, add a demo to `src/pages/design-system.astro`, and open a PR.

- [ ] WhyChoose organism (+ item molecule)
  - Branch: `feat/why-choose`
  - Files: `src/components/molecules/WhyChooseItem/WhyChooseItem.astro`, `src/components/organisms/WhyChoose/WhyChoose.astro`
  - Variants: with stats, with icons
  - Tokens: text/surface/border/shadow only; no literals
  - Acceptance: renders 3–6 items, hover effects, responsive, a11y labels

- [ ] HeroWidget (flexible hero refactor)
  - Branch: `feat/hero-widget`
  - Files: `src/components/organisms/HeroWidget/HeroWidget.astro`; migrate usages from `HeroSection.astro`
  - Variants: professional/general/calculator; left/right media
  - Acceptance: tokenized colors/shadows; responsive; keyboard focus for CTAs

- [ ] RiskWidget variants
  - Branch: `feat/risk-widget-variants`
  - Files: `src/components/organisms/RiskWidget/RiskWidget.astro`
  - Variants: general/professional/refinance via props
  - Acceptance: no hard-coded colors; demo data examples in design system

- [ ] ReputationWidget (awards + rating + review snippets)
  - Branch: `feat/reputation-widget`
  - Files: `src/components/organisms/ReputationWidget/ReputationWidget.astro` (reuse `Awards.astro`, `ReviewCard`)
  - Acceptance: displays aggregate rating, n reviews, awards strip; mobile layout

- [ ] AccordionWidget (+ AccordionItem)
  - Branch: `feat/accordion-widget`
  - Files: `src/components/molecules/AccordionItem/AccordionItem.astro`, `src/components/organisms/AccordionWidget/AccordionWidget.astro`
  - Acceptance: keyboard accessible (Enter/Space toggle, Arrow nav), ARIA attributes, smooth animation via tokens

- [ ] DarkSection layout (dark_holder_widget)
  - Branch: `feat/dark-section`
  - Files: `src/components/layouts/DarkSection.astro`
  - Props: title/descr/slots; handles contrast tokens and link colors
  - Acceptance: passes contrast checks; no literals

- [ ] ContentWidget + TextWidget (widget/text_widget)
  - Branch: `feat/content-text-widgets`
  - Files: `src/components/organisms/ContentWidget/ContentWidget.astro`, `src/components/molecules/TextWidget/TextWidget.astro`
  - Acceptance: spacing tokens, optional header/footer slots, responsive grid

- [ ] Button extensions (dark_btn_widget + img_btn_widget)
  - Branch: `feat/button-variants`
  - Files: extend `src/components/atoms/Button/Button.astro`; add `src/components/molecules/ImageButton/ImageButton.astro`
  - Acceptance: dark variant, image-backed button, focus/hover states via tokens

- [ ] Reviews enhancements (grid/slider variants)
  - Branch: `feat/reviews-enhancements`
  - Files: `src/components/organisms/Reviews.astro`
  - Acceptance: switchable layout prop; a11y for slider controls; tokenized

- [ ] Token housekeeping
  - Branch: `chore/tokens-housekeeping`
  - Files: `src/tokens/{primitive.ts,semantic.ts,component.ts}`
  - Acceptance: add missing primitives/semantic mappings; remove literals found in scans

Notes
- Add a demo block for each component in `src/pages/design-system.astro`.
- Follow `instructions.md` (SOP) and `docs/CONTRIBUTING.md` for branching, commits, and PR checks.

---

## 📊 Component Reuse Analysis

### Highest Impact Components (Used by 7+ Pages):

| Component | Pages | Priority | Description |
|-----------|-------|----------|-------------|
| **hero_widget** | 7 pages | 🔴 Critical | Page hero sections with different layouts |
| **widget** | 7 pages | 🔴 Critical | General content widgets |
| **why_choose** | 7 pages | 🔴 Critical | "Why Choose Us" sections |
| **why_choose_widget** | 7 pages | 🔴 Critical | Interactive why choose components |
| **risk_widget** | 7 pages | 🔴 Critical | Risk/benefit explanation widgets |
| **reputation_widget** | 7 pages | 🔴 Critical | Trust indicators and social proof |
| **dark_holder_widget** | 7 pages | 🔴 Critical | Dark background content sections |
| **accordion_widget** | 7 pages | 🔴 Critical | FAQ/expandable content sections |
| **lenders_widget** | 7 pages | 🔴 Critical | Bank/lender logo displays |
| **text_widget** | 7 pages | 🔴 Critical | General text content blocks |

### High Impact Components (Used by 4-6 Pages):

| Component | Pages | Priority | Description |
|-----------|-------|----------|-------------|
| **dark_btn_widget** | 6 pages | 🟡 High | Dark-styled call-to-action buttons |
| **reviews_widget** | 6 pages | 🟡 High | Customer review/testimonial sections |
| **img_btn_widget** | 6 pages | 🟡 High | Image-based call-to-action buttons |
| **why_do_widget** | 5 pages | 🟡 High | Service explanation widgets |
| **how_much_widget** | 4 pages | 🟡 High | Calculator/pricing widgets |

### Medium Impact Components (Used by 2-3 Pages):

- **box_list** (3 pages) - List displays with boxes
- **refinance_risk_widget** (3 pages) - Refinancing risk explanations
- **doctors_how_much_widget** (2 pages) - Professional-specific pricing
- **mobile_text_from_hero** (2 pages) - Mobile-optimized hero text
- Plus 8 more components used by 2 pages each

---

## 🏗️ Development Priority Matrix

### Phase 1: Foundation Components (Week 1-2)
**Build These First - Used by 7+ Pages Each**

1. **🔴 CRITICAL: hero_widget** 
   - **Impact**: 7 pages
   - **WordPress Location**: Found in all professional landing pages
   - **Astro Implementation**: Create flexible HeroWidget component
   - **Variants**: Professional (doctors/nurses), general, calculator-focused
   - **Estimated Time**: 8 hours

2. **🔴 CRITICAL: why_choose & why_choose_widget**
   - **Impact**: 7 pages each (14 total uses)
   - **WordPress Location**: Core trust-building sections
   - **Astro Implementation**: WhyChooseSection with interactive elements
   - **Features**: Statistics, benefits, hover effects
   - **Estimated Time**: 12 hours

3. **🔴 CRITICAL: risk_widget**
   - **Impact**: 7 pages
   - **WordPress Location**: Risk explanation sections
   - **Astro Implementation**: RiskWidget with icons and explanations
   - **Variants**: General risks, professional risks, refinance risks
   - **Estimated Time**: 10 hours

4. **🔴 CRITICAL: reputation_widget**
   - **Impact**: 7 pages
   - **WordPress Location**: Social proof and trust indicators
   - **Astro Implementation**: ReputationWidget with awards, ratings, reviews
   - **Features**: Award badges, star ratings, testimonial snippets
   - **Estimated Time**: 8 hours

5. **🔴 CRITICAL: accordion_widget**
   - **Impact**: 7 pages
   - **WordPress Location**: FAQ and expandable content sections
   - **Astro Implementation**: AccordionWidget with smooth animations
   - **Features**: Collapsible sections, icons, search functionality
   - **Estimated Time**: 6 hours

### Phase 2: Content Components (Week 2-3)
**High-Usage Content and Layout Components**

6. **🔴 CRITICAL: lenders_widget**
   - **Impact**: 7 pages
   - **WordPress Location**: Bank logo sections
   - **Astro Implementation**: LendersGrid (already exists as BankLogos)
   - **Status**: ✅ Already built
   - **Estimated Time**: 0 hours

7. **🔴 CRITICAL: dark_holder_widget**
   - **Impact**: 7 pages
   - **WordPress Location**: Dark background sections
   - **Astro Implementation**: DarkSection layout component
   - **Features**: Dark backgrounds, contrasting text, CTA buttons
   - **Estimated Time**: 4 hours

8. **🔴 CRITICAL: widget & text_widget**
   - **Impact**: 7 pages each (14 total uses)
   - **WordPress Location**: General content containers
   - **Astro Implementation**: ContentWidget and TextWidget
   - **Features**: Flexible content containers, typography variants
   - **Estimated Time**: 6 hours

9. **🟡 HIGH: reviews_widget**
   - **Impact**: 6 pages
   - **WordPress Location**: Customer testimonials
   - **Astro Implementation**: ReviewsSection (partially exists)
   - **Features**: Customer photos, ratings, testimonial cards
   - **Estimated Time**: 4 hours

10. **🟡 HIGH: img_btn_widget & dark_btn_widget**
    - **Impact**: 6 pages each (12 total uses)
    - **WordPress Location**: Various CTA sections
    - **Astro Implementation**: Enhanced Button component variants
    - **Features**: Image backgrounds, dark themes, hover effects
    - **Estimated Time**: 6 hours

### Phase 3: Specialized Components (Week 3-4)
**Medium-Impact but Important Specialized Components**

11. **🟡 HIGH: why_do_widget**
    - **Impact**: 5 pages
    - **Astro Implementation**: ServiceExplanationWidget
    - **Estimated Time**: 6 hours

12. **🟡 HIGH: how_much_widget**
    - **Impact**: 4 pages
    - **Astro Implementation**: PricingWidget with calculator elements
    - **Estimated Time**: 8 hours

13. **🟢 MEDIUM: box_list**
    - **Impact**: 3 pages
    - **Astro Implementation**: BoxList component
    - **Estimated Time**: 4 hours

---

## ✅ Already Built Components

These components from our analysis are already implemented in Astro:

- ✅ **lenders_widget** → `BankLogos.astro` (sections)
- ✅ **reviews_widget** → `Reviews.astro` (sections) 
- ✅ **reputation_widget** → Partially covered by `Awards.astro`
- ✅ Basic buttons → `Button.astro` (atoms)
- ✅ Hero structure → `HeroSection.astro` (sections)

---

## 🎯 Component-First Conversion Strategy

### New Development Approach:

1. **Week 1-2**: Build Foundation Components (Phase 1)
   - Focus on the 10 critical components used by 7+ pages
   - Total estimated time: ~60 hours
   - **Result**: Can quickly assemble 7 pages using these components

2. **Week 3**: Build High-Impact Components (Phase 2)  
   - Build specialized components for professional pages
   - Total estimated time: ~25 hours
   - **Result**: Can complete all professional landing pages

3. **Week 4**: Build Medium-Impact Components (Phase 3)
   - Complete remaining reusable components
   - Total estimated time: ~20 hours
   - **Result**: Can complete most remaining pages

4. **Week 5+**: Page Assembly Phase
   - Rapidly assemble pages using pre-built components
   - Focus on content integration and page-specific styling
   - **Result**: Fast completion of remaining 15+ pages

---

## 📋 Component Development Workflow

### For Each Component (must follow SOP):

1. **Analyze WordPress Implementation**:
   ```bash
   # Find all CSS related to component
   grep -r "hero_widget" WP-FILES/assets/css/
   
   # Check PHP templates
   grep -r "hero_widget" WP-FILES/*.php
   ```

2. **Create Astro Component**:
   - Location: `src/components/molecules/` or `src/components/sections/`
   - Props interface with TypeScript
   - CSS module or styled-components
   - Responsive design
    - Reuse decision: organism → molecule → atom per `instructions.md`

3. **Test in Isolation**:
   - Create component story for Storybook
   - Test different variants and props
   - Verify responsive behavior

4. **Update Progress**:
   ```bash
   # Mark component as built
   python manage_conversion.py add-component [page-name] [ComponentName] built
   ```

---

## 🚀 Expected Impact

### Timeline Acceleration:
- **Traditional Approach**: 12 weeks (page by page)
- **Component-First Approach**: 8-9 weeks
- **Time Saved**: 3-4 weeks (25-30% faster)

### Quality Benefits:
- **Consistency**: Same component across all pages
- **Testing**: Components tested in isolation first
- **Maintenance**: Changes propagate to all pages automatically
- **Performance**: Optimized components used everywhere

### Team Efficiency:
- **Parallel Development**: Multiple agents can work on different components
- **Clear Dependencies**: Components built before pages that need them
- **Reduced Conflicts**: Component library prevents duplicate work

---

## 📊 Success Metrics

### Component Coverage:
- **Target**: 27 reusable components built
- **Current**: 8 components exist (partial coverage)
- **Remaining**: 19 new components needed

### Page Acceleration:
- **Phase 1 Complete**: Can rapidly build 7 pages
- **Phase 2 Complete**: Can rapidly build 12+ pages  
- **Phase 3 Complete**: Can rapidly build 20 pages

### Development Speed:
- **Component Phase**: 3-4 weeks intensive component building
- **Assembly Phase**: 1-2 weeks rapid page assembly
- **Polish Phase**: 2-3 weeks final refinements

---

See also: `instructions.md` (Atomic Reuse SOP), `project_config.md` (context), `workflow_state.md` (active plan and logs).

**This component-first strategy will dramatically accelerate the WordPress to Astro migration while ensuring consistency and quality across all pages.**