# WordPress to Astro Page Conversion Roadmap
## Hunter Galloway Website Migration

**Generated**: January 8, 2025  
**Based on**: WordPress page mapping analysis  
**Total Pages**: 20 templates identified

---

## 🎯 Conversion Strategy

### Priority Matrix
Pages prioritized by **Business Impact × Complexity × Traffic**

| Priority | Criteria |
|----------|----------|
| **P0** | Critical business pages, existing components available |
| **P1** | High-traffic pages, moderate complexity |
| **P2** | Important pages, requires new components |
| **P3** | Low-traffic/legacy pages |

---

## 📋 Page Conversion Tracker

### P0 - CRITICAL (Convert First)
*These pages are essential and have components ready*

- [ ] **Homepage** (already 90% complete) ✅ 
  - Status: Nearly complete, needs final polish
  - Components: All exist
  - Complexity: ✅ Low (components built)

---

### P1 - HIGH PRIORITY (Convert Next)

#### 1. Calculator Pages
- [ ] **Stamp Duty Calculator** (`post-stamp-duty-calculator-template`)
  - **PHP Files**: `post-stamp-duty-calculator.php`, `template-parts/calculators/calculate-stamp-duty.php`
  - **CSS Files**: None specific (uses global styles)
  - **Components Needed**: Calculator form, state selector, results display
  - **Complexity**: 🟡 Medium (calculator logic)
  - **Business Value**: 🔴 Critical (lead generation)
  - **Estimated Time**: 2-3 days

- [ ] **Deposit Calculator** (`deposit-calculator-template`)
  - **PHP Files**: `post-deposit-calculator.php`
  - **CSS Files**: None specific
  - **Components Needed**: Deposit calculation form, interactive slider
  - **Complexity**: 🟡 Medium
  - **Business Value**: 🟡 High (lead generation)
  - **Estimated Time**: 2-3 days

#### 2. Professional Landing Pages
- [ ] **Home Loans for Doctors** (`home-loans-for-doctors`)
  - **PHP Files**: `home-loans-for-doctors.php`, `home-loans-for-doctors-1.php`
  - **CSS Files**: Multiple page-specific styles
  - **Sections**: 20 sections (hero_widget, why_choose, risk_widget, etc.)
  - **Components Needed**: Professional hero, risk widgets, testimonials
  - **Complexity**: 🔴 High (many custom sections)
  - **Business Value**: 🔴 Critical (high-value leads)
  - **Estimated Time**: 4-5 days

- [ ] **Nurse Home Loan** (`nurse-home-loan`)
  - **PHP Files**: `nurse-home-loan.php`
  - **CSS Files**: Similar to doctors page
  - **Sections**: 18 sections
  - **Components Needed**: Professional hero variant, risk widgets
  - **Complexity**: 🟡 Medium (reuse doctor components)
  - **Business Value**: 🟡 High
  - **Estimated Time**: 2-3 days

---

### P2 - MEDIUM PRIORITY

#### 3. Blog & Content
- [ ] **Blog Template** (`blog-template`)
  - **PHP Files**: `blog.php`
  - **Components Needed**: Blog listing, pagination, filters
  - **Complexity**: 🟡 Medium
  - **Business Value**: 🟡 Medium (SEO)
  - **Estimated Time**: 2-3 days

- [ ] **Post Single** (`post-single`)
  - **PHP Files**: `post-single-1.php`, `post-single.php`
  - **Sections**: 24 sections (most complex)
  - **Components Needed**: Post layout, author bio, related posts
  - **Complexity**: 🔴 High (24 sections)
  - **Business Value**: 🟡 Medium
  - **Estimated Time**: 4-5 days

#### 4. Location & Service Pages
- [ ] **Suburb Mortgage Broker** (`suburb-mortgage-broker-page`)
  - **PHP Files**: `suburb-template.php`
  - **Sections**: 11 sections
  - **Components Needed**: Location hero, local testimonials
  - **Complexity**: 🟡 Medium
  - **Business Value**: 🟡 High (local SEO)
  - **Estimated Time**: 3-4 days

- [ ] **Map Page** (`map-page`)
  - **PHP Files**: `page-mappage.php`
  - **Sections**: 3 sections (map-wrapper, suburb-loan, container)
  - **Components Needed**: Interactive map, suburb selector
  - **Complexity**: 🟡 Medium (map integration)
  - **Business Value**: 🟡 Medium
  - **Estimated Time**: 2-3 days

#### 5. Refinance Pages
- [ ] **Refinance Home Loan** (`refinance-home-loan`)
  - **PHP Files**: `refinance-home-loan.php`
  - **Sections**: 18 sections
  - **Components Needed**: Refinance calculator, comparison tools
  - **Complexity**: 🟡 Medium
  - **Business Value**: 🟡 High
  - **Estimated Time**: 3-4 days

---

### P3 - LOW PRIORITY (Convert Later)

#### 6. Static Pages
- [ ] **Contact** (`contact`)
  - **PHP Files**: `page-contact.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

- [ ] **Our Team** (`our-team`)
  - **PHP Files**: `page-ourteam.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

- [ ] **What We Do** (`what-we-do`)
  - **PHP Files**: `page-whatwedo.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

- [ ] **Who We Help** (`who-we-help`)
  - **PHP Files**: `page-whowehelp.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

#### 7. Legacy/Special Purpose
- [ ] **COVID-19 A** (`сovid19-a`)
  - **PHP Files**: `covid19-a.php`
  - **Sections**: 24 sections
  - **Status**: Legacy content (may deprecate)
  - **Complexity**: 🔴 High
  - **Business Value**: 🟢 Low
  - **Estimated Time**: 4-5 days (if needed)

- [ ] **COVID-19 B** (`сovid19-b`)
  - **PHP Files**: `covid19-b.php`
  - **Sections**: 24 sections
  - **Status**: Legacy content (may deprecate)
  - **Complexity**: 🔴 High
  - **Business Value**: 🟢 Low
  - **Estimated Time**: 4-5 days (if needed)

#### 8. Forms & Assessment
- [ ] **Get Free Assessment** (`get-free-assessment-template`)
  - **PHP Files**: `get-free-assessment.php`
  - **Components Needed**: Multi-step form, validation
  - **Complexity**: 🟡 Medium
  - **Business Value**: 🔴 Critical
  - **Estimated Time**: 3-4 days

#### 9. Technical Templates
- [ ] **Post New Design** (`post-new-design`)
  - **PHP Files**: `single-crs.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

- [ ] **Custom Post** (`custom-post`)
  - **PHP Files**: `single-new.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

- [ ] **District Page** (`page-distric`)
  - **PHP Files**: `page-district.php`
  - **Complexity**: 🟢 Low
  - **Estimated Time**: 1-2 days

---

## 🛠️ Conversion Workflow Template

For each page conversion, follow this process:

### Phase 1: Analysis (1-2 hours)
- [ ] Read WordPress PHP template
- [ ] Identify all CSS dependencies
- [ ] Map sections to existing Astro components
- [ ] List missing components needed
- [ ] Create component requirements document

### Phase 2: Component Development (varies)
- [ ] Build missing atomic components first
- [ ] Create page-specific molecules if needed
- [ ] Test components in isolation
- [ ] Update design system documentation

### Phase 3: Page Assembly (4-8 hours)
- [ ] Create Astro page template
- [ ] Compose existing components
- [ ] Add page-specific styling
- [ ] Implement dynamic content areas
- [ ] Add SEO metadata

### Phase 4: Content Migration (2-4 hours)
- [ ] Extract content from WordPress
- [ ] Structure content for Astro
- [ ] Migrate images and assets
- [ ] Set up dynamic routing if needed

### Phase 5: QA & Testing (2-4 hours)
- [ ] Visual comparison with WordPress
- [ ] Test responsive behavior
- [ ] Validate forms and interactions
- [ ] Performance audit
- [ ] Cross-browser testing

---

## 📊 Estimated Timeline

### Sprint 1 (Week 1-2): Calculators & Core Pages
- Stamp Duty Calculator: 3 days
- Deposit Calculator: 3 days  
- Homepage Polish: 1 day
- **Total**: 7 days

### Sprint 2 (Week 3-4): Professional Landing Pages
- Home Loans for Doctors: 5 days
- Nurse Home Loan: 3 days
- **Total**: 8 days

### Sprint 3 (Week 5-6): Content & Blog
- Blog Template: 3 days
- Post Single: 5 days
- **Total**: 8 days

### Sprint 4 (Week 7-8): Location & Services
- Suburb Mortgage Broker: 4 days
- Map Page: 3 days
- Refinance Home Loan: 4 days
- **Total**: 11 days

### Sprint 5 (Week 9-10): Static Pages & Forms
- Static pages (4 pages): 6 days
- Get Free Assessment: 4 days
- **Total**: 10 days

### Sprint 6 (Week 11-12): Legacy & Final
- Technical templates: 4 days
- COVID pages (if needed): 8 days
- Final polish & testing: 4 days
- **Total**: 16 days

**Total Estimated Time**: 60 working days (12 weeks)

---

## 🎯 Success Metrics

### Per Page Completion Criteria
- [ ] Visual match confirmed (desktop + mobile)
- [ ] All interactive elements working
- [ ] Forms submitting correctly
- [ ] SEO metadata complete
- [ ] Performance benchmarks met
- [ ] Accessibility validated

### Project Success Metrics
- [ ] All P0-P2 pages converted (16 pages)
- [ ] Page load speed improved vs WordPress
- [ ] Conversion rates maintained or improved
- [ ] SEO rankings maintained
- [ ] Zero critical bugs in production

---

## 📋 Component Reuse Tracker

Track which components can be reused across pages:

### Existing Components (Ready to Use)
- ✅ Header/Footer
- ✅ Hero sections
- ✅ Awards section
- ✅ Statistics section
- ✅ Bank logos
- ✅ Reviews/testimonials
- ✅ Basic calculators

### Components Needed (Build Once, Use Many)
- [ ] **Professional Hero** (doctors, nurses)
- [ ] **Risk Widgets** (4 variants)
- [ ] **Why Choose Widgets** 
- [ ] **Reputation Widget**
- [ ] **Accordion Widget**
- [ ] **Form Widgets** (multi-step)
- [ ] **Blog Components** (listing, single)
- [ ] **Location Components** (map, suburb)

---

## 🔄 Next Actions

1. **This Week**: Focus on P0-P1 calculator pages
2. **Get Started**: Begin with Stamp Duty Calculator (highest business value)
3. **Parallel Work**: Build reusable risk widgets while converting pages
4. **Review Weekly**: Assess progress and adjust priorities

This roadmap provides a structured approach to systematically convert all 20 WordPress templates to Astro while maximizing component reuse and business value.