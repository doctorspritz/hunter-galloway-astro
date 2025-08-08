# WordPress Source Files

This directory contains the **complete WordPress theme source files** that serve as the **authoritative reference** for the Astro migration. These files are **essential** for the development workflow and must be analyzed before building any component.

## 🚨 Critical Importance

These WordPress files are the **single source of truth** for:
- **Exact CSS measurements** and styling values
- **Business logic** in calculators and forms
- **Content structure** and template organization
- **Interactive behaviors** and JavaScript functionality
- **Responsive breakpoints** and mobile behaviors

## 📂 File Structure

### Core Theme Files
- **`style.css`** - Main WordPress CSS (174KB) - **MOST CRITICAL**
- **`functions.php`** - WordPress theme functionality and hooks
- **`header.php`** - WordPress header template structure
- **`footer.php`** - WordPress footer template structure
- **`front-page.php`** - Homepage template and content structure

### Asset Loading
- **`enqueue-scripts.php`** - JavaScript loading order and dependencies
- **`enqueue-styles.php`** - CSS loading order and versioning

### Page Templates
- **`page-*.php`** - Specific page templates for:
  - Contact page
  - Calculator pages (mortgage, deposit, stamp duty)
  - Landing pages (first home buyer, refinance, etc.)
  - Team and about pages

### Calculator Templates
- **`post-deposit-calculator.php`** - Deposit calculator implementation
- **`post-stamp-duty-calculator.php`** - Stamp duty calculator
- **`calculate-capacity.php`** - Borrowing capacity calculator

### Assets Directory (`/assets/`)
```
assets/
├── css/                    # Modular WordPress CSS
│   ├── pages/             # Page-specific styles
│   ├── blocks/            # Component/section styles
│   ├── calculators/       # Calculator-specific CSS
│   └── templates/         # Template-specific styles
├── js/                    # WordPress JavaScript
│   ├── pages/            # Page-specific scripts
│   ├── forms/            # Form validation and handling
│   ├── calcs/            # Calculator business logic
│   └── blocks/           # Interactive component scripts
├── img/                  # WordPress images (copied to public/)
└── fonts/               # WordPress fonts (Gotham Pro)
```

## 🔍 How to Use These Files

### Before Building Any Component

1. **Identify WordPress Source**
   ```bash
   # Find the relevant CSS for a component
   grep -r "\.btn_yellow" wordpress-source/
   grep -r "\.header" wordpress-source/style.css
   ```

2. **Extract Exact Values**
   ```css
   /* Example from style.css */
   .btn_yellow {
     background: #FDB948;           /* Extract to primitive.color.yellow500 */
     border-radius: 33px;           /* Extract to primitive.radius.pill */
     padding: 16px 32px;            /* Extract to component.button.padding */
     font-size: 15px;               /* Extract to primitive.fontSize.md */
     font-weight: 600;              /* Extract to primitive.fontWeight.emphasis */
     transition: all 0.35s ease;    /* Extract to primitive.duration.normal */
   }
   ```

3. **Analyze Template Structure**
   ```php
   // Example from header.php
   <div class="header-nav">
     <div class="nav-menu">
       <!-- Understand exact HTML structure -->
     </div>
   </div>
   ```

4. **Extract Business Logic**
   ```javascript
   // Example from assets/js/calcs/deposit.js  
   function calculateDeposit(purchasePrice, depositPercent) {
     // Extract calculation formulas for Astro implementation
   }
   ```

### Critical Analysis Points

#### CSS Analysis (`style.css`)
- **Colors**: Extract hex values for design tokens
- **Typography**: Font sizes, weights, line heights
- **Spacing**: Padding, margin, gap values  
- **Breakpoints**: Responsive behavior changes
- **Animations**: Transition timing and easing
- **Shadows**: Box-shadow values for elevation
- **Border Radius**: Rounded corner specifications

#### Template Analysis (`.php` files)
- **HTML Structure**: Exact markup patterns
- **Content Organization**: How sections are arranged
- **Dynamic Elements**: WordPress functions and data
- **Form Structure**: Input types and validation
- **SEO Elements**: Meta tags and structured data

#### JavaScript Analysis (`assets/js/`)
- **Form Validation**: Field requirements and error messages
- **Calculator Logic**: Mathematical formulas and algorithms
- **Interactive Behaviors**: Click handlers, animations
- **Dependencies**: Required libraries (jQuery, Swiper, etc.)

## 🎯 Workflow Integration

### Mandatory Process
1. **WordPress Analysis First**: Never build without analyzing these files
2. **Value Extraction**: Extract exact measurements to design tokens
3. **Structure Mapping**: Understand template organization
4. **Behavior Documentation**: Note all interactive elements
5. **Visual Reference**: Take screenshots for comparison

### Quality Verification
- **Side-by-Side Comparison**: Astro component vs WordPress original
- **Exact Value Matching**: All measurements must match precisely
- **Responsive Behavior**: Test at WordPress breakpoints
- **Interactive Parity**: All hover states and animations identical

## 📋 File Analysis Checklist

### Before Component Development
- [ ] WordPress CSS analyzed for component classes
- [ ] Exact measurements extracted and documented
- [ ] Responsive behavior identified at all breakpoints
- [ ] Interactive states (hover, focus, active) noted
- [ ] Dependencies and required assets identified
- [ ] Business logic understood (for calculators/forms)

### During Development
- [ ] Design tokens created from WordPress values
- [ ] HTML structure matches WordPress templates
- [ ] Responsive breakpoints identical to WordPress
- [ ] Hover states and animations replicated exactly
- [ ] Performance impact considered

### After Implementation
- [ ] Visual comparison with WordPress at all breakpoints
- [ ] Interactive behavior verified against WordPress
- [ ] No hardcoded values (all values from design tokens)
- [ ] Cross-browser compatibility tested

---

**These WordPress files are not optional references - they are the foundation of pixel-perfect migration. Every Astro component must trace its styling and behavior back to these authoritative WordPress sources.**

**Last Updated**: January 2025