# WordPress to Astro Refactoring Workflow

## **MANDATORY PROCESS - NO EXCEPTIONS**

This document defines the required workflow for refactoring the WordPress Hunter Galloway site to Astro while maintaining **exact visual parity** and **atomic design principles**.

---

## **Core Principles**

1. **Pixel-Perfect Matching**: Every section must visually match WordPress exactly
2. **Atomic Design Mandatory**: All components must follow Atoms → Molecules → Organisms
3. **Design System Only**: No hardcoded CSS values - tokens only
4. **Component First**: Build components before pages
5. **QA Gates**: Cannot proceed without passing quality checks

---

## **Phase 1: Analysis & Setup**

### **1.1 WordPress Audit**
- [ ] Extract complete WordPress CSS (`style.css`, theme files)
- [ ] Take screenshots of all pages/sections for visual reference
- [ ] Document all interactive elements and their behavior
- [ ] Map out component hierarchy from WordPress HTML structure
- [ ] Identify all colors, typography, spacing values

### **1.2 Design System Foundation**
- [ ] Create `primitive.ts` with raw values extracted from WordPress
- [ ] Build `semantic.ts` with role-based tokens
- [ ] Set up `component.ts` for context-specific tokens
- [ ] Validate all tokens against WordPress CSS

**✅ Phase 1 Complete When:**
- All WordPress styles documented
- Design system tokens created and validated
- Visual reference screenshots captured

---

## **Phase 2: Atomic Component Library (Bottom-Up)**

> **RULE**: No pages can be built until component library is complete

### **2.1 Atoms**
Extract smallest reusable elements from WordPress:

**Required Atoms:**
- [ ] Button (all variants from WordPress)
- [ ] Typography (headings, body text)
- [ ] Icon (all icons used)
- [ ] Container (layout wrapper)
- [ ] Input (form elements)
- [ ] Logo
- [ ] Badge

**Atom Creation Process:**
1. Identify atom from WordPress HTML/CSS
2. Create TypeScript interface
3. Build Astro component using only design tokens
4. Test in isolation
5. Document in design system page

**✅ QA Check for Each Atom:**
- [ ] Matches WordPress exactly in isolation
- [ ] Uses only semantic/primitive tokens
- [ ] Has proper TypeScript types
- [ ] Documented with examples

### **2.2 Molecules** 
Combine atoms into functional components:

**Required Molecules:**
- [ ] StatCard (general purpose)
- [ ] FooterStatCard (footer-specific styling)
- [ ] PurposeCard
- [ ] ContactForm
- [ ] ReviewCard
- [ ] BankLogo
- [ ] AwardBadge

**Molecule Creation Process:**
1. Compose existing atoms
2. Add molecule-specific styling via tokens
3. Create specialized variants if needed
4. Test with real content

**✅ QA Check for Each Molecule:**
- [ ] Side-by-side comparison with WordPress
- [ ] Composed only of existing atoms
- [ ] Uses design tokens exclusively
- [ ] Responsive behavior matches WordPress

### **2.3 Organisms**
Complex components using atoms + molecules:

**Required Organisms:**
- [ ] Header (navigation + logo + CTA)
- [ ] Footer (pre-footer + main footer + bottom)
- [ ] HeroSection
- [ ] Awards section
- [ ] Statistics section

**✅ QA Check for Each Organism:**
- [ ] Full section comparison with WordPress
- [ ] All breakpoints tested
- [ ] Interactive elements work correctly
- [ ] Performance acceptable

---

## **Phase 3: Page Assembly (Top-Down)**

### **3.1 Section-by-Section Build**

**Process for Each Section:**
1. **Pre-Work Analysis**
   ```bash
   # Extract WordPress section styles
   grep -A 20 -B 5 ".section-name" style.css
   # Take WordPress screenshot
   ```

2. **Component Check**
   - Do required atoms exist? If no → Go to Phase 2.1
   - Do required molecules exist? If no → Go to Phase 2.2
   - Is this section an organism? If yes → Go to Phase 2.3

3. **Build Section**
   ```astro
   ---
   // ONLY import existing components
   import Container from '../atoms/Container/Container.astro';
   import StatCard from '../molecules/StatCard/StatCard.astro';
   import { semantic } from '../../tokens/semantic';
   ---
   
   <section class="section-name">
     <Container>
       <!-- Build using components + tokens only -->
     </Container>
   </section>
   
   <style define:vars={{
     brandPrimary: semantic.color.brand.primary,
     // All styling via tokens
   }}>
   /* CSS using var() and tokens only */
   </style>
   ```

4. **Section QA Check**
   - [ ] Visual pixel-perfect match
   - [ ] Responsive behavior identical  
   - [ ] Hover states match WordPress
   - [ ] Typography exact (size, weight, line-height)
   - [ ] Spacing exact (margins, padding)
   - [ ] Colors exact (including transparency)
   - [ ] No hardcoded CSS values

---

## **Quality Gates - CANNOT PROCEED WITHOUT PASSING**

### **Gate 1: Component Library Complete**
- [ ] All required atoms built and tested
- [ ] All required molecules built and tested
- [ ] All required organisms built and tested
- [ ] Design system page updated with examples
- [ ] All components use design tokens exclusively
- [ ] Visual regression tests passing

**❌ BLOCKER**: No pages can be built until Gate 1 passes

### **Gate 2: Section Complete** 
- [ ] Visual pixel-perfect match confirmed
- [ ] All responsive breakpoints work (320px, 768px, 1024px, 1272px+)
- [ ] Only design system tokens used (no hardcoded values)
- [ ] Components properly composed (atomic design)
- [ ] Performance impact acceptable
- [ ] No console errors or warnings

### **Gate 3: Page Complete**
- [ ] Full page visual match with WordPress
- [ ] Cross-browser testing complete (Chrome, Firefox, Safari)
- [ ] Performance metrics acceptable
- [ ] Accessibility audit passed
- [ ] Interactive functionality identical to WordPress

---

## **Error Prevention Rules**

### **CSS Syntax Validation**
```bash
# REQUIRED: Run before every commit
npm run lint:css
npm run build # Must pass without errors
```

### **Forbidden Practices**
```css
/* ❌ NEVER DO THIS */
.footer { 
  background: #FDB948;  /* Hardcoded color */
  padding: 20px;        /* Hardcoded spacing */
  font-size: 16px;      /* Hardcoded typography */
}

/* ✅ ALWAYS DO THIS */
.footer {
  background: var(--brandPrimary);
  padding: var(--spaceXl);
  font-size: var(--fontSizeMd);
}
```

### **Required Practices**
```astro
<!-- ✅ ALWAYS: Use design tokens -->
<style define:vars={{
  brandPrimary: semantic.color.brand.primary,
  spaceXl: semantic.space.xl
}}>

<!-- ✅ ALWAYS: Compose components -->
<Container>
  <FooterStatCard number="97%" description="approval rate" />
</Container>

<!-- ✅ ALWAYS: Check component exists first -->
import StatCard from '../molecules/StatCard/StatCard.astro';
```

---

## **QA Checklist Template**

Copy this checklist for every section:

### **Section: [NAME]**
**Pre-Work:**
- [ ] WordPress CSS extracted and analyzed
- [ ] Screenshots taken for comparison
- [ ] Required components identified

**Component Check:**
- [ ] All required atoms exist
- [ ] All required molecules exist  
- [ ] All required organisms exist

**Build Phase:**
- [ ] Section built using only existing components
- [ ] All styling via design tokens
- [ ] Astro `define:vars` used correctly

**Visual QA:**
- [ ] Desktop (1272px+) matches WordPress exactly
- [ ] Tablet (768px-1024px) matches WordPress exactly
- [ ] Mobile (320px-767px) matches WordPress exactly
- [ ] Hover states identical
- [ ] Animation/transitions identical

**Technical QA:**
- [ ] No hardcoded CSS values
- [ ] No console errors
- [ ] Build passes without warnings
- [ ] Performance impact acceptable

**Sign-off:**
- [ ] Visual regression test passes
- [ ] Code review approved
- [ ] Ready for next section

---

## **Emergency Procedures**

### **If Components Don't Exist**
1. **STOP** building the section immediately
2. Go back to Phase 2 and create required components
3. Test components in isolation first
4. Return to section build only after components are complete

### **If WordPress Match Isn't Perfect**
1. **DO NOT** proceed to next section
2. Identify specific differences (use browser dev tools)
3. Check if tokens are missing/incorrect
4. Update design system tokens if needed
5. Rebuild components if necessary
6. Re-test until match is perfect

### **If Hardcoded Values Are Found**
1. **IMMEDIATELY** replace with design tokens
2. Update `semantic.ts` if token doesn't exist
3. Use Astro `define:vars` to inject token
4. Re-test visual match

---

## **Success Metrics**

### **Component Library Health**
- [ ] 100% of components use design tokens only
- [ ] 0 hardcoded CSS values in codebase
- [ ] All components documented with examples
- [ ] All components have TypeScript interfaces

### **Visual Fidelity**
- [ ] Pixel-perfect match on all breakpoints
- [ ] Identical hover/interaction states  
- [ ] Matching performance characteristics
- [ ] Cross-browser consistency

### **Development Velocity**
- [ ] New sections built faster using existing components
- [ ] Design changes propagate automatically via tokens
- [ ] Zero regression bugs between sections
- [ ] Maintainable, scalable component architecture

---

**This workflow is mandatory. Any deviation must be approved and documented. Following this process prevents technical debt, reduces repeat work, and ensures pixel-perfect WordPress migration.**

**Last Updated:** January 2025  
**Next Review:** As needed based on lessons learned