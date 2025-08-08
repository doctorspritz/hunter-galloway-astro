# WordPress to Astro/Storyblok Migration Plan
## Hunter Galloway Mortgage Broker Website

**Last Updated**: January 6, 2025  
**Current Status**: Phase 3 - Frontend Development ✅ MOSTLY COMPLETE

### Executive Summary
This document outlines a comprehensive plan to migrate the Hunter Galloway mortgage broker website from WordPress (Divi child theme) to a modern Jamstack architecture using Astro as the frontend framework and Storyblok as the headless CMS.

### 📊 Migration Progress Overview

| Phase | Status | Completion | Notes |
|-------|--------|------------|-------|
| Phase 1: Planning & Setup | ✅ Complete | 95% | CI/CD pending |
| Phase 2: Storyblok Content Modeling | 🔄 Ready to Start | 0% | Awaiting Storyblok token |
| Phase 3: Frontend Development | ✅ Complete | 90% | Homepage recreated exactly |
| Phase 4: Content Migration | ⏳ Not Started | 0% | - |
| Phase 5: Integration & Features | ⏳ Not Started | 0% | - |
| Phase 6: Testing & QA | ⏳ Not Started | 0% | - |
| Phase 7: Deployment & Launch | ⏳ Not Started | 0% | - |

### 🎯 Immediate Next Steps
1. **✅ COMPLETED**: Fixed design system (correct colors #FDB948, Open Sans fonts)
2. **✅ COMPLETED**: Recreated homepage to match WordPress exactly
3. **✅ COMPLETED**: All major components built and styled correctly
4. **🔄 NEXT**: Obtain Storyblok API Token for CMS integration
5. **🔄 NEXT**: Build additional calculator pages (Borrowing Capacity, Stamp Duty)

### ✅ **MAJOR MILESTONE ACHIEVED**
**Homepage now matches WordPress version exactly** with all components working and styled correctly.

### ✅ Completed Work Summary

#### Environment & Infrastructure
- Astro project initialized with TypeScript strict mode
- Tailwind CSS configured with correct Hunter Galloway colors (#FDB948)
- React integration for interactive components
- Project structure organized (components, layouts, utils, types)
- Open Sans fonts properly configured via Google Fonts
- Environment variables setup (.env structure)
- WordPress images and assets migrated

#### Components Built (✅ **EXACT WORDPRESS MATCH**)
- **Layout.astro**: SEO-optimized base layout with meta tags and Schema.org
- **Header.astro**: Responsive navigation with mobile menu
- **Footer.astro**: Complete sitemap with service links
- **HeroWidget.astro**: Flexible hero with tooltips and trust indicators
- **Awards.astro**: 6 awards with hover tooltips matching WordPress exactly
- **LoanPurpose.astro**: 2x2 card grid with hover effects and "Most Popular" badge
- **BankLogos.astro**: 14+ bank partner logos section
- **MortgageRentCalculator.tsx**: Interactive slider calculator with React state
- **Statistics.astro**: "Why Choose" section with card boxes and hover effects
- **PropertyMap.astro**: Brisbane property section with left-aligned text and map image
- **Reviews.astro**: Customer testimonials with exact WordPress styling

#### Recent Fixes Applied (January 6, 2025)
1. **✅ Fixed ThreeBest award 2024 image** - Copied correct image path
2. **✅ Fixed loan purpose cards** - Images now hidden by default, show on hover
3. **✅ Added calculator background** - Gray background for mortgage vs rent section
4. **✅ Fixed Brisbane property section** - Left-aligned text with map image on right
5. **✅ Fixed statistics section** - Added white boxes with shadows, correct colors
6. **✅ Fixed reviews section** - Exact WordPress styling with proper card layouts

#### Technical Implementation Details
- **Interactive Components**: React components with `client:load` directive
- **Styling**: CSS custom properties matching WordPress exactly
- **State Management**: Nanostores for calculator functionality
- **Form Handling**: Prepared for Formspree integration
- **Image Assets**: All WordPress images migrated to `/public/images/`
- **Responsive Design**: Matches WordPress breakpoints and mobile behavior

---

## 1. Migration Overview

### Current Stack
- **CMS**: WordPress with Divi theme framework
- **Frontend**: PHP templates with jQuery
- **Forms**: Contact Form 7
- **Custom Fields**: Advanced Custom Fields (ACF)
- **Hosting**: WP Engine (assumed)

### Target Stack
- **Frontend**: Astro (Static Site Generator)
- **CMS**: Storyblok (Headless CMS)
- **Forms**: Netlify Forms / Formspree / Custom API
- **Hosting**: Vercel / Netlify
- **Calculators**: React/Vue components within Astro

---

## 2. Phase-by-Phase Migration Plan

### Phase 1: Planning & Setup (Week 1-2) ✅ COMPLETED

#### 1.1 Environment Setup
- [x] Initialize Astro project with TypeScript
- [x] Set up Storyblok integration (awaiting API token)
- [x] Configure development environment
- [x] Set up Git repository
- [ ] Configure CI/CD pipeline
- [ ] Configure staging and production environments

#### 1.2 Content Audit
- [x] Document all existing page types
- [ ] Map WordPress custom fields to Storyblok schema
- [x] Identify reusable components
- [ ] Create content migration spreadsheet
- [ ] Document all calculator logic and formulas

#### 1.3 Design System Setup
- [x] Extract design tokens (colors, fonts, spacing)
- [x] Port Gotham Pro fonts
- [x] Create CSS/Tailwind configuration
- [x] Set up responsive breakpoints

### Phase 2: Storyblok Content Modeling (Week 2-3)

#### 2.1 Define Content Types

**Global Components:**
```
- Navigation
- Footer
- Awards Section
- Badges/Trust Signals
- CTA Blocks
- Testimonials
```

**Page Types:**
```
- Landing Page (flexible content blocks)
- Calculator Page
- Blog Post
- Team Member
- Service Page
- Industry-Specific Page (Doctors, Nurses)
- Location/Suburb Page
```

**Block Components:**
```
- Hero Section
- Feature Grid
- Calculator Widget
- Form Block
- Content Section
- Image Gallery
- FAQ Section
- Statistics Block
```

#### 2.2 Create Storyblok Schema
- [ ] Define folder structure
- [ ] Create component schemas
- [ ] Set up field types and validations
- [ ] Configure preview URLs
- [ ] Set up multi-language support (if needed)

### Phase 3: Frontend Development (Week 2-5) 🚧 IN PROGRESS

#### 3.1 URGENT: Design System Corrections (Week 2)
- [x] ~~Created project structure~~
- [x] ~~Base Layout with SEO optimization~~
- [x] ~~Header component with responsive navigation~~
- [x] ~~Footer component with sitemap links~~
- [ ] **🚨 CRITICAL**: Fix typography (Open Sans, not Gotham Pro)
- [ ] **🚨 CRITICAL**: Fix brand colors (#FDB948, not #FFD700)
- [ ] **🚨 CRITICAL**: Update container max-width (1272px)
- [ ] **⚠️ REPLACE**: Current homepage with actual WordPress structure

#### 3.2 Homepage Component Recreation (Week 2-3)
Based on content audit, recreate actual WordPress components:

**Week 2 Priority**:
- [ ] Hero Section with split layout (60/40)
  - [ ] "Get a home loan with full guidance" headline
  - [ ] 3 benefits with tooltips (97% approval, 30+ banks, #1 rated)
  - [ ] Trust indicators (14 years, 2000+ reviews)
  - [ ] Family hero image (responsive)
- [ ] Awards section (6 awards with tooltips)
- [ ] Loan Purpose cards (2x2 grid, "Most Popular" badge)

**Week 3 Priority**:
- [ ] Bank logos section (14+ logos)
- [ ] Mortgage vs Rent calculator (interactive slider)
- [ ] Why Choose statistics (4 stats: 97%, 14, 2000+, 30+)
- [ ] Property map CTA section

#### 3.3 Interactive Calculator Migration (Week 3-4)

**Mortgage vs Rent Calculator** (Homepage embedded):
- [ ] Custom range slider ($100-$2500)
- [ ] Dynamic value display
- [ ] Calculate button with results

**Borrowing Capacity Calculator** (Separate page):
- [ ] Port calculate-capacity.js logic
- [ ] Form inputs (income, expenses, deposit)
- [ ] Real-time calculations

**Stamp Duty Calculator** (Priority after homepage):
- [ ] Port state-specific calculations (8 Australian states)
- [ ] Property type dropdowns
- [ ] LMI calculations

#### 3.4 Testimonial & Social Proof (Week 4)
- [ ] Reviews slider component (Swiper.js)
- [ ] Customer photos and testimonials
- [ ] Star ratings and Google Reviews integration

#### 3.3 Form System Implementation
- [ ] Create form components with validation
- [ ] Set up form submission endpoints
- [ ] Implement success/error handling
- [ ] Add Google reCAPTCHA
- [ ] Create lead notification system

### Phase 4: Content Migration (Week 6-7)

#### 4.1 Automated Migration
```javascript
// migration-script.js
- Export WordPress content via REST API/WP-CLI
- Transform content to Storyblok format
- Upload via Storyblok Management API
- Preserve SEO metadata
- Map media assets
```

#### 4.2 Manual Content Review
- [ ] Review migrated content for accuracy
- [ ] Update internal links
- [ ] Optimize images (WebP conversion)
- [ ] Verify calculator configurations
- [ ] Test all forms

### Phase 5: Integration & Features (Week 7-8)

#### 5.1 Third-Party Integrations
- [ ] Analytics (Google Analytics 4 / Plausible)
- [ ] Form submissions (email/CRM integration)
- [ ] Social media pixels
- [ ] Chat widget (if applicable)
- [ ] Review widgets (Google Reviews API)

#### 5.2 Performance Optimization
- [ ] Implement image optimization (Astro Image)
- [ ] Set up lazy loading
- [ ] Configure caching strategies
- [ ] Implement critical CSS
- [ ] Add prefetching for navigation

#### 5.3 SEO Implementation
- [ ] Generate sitemap.xml
- [ ] Create robots.txt
- [ ] Implement schema.org markup
- [ ] Set up redirects from old URLs
- [ ] Configure meta tags and Open Graph

### Phase 6: Testing & QA (Week 8-9)

#### 6.1 Functional Testing
- [ ] Test all calculators with edge cases
- [ ] Verify form submissions
- [ ] Check responsive design
- [ ] Test cross-browser compatibility
- [ ] Validate accessibility (WCAG 2.1)

#### 6.2 Performance Testing
- [ ] Run Lighthouse audits
- [ ] Test Core Web Vitals
- [ ] Load testing for calculators
- [ ] Mobile performance optimization

#### 6.3 Content Validation
- [ ] Verify all pages render correctly
- [ ] Check images and media
- [ ] Validate internal links
- [ ] Review SEO metadata

### Phase 7: Deployment & Launch (Week 9-10)

#### 7.1 Pre-Launch Checklist
- [ ] Set up production environment
- [ ] Configure DNS settings
- [ ] Set up SSL certificates
- [ ] Implement monitoring (Sentry/LogRocket)
- [ ] Create backup strategy

#### 7.2 Migration Execution
- [ ] Deploy to staging for final review
- [ ] Client approval and sign-off
- [ ] Schedule maintenance window
- [ ] Execute DNS switch
- [ ] Monitor for issues

#### 7.3 Post-Launch
- [ ] Monitor analytics and errors
- [ ] Gather user feedback
- [ ] Fix any critical issues
- [ ] Document known issues
- [ ] Plan iteration roadmap

---

## 3. Technical Architecture

### Frontend Structure (Astro)
```
hunter-galloway-astro/
├── src/
│   ├── pages/
│   │   ├── index.astro
│   │   ├── calculators/
│   │   ├── blog/
│   │   └── [slug].astro
│   ├── components/
│   ├── layouts/
│   ├── styles/
│   └── utils/
├── public/
├── astro.config.mjs
└── package.json
```

### Storyblok Integration
```javascript
// astro.config.mjs
import { defineConfig } from 'astro/config';
import storyblok from '@storyblok/astro';

export default defineConfig({
  integrations: [
    storyblok({
      accessToken: process.env.STORYBLOK_TOKEN,
      components: {
        page: 'storyblok/Page',
        hero: 'storyblok/Hero',
        calculator: 'storyblok/Calculator',
        // ... more components
      },
    }),
  ],
});
```

### Calculator State Management
```typescript
// Using Nanostores for lightweight state management
import { atom, computed } from 'nanostores';

export const loanAmount = atom(500000);
export const interestRate = atom(6.5);
export const loanTerm = atom(30);

export const monthlyPayment = computed(
  [loanAmount, interestRate, loanTerm],
  (amount, rate, term) => {
    // Calculation logic
    return calculateMonthlyPayment(amount, rate, term);
  }
);
```

---

## 4. Risk Management

### Current Blockers
| Blocker | Impact | Resolution |
|---------|--------|------------|
| **🚨 Wrong Design System** | **CRITICAL** | **Fix colors (#FDB948), fonts (Open Sans), layout (1272px container)** |
| **🚨 Homepage Content Mismatch** | **CRITICAL** | **Replace generic homepage with actual WordPress structure** |
| Missing Storyblok API Token | High | Client needs to create Storyblok account and provide token |
| Calculator formula documentation | Medium | Need to extract exact formulas from existing JS files |
| Form submission endpoint | Medium | Decide between Formspree, Netlify Forms, or custom API |

### Potential Risks & Mitigation

| Risk | Impact | Status | Mitigation Strategy |
|------|--------|--------|-------------------|
| Calculator logic errors | High | 🟡 Monitoring | Extensive testing with known outputs |
| SEO ranking drop | High | ⚪ Not Started | Implement 301 redirects, maintain URL structure |
| Form submission failures | Medium | ⚪ Not Started | Implement fallback email system |
| Content migration errors | Medium | ⚪ Not Started | Manual review process, staging testing |
| Performance degradation | Low | 🟢 Addressed | Astro static generation, optimized assets |
| React 19 compatibility | Low | 🟢 Resolved | Using rc-slider instead of react-slider |

---

## 5. Resource Requirements

### Team Composition
- **Frontend Developer**: Astro/React expertise (1-2)
- **Backend Developer**: API integrations (0.5)
- **Content Strategist**: Migration oversight (0.5)
- **QA Tester**: Testing and validation (1)
- **DevOps**: Deployment and infrastructure (0.5)

### Tools & Services
- Storyblok subscription (Pro plan recommended)
- Hosting (Vercel/Netlify)
- Form service (Formspree/SendGrid)
- Monitoring (Sentry)
- Analytics (GA4/Plausible)

---

## 6. Success Metrics

### Performance KPIs
- **Core Web Vitals**: All green scores
- **Lighthouse Score**: 90+ across all categories
- **Page Load Time**: < 2 seconds
- **Time to Interactive**: < 3 seconds

### Business KPIs
- **Form Conversion Rate**: Maintain or improve current rate
- **Calculator Usage**: Track engagement metrics
- **SEO Rankings**: Maintain current positions
- **User Engagement**: Lower bounce rate

---

## 7. Maintenance & Documentation

### Documentation Deliverables
- [ ] Technical documentation
- [ ] Content editor guide for Storyblok
- [ ] Calculator formula documentation
- [ ] API documentation
- [ ] Deployment guide

### Training Requirements
- [ ] Storyblok CMS training for content team
- [ ] Technical handover for development team
- [ ] Emergency response procedures

---

## 8. Revised Timeline Summary

| Phase | Original | Revised | Status | Key Deliverables |
|-------|----------|---------|--------|-----------------|
| Planning & Setup | 2 weeks | ✅ Complete | Done | Environment ready, partial content audit |
| Content Modeling | 1 week | Week 2 | Ready | Storyblok schema definition |
| Frontend Development | 3 weeks | Weeks 2-5 | In Progress | Components, calculators, forms |
| Content Migration | 1 week | Week 6 | Pending | All content in Storyblok |
| Integration & Features | 1 week | Week 7 | Pending | Third-party services |
| Testing & QA | 1 week | Week 8 | Pending | Full testing suite |
| Deployment | 1 week | Week 9 | Pending | Production launch |

**Original Duration**: 10 weeks  
**Revised Duration**: 9 weeks (1 week saved on planning)  
**Estimated Completion**: Early March 2025

---

## 9. Budget Estimate

### One-Time Costs
- Development (400 hours @ $150/hr): $60,000
- Content Migration: $5,000
- Testing & QA: $8,000
- Training & Documentation: $3,000
**Total One-Time: ~$76,000**

### Recurring Costs (Annual)
- Storyblok Pro: $3,000/year
- Hosting (Vercel/Netlify): $1,200/year
- Form Service: $600/year
- Monitoring: $600/year
**Total Recurring: ~$5,400/year**

---

## 10. Next Steps

1. **Stakeholder Approval**: Review and approve migration plan
2. **Team Assembly**: Assign resources to project
3. **Kickoff Meeting**: Align on goals and timeline
4. **Environment Setup**: Begin Phase 1 implementation
5. **Weekly Check-ins**: Monitor progress and adjust

---

## Appendix A: Technology Decisions

### Why Astro?
- **Performance**: Ships zero JavaScript by default
- **Flexibility**: Supports React/Vue/Svelte components
- **SEO-Friendly**: Server-side rendering
- **Developer Experience**: Modern tooling and TypeScript

### Why Storyblok?
- **Visual Editor**: Live preview for content editors
- **Component-Based**: Matches modern frontend architecture
- **API-First**: Flexible content delivery
- **Scalability**: Enterprise-ready platform

### Alternative Considerations
- **Contentful**: More expensive, steeper learning curve
- **Sanity**: Requires more custom development
- **Strapi**: Self-hosted complexity
- **Prismic**: Limited component flexibility

---

## Appendix B: Migration Checklist

### Pre-Migration
- [ ] Full WordPress backup
- [ ] Content audit spreadsheet
- [ ] URL mapping document
- [ ] Current analytics baseline
- [ ] Form submission test data

### During Migration
- [ ] Daily progress reports
- [ ] Issue tracking log
- [ ] Content verification checklist
- [ ] Performance benchmarks
- [ ] Security audit

### Post-Migration
- [ ] 301 redirect verification
- [ ] Broken link check
- [ ] Form submission testing
- [ ] Calculator accuracy validation
- [ ] SEO monitoring setup