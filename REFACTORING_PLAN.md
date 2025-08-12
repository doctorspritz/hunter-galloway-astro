# Hunter Galloway Design System Refactoring Plan

## Executive Summary
This plan addresses critical technical debt and design system inconsistencies identified in the code review. The refactoring will be executed in 5 phases over an estimated 8-10 weeks, focusing on token standardization, component optimization, and performance improvements.

## 🎯 Goals & Success Metrics

### Primary Goals
1. **Eliminate all hardcoded values** - 100% token coverage
2. **Remove all `!important` declarations** - 0 instances remaining
3. **Standardize component architecture** - Full atomic design compliance
4. **Optimize performance** - 30% CSS bundle size reduction
5. **Establish maintainable patterns** - Documented and enforced via CI

### Success Metrics
- ✅ All CI checks passing (token validation, component registry, atomic boundaries)
- ✅ 0 hardcoded color/size values in components
- ✅ 100% TypeScript coverage for component props
- ✅ CSS bundle < 50KB (gzipped)
- ✅ Lighthouse performance score > 90

---

## 📋 Phase 1: Token System Standardization (Week 1-2)

### Objective
Establish a robust, consistent token system as the foundation for all styling.

### Tasks

#### 1.1 Token Architecture Cleanup
```
Priority: CRITICAL
Effort: 8 hours
Owner: Design System Lead
```

**Actions:**
1. **Consolidate token files** into clear tier structure:
   ```
   src/tokens/
   ├── primitive.ts      # Raw values only
   ├── semantic.ts       # References primitives only
   ├── component.ts      # References semantic only
   └── wordpress.ts      # WordPress-specific overrides
   ```

2. **Create WordPress-specific token category**:
   ```typescript
   export const wordpress = {
     shadows: {
       button: {
         default: '0px 6px 12px rgba(43, 43, 43, 0.15)',
         hover: '0px 8px 16px rgba(43, 43, 43, 0.2)'
       },
       card: '0 4px 20px rgba(0, 0, 0, 0.1)',
       tooltip: '0 4px 12px rgba(0, 0, 0, 0.15)'
     },
     measurements: {
       buttonRadius: '33px',
       cardMaxWidth: '250px',
       dropdownWidth: '735px'
     },
     legacy: {
       colors: {
         footerNav: '#333333',
         footerBottom: '#1a1a1a'
       }
     }
   };
   ```

3. **Standardize naming conventions**:
   - TypeScript: `camelCase` (e.g., `primaryColor`)
   - CSS Variables: `kebab-case` with prefix (e.g., `--hg-primary-color`)
   - Remove all mixed conventions

#### 1.2 Global CSS Variable Implementation
```
Priority: HIGH
Effort: 6 hours
Owner: Frontend Developer
```

**Actions:**
1. **Create master token stylesheet** (`src/styles/tokens.css`):
   ```css
   :root {
     /* Primitive tier */
     --hg-yellow-400: #FDB948;
     --hg-gray-800: #1f2937;
     
     /* Semantic tier */
     --hg-color-primary: var(--hg-yellow-400);
     --hg-text-primary: var(--hg-gray-800);
     
     /* Component tier */
     --hg-button-bg-primary: var(--hg-color-primary);
   }
   ```

2. **Remove `TokenStyles.astro`** and replace with pure CSS
3. **Update Layout.astro** to import tokens.css globally

#### 1.3 Token Documentation
```
Priority: MEDIUM
Effort: 4 hours
Owner: Documentation Lead
```

**Actions:**
1. Create `docs/DESIGN_TOKENS.md` with:
   - Token tier architecture diagram
   - Naming convention guide
   - Usage examples
   - Migration guide from old tokens

**Deliverables:**
- [ ] Consolidated token structure
- [ ] WordPress-specific tokens defined
- [ ] Global CSS variables implemented
- [ ] Token documentation complete
- [ ] CI validation passing for new structure

---

## 📋 Phase 2: Critical Component Fixes (Week 3-4)

### Objective
Fix the most problematic components that violate design system principles.

### Tasks

#### 2.1 Typography Component Refactor
```
Priority: CRITICAL
Effort: 6 hours
Owner: Component Developer
Files: src/components/atoms/Typography/
```

**Actions:**
1. **Remove ALL `!important` declarations** (51 instances)
2. **Implement proper CSS specificity**:
   ```css
   /* OLD - Bad */
   .hg-typography.hg-typography {
     margin: 0 !important;
   }
   
   /* NEW - Good */
   .hg-typography {
     margin: var(--hg-space-0, 0);
   }
   
   /* Use data attributes for variants */
   .hg-typography[data-variant="heading"] {
     font-weight: var(--hg-font-weight-heading);
   }
   ```

3. **Add TypeScript prop validation**:
   ```typescript
   interface TypographyProps {
     variant: 'body' | 'heading' | 'caption';
     size?: 'xs' | 'sm' | 'md' | 'lg' | 'xl';
     weight?: 'normal' | 'medium' | 'bold';
     as?: 'p' | 'span' | 'div' | 'h1' | 'h2' | 'h3' | 'h4' | 'h5' | 'h6';
   }
   ```

#### 2.2 Button Component Token Migration
```
Priority: HIGH
Effort: 4 hours
Owner: Component Developer
Files: src/components/atoms/Button/
```

**Actions:**
1. **Replace hardcoded values** with tokens:
   ```css
   /* OLD */
   box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
   border-radius: 33px;
   
   /* NEW */
   box-shadow: var(--hg-shadow-button-default);
   border-radius: var(--hg-radius-button);
   ```

2. **Standardize size variants** using tokens:
   ```css
   [data-size="sm"] { padding: var(--hg-button-padding-sm); }
   [data-size="md"] { padding: var(--hg-button-padding-md); }
   [data-size="lg"] { padding: var(--hg-button-padding-lg); }
   ```

#### 2.3 Consolidate Duplicate Components
```
Priority: HIGH
Effort: 8 hours
Owner: Architecture Lead
```

**Actions:**
1. **Merge RiskWidget duplicates**:
   - Keep `organisms/RiskWidget/` version
   - Delete `sections/RiskWidget/`
   - Update all imports
   - Merge any unique features

2. **Audit for other duplicates** using similarity check
3. **Update component registry** (`docs/COMPONENTS.md`)

**Deliverables:**
- [ ] Typography component refactored (0 !important)
- [ ] Button component using 100% tokens
- [ ] RiskWidget consolidated
- [ ] Component registry updated

---

## 📋 Phase 3: Component-wide Token Migration (Week 5-6)

### Objective
Systematically migrate all components to use design tokens exclusively.

### Tasks

#### 3.1 Batch Component Migration
```
Priority: HIGH
Effort: 20 hours
Owner: Development Team
```

**Migration Order** (by dependency):
1. **Atoms** (Day 1-2):
   - [x] StatCard (already complete)
   - [ ] Badge
   - [ ] Icon
   - [ ] Input
   - [ ] Slider
   - [ ] Container
   - [ ] Logo

2. **Molecules** (Day 3-4):
   - [ ] PurposeCard - Remove `rgba(253, 185, 72, 0.5)`
   - [ ] ReviewCard
   - [ ] NavDropdown
   - [ ] FooterNavigation
   - [ ] PhoneLink
   - [ ] CalculatorResult
   - [ ] SocialLinks

3. **Organisms** (Day 5-6):
   - [ ] HeroWidget
   - [ ] Footer
   - [ ] Header
   - [ ] Awards
   - [ ] BankLogos
   - [ ] Reviews

**Migration Checklist per Component:**
```markdown
- [ ] Replace all hex colors with tokens
- [ ] Replace all px values with tokens
- [ ] Replace all rgba() with tokens
- [ ] Remove all !important declarations
- [ ] Add TypeScript interface
- [ ] Update component stories
- [ ] Run visual regression test
- [ ] Update COMPONENTS.md entry
```

#### 3.2 Create Migration Script
```
Priority: MEDIUM
Effort: 6 hours
Owner: Tooling Developer
```

**Create `scripts/migrate-tokens.mjs`**:
```javascript
// Automated token migration helper
const migrations = [
  { from: '#FDB948', to: 'var(--hg-color-primary)' },
  { from: '#262626', to: 'var(--hg-color-text-primary)' },
  { from: 'rgba(253, 185, 72, 0.5)', to: 'var(--hg-color-primary-alpha-50)' },
  // ... more mappings
];

// Run on component files to suggest replacements
```

**Deliverables:**
- [ ] All atoms migrated to tokens
- [ ] All molecules migrated to tokens
- [ ] All organisms migrated to tokens
- [ ] Migration script created
- [ ] 0 hardcoded values in components

---

## 📋 Phase 4: Performance Optimization (Week 7)

### Objective
Optimize CSS bundle size and runtime performance.

### Tasks

#### 4.1 Replace `define:vars` Pattern
```
Priority: HIGH
Effort: 10 hours
Owner: Performance Engineer
```

**Actions:**
1. **Audit all 37 components** using `define:vars`
2. **Replace with direct CSS variable usage**:
   ```astro
   <!-- OLD -->
   <style define:vars={{ color: semantic.color.primary }}>
     .button { background: var(--color); }
   </style>
   
   <!-- NEW -->
   <style>
     .button { background: var(--hg-color-primary); }
   </style>
   ```

3. **Measure performance impact** (target: 20% faster build)

#### 4.2 CSS Optimization Pipeline
```
Priority: MEDIUM
Effort: 8 hours
Owner: DevOps Engineer
```

**Actions:**
1. **Implement CSS purging** in build process:
   ```javascript
   // astro.config.mjs
   export default {
     vite: {
       css: {
         postcss: {
           plugins: [
             purgecss({
               content: ['./src/**/*.{astro,tsx}'],
               safelist: [/^hg-/] // Keep design system classes
             })
           ]
         }
       }
     }
   };
   ```

2. **Add CSS minification** and compression
3. **Implement critical CSS extraction** for above-fold content
4. **Add vendor prefixing** via PostCSS

#### 4.3 Bundle Analysis
```
Priority: LOW
Effort: 4 hours
Owner: Performance Engineer
```

**Actions:**
1. **Add bundle analyzer** to build process
2. **Create performance budget**:
   - CSS: < 50KB gzipped
   - JS: < 100KB gzipped
   - Total: < 200KB gzipped
3. **Set up monitoring** for regression detection

**Deliverables:**
- [ ] define:vars pattern eliminated
- [ ] CSS purging implemented
- [ ] Bundle size reduced by 30%
- [ ] Performance budget established

---

## 📋 Phase 5: Quality Assurance & Documentation (Week 8)

### Objective
Ensure long-term maintainability and prevent regression.

### Tasks

#### 5.1 Enhanced CI Validation
```
Priority: HIGH
Effort: 6 hours
Owner: DevOps Lead
```

**Actions:**
1. **Enhance token validation script**:
   ```javascript
   // scripts/check-token-coverage.mjs
   // Ensure 100% token usage in components
   // Flag any hardcoded values
   // Validate token tier compliance
   ```

2. **Add visual regression testing**:
   - Set up Percy or Chromatic
   - Capture baseline screenshots
   - Run on every PR

3. **Add performance checks**:
   - Bundle size limits
   - Lighthouse CI integration
   - Build time monitoring

#### 5.2 Documentation Updates
```
Priority: MEDIUM
Effort: 8 hours
Owner: Documentation Team
```

**Create/Update:**
1. **`docs/REFACTORING_GUIDE.md`** - How we refactored
2. **`docs/DESIGN_SYSTEM_PRINCIPLES.md`** - Core principles
3. **`docs/COMPONENT_GUIDELINES.md`** - How to build components
4. **`docs/TOKEN_USAGE.md`** - Token best practices
5. **Update `CONTRIBUTING.md`** with new standards

#### 5.3 Team Training
```
Priority: MEDIUM
Effort: 4 hours
Owner: Tech Lead
```

**Actions:**
1. **Conduct design system workshop** for developers
2. **Create token usage cheatsheet**
3. **Record video walkthrough** of new patterns
4. **Set up regular design system reviews**

**Deliverables:**
- [ ] Enhanced CI validation active
- [ ] Visual regression testing configured
- [ ] Complete documentation suite
- [ ] Team trained on new patterns

---

## 📊 Timeline & Milestones

| Phase | Duration | Start Date | End Date | Key Milestone |
|-------|----------|------------|----------|---------------|
| **Phase 1** | 2 weeks | Week 1 | Week 2 | Token system standardized |
| **Phase 2** | 2 weeks | Week 3 | Week 4 | Critical components fixed |
| **Phase 3** | 2 weeks | Week 5 | Week 6 | All components migrated |
| **Phase 4** | 1 week | Week 7 | Week 7 | Performance optimized |
| **Phase 5** | 1 week | Week 8 | Week 8 | QA & documentation complete |

## 🚀 Quick Wins (Can Start Immediately)

1. **Remove `!important` from Typography** - 2 hours
2. **Create WordPress token file** - 2 hours
3. **Fix Button hardcoded values** - 1 hour
4. **Consolidate RiskWidget** - 2 hours
5. **Set up bundle analyzer** - 1 hour

## ⚠️ Risk Mitigation

| Risk | Probability | Impact | Mitigation |
|------|-------------|--------|------------|
| Visual regression | High | High | Implement visual testing early |
| Breaking changes | Medium | High | Incremental migration with feature flags |
| Performance degradation | Low | Medium | Monitor metrics at each phase |
| Team resistance | Low | Low | Early training and documentation |

## 📈 Success Criteria

### Phase 1 Complete When:
- [ ] All tokens consolidated into 4 files
- [ ] WordPress tokens defined
- [ ] Global CSS variables working

### Phase 2 Complete When:
- [ ] 0 `!important` declarations
- [ ] No duplicate components
- [ ] Critical components migrated

### Phase 3 Complete When:
- [ ] 100% token coverage
- [ ] All components TypeScript-enabled
- [ ] CI validation passing

### Phase 4 Complete When:
- [ ] Bundle size < 50KB
- [ ] Build time < 10 seconds
- [ ] Lighthouse score > 90

### Phase 5 Complete When:
- [ ] Full documentation suite
- [ ] Visual regression testing active
- [ ] Team trained and confident

## 🎯 Expected Outcomes

### Immediate Benefits (Week 1-4)
- Cleaner, more maintainable code
- Easier styling updates
- Reduced CSS conflicts

### Medium-term Benefits (Week 5-8)
- 30% faster page loads
- 50% faster development velocity
- Reduced bug reports

### Long-term Benefits (3+ months)
- Scalable design system
- Consistent user experience
- Lower maintenance costs
- Faster feature delivery

---

## 📝 Notes

- Each phase has designated code owners for accountability
- Weekly progress reviews recommended
- Consider feature flags for gradual rollout
- Maintain backwards compatibility during migration
- Document all breaking changes

## 🤝 Team Assignments

| Role | Responsibilities | Time Commitment |
|------|------------------|-----------------|
| **Design System Lead** | Token architecture, standards | 50% for 8 weeks |
| **Frontend Developers** | Component migration | 100% for 6 weeks |
| **Performance Engineer** | Optimization, monitoring | 50% for 2 weeks |
| **DevOps Engineer** | CI/CD, build pipeline | 25% for 8 weeks |
| **Documentation Lead** | Guides, training materials | 25% for 8 weeks |

---

*This refactoring plan represents a systematic approach to eliminating technical debt while establishing sustainable design system practices. Regular review and adjustment of the plan is recommended based on progress and discoveries during implementation.*