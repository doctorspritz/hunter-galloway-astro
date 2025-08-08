# Hunter Galloway WordPress to Astro Migration
## Project Structure Overview

**Last Updated**: January 8, 2025  
**Status**: ✅ ORGANIZED & READY FOR DEVELOPMENT (Consolidated)

---

## 📁 Root Directory Structure

```
hunter-galloway/
├── 🚀 ACTIVE DEVELOPMENT
│   └── hunter-galloway-astro-with-CI/     # Main Astro project with CI/CD
│       ├── hunter-galloway-astro/         # Astro site source code
│       ├── .github/                       # GitHub Actions CI
│       └── tests/                         # Visual & accessibility tests
│
├── 📚 WORDPRESS REFERENCE
│   └── WP-FILES/                          # Complete WordPress theme files (single source)
│       ├── assets/                        # CSS, JS, fonts, images
│       ├── *.php                         # All PHP template files
│       └── style.css                     # Main WordPress CSS (174KB)
│
├── 📋 PROJECT MANAGEMENT
│   ├── PAGE_CONVERSION_ROADMAP.md         # Complete conversion plan
│   ├── PAGE_CONVERSION_TRACKER.json       # Progress tracking data
│   ├── manage_conversion.py              # Conversion management CLI
│   ├── wp_page_map.json                  # WordPress page mapping
│   └── generate_wp_page_map.py           # Page mapping script
│
├── 📖 DOCUMENTATION
│   ├── CLAUDE.md                         # Project instructions
│   ├── MIGRATION_PLAN.md                 # Detailed migration plan
│   ├── COMPONENT_RECREATION_PLAN.md      # Component strategy
│   ├── CONTENT_AUDIT.md                  # Content analysis
│   └── AGENT_HANDBOOK.md                 # Development guidelines
│
└── 🗄️ ARCHIVED
    └── hunter-galloway-astro-ARCHIVED-*   # Old version (archived)
```

---

## 🎯 Active Development Directory

**Primary workspace**: `hunter-galloway-astro-with-CI/hunter-galloway-astro/`

### Key Components:
- **Framework**: Astro 5.12.8 + React + TypeScript
- **Development Server**: `npm run dev` → http://localhost:4321
- **Build System**: `npm run build` → Static site generation
- **Components**: Complete atomic design system (atoms → molecules → organisms)
- **Design Tokens**: 3-tier token system with semantic CSS variables (single source under `src/tokens`)

### Directory Structure:
```
hunter-galloway-astro/
├── src/
│   ├── components/          # Atomic design components
│   │   ├── atoms/          # Button, Icon, Logo, etc.
│   │   ├── molecules/      # StatCard, ReviewCard, etc.
│   │   └── sections/       # Awards, Header, Footer, etc.
│   ├── layouts/            # Page layouts
│   ├── pages/              # Route pages
│   ├── tokens/             # Design system tokens
│   └── styles/             # Global styles
├── public/                 # Static assets (single source)
├── astro.config.mjs        # Astro configuration
└── package.json            # Dependencies & scripts
```

---

## 📚 WordPress Reference Files

**Location**: `WP-FILES/` (Complete WordPress theme; remove/ignore any `wordpress-source/` duplicates)

### Essential Files:
- **`style.css`** (174KB) - Complete WordPress CSS with exact measurements
- **`functions.php`** - Theme functionality and hooks
- **`header.php` & `footer.php`** - Template structure
- **`front-page.php`** - Homepage template (primary reference)
- **`assets/css/`** - Modular CSS (pages, blocks, calculators)
- **`assets/js/`** - Interactive functionality and form validation

### Page Templates (20 total):
- Calculator pages (stamp duty, deposit, capacity)
- Professional pages (doctors, nurses)
- Location pages (suburbs, map)
- Service pages (refinance, contact, team)
- Blog templates (single posts, listings)

---

## 📋 Project Management Tools

### Conversion Tracking:
- **`PAGE_CONVERSION_ROADMAP.md`** - Complete 12-week conversion plan
- **`PAGE_CONVERSION_TRACKER.json`** - Progress tracking with 20 pages
- **`manage_conversion.py`** - CLI tool for progress management

### WordPress Analysis:
- **`wp_page_map.json`** - Maps 20 page templates to their PHP/CSS files
- **`generate_wp_page_map.py`** - Script to regenerate page mapping

### Usage Examples:
```bash
# Check conversion status
python manage_conversion.py

# Show next actions
python manage_conversion.py next

# Update page progress
python manage_conversion.py update stamp-duty-calculator in_progress 50

# View component requirements
python manage_conversion.py components
```

---

## 🚀 Getting Started

### Development Commands:
```bash
# Navigate to project
cd hunter-galloway-astro-with-CI/hunter-galloway-astro

# Install dependencies (if needed)
npm install

# Start development server
npm run dev

# Build for production
npm run build

# Preview production build
npm run preview
```

### Current Status:
- ✅ **Homepage**: 90% complete with all major sections
- ✅ **Components**: Complete atomic design library
- ✅ **Design System**: 3-tier token system implemented
- ✅ **Build System**: Working perfectly
- ⏳ **Next**: Begin calculator page conversions

---

## 📊 Conversion Progress

### Completed (1/20 pages):
- ✅ Homepage (index.astro) - 90% complete

### Next Priority (P1):
1. **Stamp Duty Calculator** - Critical business value
2. **Deposit Calculator** - High lead generation
3. **Home Loans for Doctors** - High-value professional page
4. **Nurse Home Loan** - Professional landing page

### Management:
- **Total Pages**: 20 WordPress templates identified
- **Overall Progress**: 5% complete
- **Estimated Timeline**: 12 weeks (60 working days)
- **Component Strategy**: Build reusable components first

---

## 🔧 Development Workflow

1. **Check Status**: `python manage_conversion.py`
2. **Choose Next Page**: Follow P1 → P2 → P3 priority
3. **Analyze WordPress**: Review PHP template + CSS files
4. **Build Components**: Create missing atoms/molecules
5. **Convert Page**: Assemble components into Astro page
6. **Update Progress**: `python manage_conversion.py update [page] [status] [progress]`
7. **Test & QA**: Visual comparison with WordPress

---

## 📞 Key Information

- **Client**: Hunter Galloway (Mortgage Broker, Brisbane)
- **Migration Goal**: Exact visual parity with WordPress
- **Architecture**: WordPress → Astro (Static Site Generator)
- **Design System**: Atomic design with 3-tier tokens
- **Quality Standard**: Pixel-perfect match required

---

**Single-source rules**

- Storybook: Only root `/.storybook` is authoritative; nested configs are disallowed.
- WordPress reference: Only `WP-FILES/` is authoritative; `wordpress-source/` paths are ignored.
- Tokens: Only `src/tokens/` is authoritative; delete/avoid duplicates elsewhere.
- Public assets: Only root `/public` is authoritative; do not duplicate under nested apps.

**The project is now consolidated to single sources to prevent redundancy and is ready for systematic page conversion following the established roadmap and workflow.**