# Hunter Galloway WordPress to Astro - Collaboration Guide
## For Multiple Agents & Development Teams

**Repository Status**: ✅ Ready for Team Collaboration  
**Last Updated**: January 8, 2025  
**Git Repository**: Initialized and committed

---

## 🎯 Project Overview

This is a **WordPress to Astro migration project** for Hunter Galloway, a Brisbane mortgage broker. The goal is to achieve **exact visual parity** with the existing WordPress site while modernizing to a Jamstack architecture.

### Key Stats:
- **Total Pages**: 20 WordPress templates to convert
- **Current Progress**: 5% (Homepage 90% complete)
- **Timeline**: 12 weeks (60 working days)
- **Architecture**: WordPress → Astro + React + TypeScript

---

## 📁 Repository Structure

```
hunter-galloway/                    # Root git repository
├── 🚀 DEVELOPMENT
│   └── hunter-galloway-astro-with-CI/    # Main Astro project
│       ├── hunter-galloway-astro/        # Source code
│       ├── .github/workflows/            # CI/CD pipeline
│       └── tests/                        # Visual & A11y tests
│
├── 📚 REFERENCE
│   └── WP-FILES/                         # Complete WordPress theme
│       ├── *.php                        # All 20 page templates
│       ├── assets/css/                   # WordPress CSS files
│       ├── assets/js/                    # WordPress JavaScript
│       └── style.css                    # Main WordPress styles
│
├── 📋 PROJECT MANAGEMENT
│   ├── PAGE_CONVERSION_ROADMAP.md        # Complete conversion plan
│   ├── PAGE_CONVERSION_TRACKER.json      # Progress tracking
│   ├── manage_conversion.py              # CLI management tool
│   └── wp_page_map.json                  # Page mapping data
│
└── 📖 DOCUMENTATION
    ├── CLAUDE.md                         # Project instructions
    ├── PROJECT_STRUCTURE.md              # Structure overview
    └── COLLABORATION_GUIDE.md            # This file
```

---

## 🛠️ Getting Started (For New Agents)

### 1. Navigate to Development Directory
```bash
cd hunter-galloway/hunter-galloway-astro-with-CI/hunter-galloway-astro
```

### 2. Install Dependencies
```bash
npm install
```

### 3. Start Development Server
```bash
npm run dev
# → http://localhost:4321
```

### 4. Check Current Status
```bash
cd ../../  # Back to root
python manage_conversion.py
```

---

## 📊 Progress Tracking System

### Check Status
```bash
# Overall project status
python manage_conversion.py

# Show specific priority pages
python manage_conversion.py status P1

# Show next recommended actions
python manage_conversion.py next

# View component requirements
python manage_conversion.py components
```

### Update Progress
```bash
# Update page status
python manage_conversion.py update stamp-duty-calculator in_progress 25

# Add component to page
python manage_conversion.py add-component stamp-duty-calculator StateSelector
```

---

## 🎯 Current Priorities (For Immediate Work)

### Priority 1 (Critical - Work on These First):
1. **Stamp Duty Calculator** (`post-stamp-duty-calculator.php`)
   - High business value (lead generation)
   - Estimated: 24 hours
   - Components needed: StampDutyCalculator, StateSelector, ResultsDisplay

2. **Deposit Calculator** (`post-deposit-calculator.php`)
   - Important for first home buyers
   - Estimated: 24 hours
   - Components needed: DepositCalculator, InteractiveSlider

3. **Home Loans for Doctors** (`home-loans-for-doctors.php`)
   - High-value professional landing page
   - Estimated: 40 hours (complex)
   - Components needed: ProfessionalHero, RiskWidget

### Priority 2 (Next Phase):
- Blog templates
- Location/suburb pages
- Additional professional pages

---

## 🔄 Conversion Workflow

### For Each Page Conversion:

1. **Analysis Phase** (1-2 hours):
   ```bash
   # Check WordPress files
   cat WP-FILES/[page-name].php
   cat WP-FILES/assets/css/pages/[page-name].css
   ```

2. **Component Development** (varies):
   - Build missing atomic components first
   - Test components in isolation
   - Follow existing design system patterns

3. **Page Assembly** (4-8 hours):
   - Create Astro page template
   - Compose existing components
   - Implement dynamic content

4. **Update Progress**:
   ```bash
   python manage_conversion.py update [page-name] completed 100
   ```

---

## 🧱 Component Architecture

### Atomic Design System:
- **Atoms**: Button, Icon, Logo, Typography
- **Molecules**: StatCard, ReviewCard, PhoneLink
- **Organisms**: Header, Footer, HeroSection
- **Pages**: Complete page templates

### Design Tokens:
- **Primitive**: Raw values (colors, sizes)
- **Semantic**: Role-based tokens (brand colors, text colors)
- **Component**: Component-specific tokens

### File Locations:
```
src/
├── components/
│   ├── atoms/
│   ├── molecules/
│   └── sections/
├── tokens/              # Design system tokens
├── pages/              # Astro pages
└── layouts/            # Page layouts
```

---

## 📋 Quality Standards

### Required for Each Page:
- ✅ **Visual Parity**: Pixel-perfect match with WordPress
- ✅ **Responsive Design**: Mobile, tablet, desktop
- ✅ **Interactive Elements**: All JavaScript functionality working
- ✅ **Performance**: Meet Lighthouse benchmarks
- ✅ **Accessibility**: WCAG 2.1 compliance

### Testing:
```bash
# Build and test
npm run build

# Run visual tests (if configured)
npm run test:visual

# Run accessibility tests (if configured)  
npm run test:a11y
```

---

## 🤝 Collaboration Best Practices

### Git Workflow:
1. **Always pull latest** before starting work
2. **Work on feature branches** for major changes
3. **Commit frequently** with descriptive messages
4. **Update progress tracker** as you work
5. **Test builds** before committing

### Communication:
- **Update status**: Use the progress tracking system
- **Document decisions**: Add notes to PAGE_CONVERSION_TRACKER.json
- **Share blockers**: Update component requirements
- **Mark completions**: Only mark as complete when fully done

### File Organization:
- **WordPress Reference**: Never modify WP-FILES/
- **Component Reuse**: Check existing components before building new
- **Design Tokens**: Use semantic tokens, not primitive
- **Image Assets**: Use existing images from public/images/

---

## 🚨 Important Constraints

### DO NOT:
- ❌ Modify WordPress files (WP-FILES/ is read-only reference)
- ❌ Change the overall architecture or framework
- ❌ Add unnecessary dependencies
- ❌ Break existing working components
- ❌ Commit node_modules or build artifacts

### DO:
- ✅ Follow existing component patterns
- ✅ Use the design token system
- ✅ Update progress tracking religiously
- ✅ Test responsive behavior
- ✅ Maintain exact visual parity
- ✅ Focus on assigned priority pages

---

## 📞 Key Reference Points

### WordPress Analysis:
- **Main CSS**: `WP-FILES/style.css` (174KB - exact measurements)
- **Page Templates**: All in `WP-FILES/` root directory
- **Component CSS**: `WP-FILES/assets/css/blocks/` and `WP-FILES/assets/css/pages/`
- **JavaScript**: `WP-FILES/assets/js/` (calculator logic, forms)

### Astro Development:
- **Components**: `src/components/` (atomic design structure)
- **Pages**: `src/pages/` (route-based)
- **Tokens**: `src/tokens/` (design system)
- **Assets**: `public/images/` (static assets)

### Project Management:
- **Roadmap**: `PAGE_CONVERSION_ROADMAP.md`
- **Progress**: `PAGE_CONVERSION_TRACKER.json`
- **CLI Tool**: `manage_conversion.py`
- **Page Mapping**: `wp_page_map.json`

---

## 🎯 Success Metrics

- **Visual Accuracy**: 100% match with WordPress design
- **Performance**: Lighthouse scores 90+ across all categories
- **Functionality**: All interactive elements working perfectly
- **Responsiveness**: Seamless across all device sizes
- **Timeline**: Stay on 12-week schedule
- **Quality**: Zero critical bugs in completed pages

---

**The repository is now ready for multiple agents to collaborate efficiently on the WordPress to Astro conversion following this systematic approach.**