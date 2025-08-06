# WordPress Analysis Guide

## 🎯 Purpose

This document explains **why and how** to analyze WordPress PHP and CSS files when migrating to Astro. Understanding the WordPress implementation is **critical** for achieving pixel-perfect visual parity.

## 🚨 Critical Importance

### Why WordPress Analysis is Non-Negotiable

1. **Exact Value Extraction**: WordPress contains precise measurements, colors, and animations that must be preserved
2. **Hidden Dependencies**: PHP logic reveals form handling, dynamic content, and interactive behaviors
3. **Responsive Breakpoints**: WordPress CSS contains exact breakpoint values and mobile behaviors
4. **Animation Timing**: WordPress animations have specific durations and easing functions
5. **Content Structure**: Template files show how content is organized and prioritized
6. **Business Logic**: Custom functionality reveals mortgage-specific features and calculations

### What Happens Without Proper Analysis

❌ **Visual Inconsistencies**: Slightly wrong colors, spacing, typography  
❌ **Broken Interactions**: Missing hover states, form validation, animations  
❌ **Responsive Issues**: Different breakpoints causing layout shifts  
❌ **Missing Features**: Overlooked functionality in calculators or forms  
❌ **Performance Problems**: Incorrect asset loading, missing optimizations  

## 📂 WordPress Files to Analyze

### Core Theme Files

#### `style.css` - **MOST CRITICAL**
```css
/* Extract exact values like these: */
.btn_yellow {
  background: #FDB948;
  border-radius: 33px;
  padding: 16px 32px;
  font-size: 15px;
  font-weight: 600;
  transition: all 0.35s ease;
}

.footer {
  background: #262626;
  padding: 36px 0;
}

/* Responsive breakpoints */
@media (max-width: 992px) {
  .header { padding: 13px 0; }
}
```

**Extract Process:**
1. Search for component classes (`.btn_`, `.header`, `.footer`)
2. Document exact pixel values, colors, fonts
3. Note transition durations and easing functions
4. Map responsive breakpoints and changes
5. Identify hover states and interactive styles

#### `functions.php` - Theme Functionality
```php
// Reveals WordPress hooks and custom functionality
function enqueue_child_theme_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Custom post types, ACF fields, form handling
function custom_mortgage_calculator() {
  // Business logic for calculators
}
```

**Extract Process:**
1. Identify enqueued styles and scripts
2. Find custom post types and fields
3. Document form handling logic
4. Note calculator business rules

#### `enqueue-scripts.php` & `enqueue-styles.php` - Asset Loading
```php
// Loading order and dependencies
wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper.min.css');
wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js');
```

**Extract Process:**
1. Map all CSS/JS dependencies
2. Note loading order (critical for component styling)
3. Identify external libraries (Swiper, jQuery UI)
4. Document version numbers

### Component-Specific Files

#### `/assets/css/` Directory
```
/assets/css/
├── pages/
│   ├── home.css          # Homepage specific styles
│   ├── calculators.css   # Calculator page styles
│   └── landing.css       # Landing page styles
├── blocks/
│   ├── awards.css        # Awards section styling
│   ├── statistics.css    # Statistics cards
│   └── reviews.css       # Review cards
├── calculators/
│   ├── deposit.css       # Deposit calculator
│   ├── capacity.css      # Borrowing capacity
│   └── stamp-duty.css    # Stamp duty calculator
└── templates/
    ├── header.css        # Header navigation
    └── footer.css        # Footer sections
```

**Analysis Process for Each File:**
1. **Read entire CSS file** to understand component scope
2. **Extract measurements**: padding, margin, width, height values
3. **Document colors**: background, text, border colors with hex values
4. **Note typography**: font-size, font-weight, line-height, letter-spacing
5. **Map interactions**: hover states, transitions, animations
6. **Identify breakpoints**: responsive behavior changes

#### `/assets/js/` Directory
```
/assets/js/
├── pages/
│   └── home.js           # Homepage interactions
├── forms/
│   ├── assessment.js     # Form validation logic
│   └── contact.js        # Contact form handling
├── calcs/
│   ├── deposit.js        # Deposit calculator logic
│   ├── capacity.js       # Capacity calculation
│   └── stamp-duty.js     # Stamp duty logic
└── blocks/
    ├── awards.js         # Awards tooltips
    └── statistics.js     # Statistics animations
```

**Analysis Process:**
1. **Understand business logic**: How calculations work
2. **Extract validation rules**: Form field requirements
3. **Document interactions**: Click handlers, form submissions
4. **Note animations**: jQuery animations, timing functions
5. **Map dependencies**: Which libraries are required

### Template Files (`.php`)

#### Page Templates
```php
// page-mortgage-calculators.php
<div class="calculator-wrapper">
  <div class="calculator-header">
    <h1><?php the_title(); ?></h1>
  </div>
  <!-- Dynamic content structure -->
</div>
```

**Analysis Process:**
1. **Map content structure**: How WordPress organizes content
2. **Identify dynamic elements**: ACF fields, custom post types
3. **Document HTML structure**: Exact markup patterns
4. **Note conditional logic**: When elements appear/hide

## 🔍 Analysis Methodology

### Step 1: Visual Reference Creation
```bash
# Take screenshots of every page section
# Use browser dev tools to inspect exact measurements
# Document hover states and interactions
```

### Step 2: CSS Extraction Process
```bash
# Search for component-specific CSS
grep -r "\.header" /wp-content/themes/hunter-galloway/
grep -r "\.btn_yellow" /wp-content/themes/hunter-galloway/
grep -r "@media" /wp-content/themes/hunter-galloway/

# Extract exact values
grep -r "font-size:" style.css
grep -r "padding:" style.css
grep -r "background:" style.css
```

### Step 3: Create WordPress Reference Document
```markdown
# WordPress Component Analysis: Header

## CSS Classes Found
- `.header` - Main header container
- `.header-nav` - Navigation wrapper
- `.btn_yellow` - Primary CTA button

## Measurements
- Header height: 80px desktop, 57px mobile
- Nav padding: 30px desktop, 13px mobile
- Button radius: 33px (pill shape)

## Colors
- Background: #ffffff
- Text: #2b2b2b
- Button: #FDB948
- Border: rgba(43, 43, 43, 0.1)

## Breakpoints
- Mobile: max-width 992px
- Desktop: min-width 993px
```

### Step 4: Token Mapping
```typescript
// Map WordPress values to design tokens
const primitive = {
  color: {
    yellow500: '#FDB948', // WordPress btn_yellow
    gray900: '#2b2b2b',    // WordPress text color
    gray100: '#ffffff',    // WordPress backgrounds
  },
  space: {
    xl: '30px',  // WordPress desktop padding
    md: '13px',  // WordPress mobile padding
  }
};
```

## 🎯 Component-Specific Analysis

### Header Analysis
**WordPress Files to Check:**
- `style.css` - `.header`, `.nav-menu`, `.btn_yellow`
- `/assets/css/templates/header.css`
- `/assets/js/navigation.js`

**Key Extractions:**
- Navigation structure and dropdowns
- Mobile menu behavior
- Button styling (WordPress btn_yellow)
- Sticky header logic
- Search form behavior

### Footer Analysis
**WordPress Files to Check:**
- `style.css` - `.footer`, `.footer-widget`
- `/assets/css/templates/footer.css`
- `footer.php` template

**Key Extractions:**
- Multi-column layout structure
- Social media icon styling
- Copyright and legal text
- Background colors and spacing
- Responsive footer behavior

### Calculator Analysis
**WordPress Files to Check:**
- `/assets/css/calculators/deposit.css`
- `/assets/js/calcs/deposit.js`
- `page-deposit-calculator.php`

**Key Extractions:**
- Form field styling and validation
- Calculation logic and formulas
- Result display formatting
- Interactive slider behavior
- Error handling and messaging

### Awards Section Analysis
**WordPress Files to Check:**
- `/assets/css/blocks/awards.css`
- `/assets/js/blocks/awards.js`
- Template part files

**Key Extractions:**
- Tooltip implementation
- Hover animations and timing
- Grid layout and spacing
- Image aspect ratios
- Award badge positioning

## 🚨 Common Analysis Mistakes

### ❌ What NOT to Do
1. **Guessing measurements** instead of extracting exact values
2. **Assuming standard breakpoints** without checking WordPress CSS
3. **Skipping hover states** and interactive behaviors
4. **Ignoring animation timing** and easing functions
5. **Missing responsive changes** in padding, font sizes, layouts
6. **Overlooking form validation** and business logic
7. **Not documenting dependencies** like jQuery UI, Swiper

### ✅ Best Practices
1. **Extract exact pixel values** from WordPress CSS
2. **Document every hover state** and transition
3. **Test responsive behavior** at WordPress breakpoints
4. **Map all color values** including transparency
5. **Understand business logic** before implementing
6. **Note asset dependencies** and loading order
7. **Create visual reference** screenshots for comparison

## 🔧 Tools for WordPress Analysis

### Browser Developer Tools
```javascript
// Extract computed styles in browser console
const button = document.querySelector('.btn_yellow');
const styles = window.getComputedStyle(button);
console.log({
  background: styles.backgroundColor,
  padding: styles.padding,
  borderRadius: styles.borderRadius,
  fontSize: styles.fontSize,
});
```

### CSS Extraction Commands
```bash
# Find all font-size declarations
grep -rn "font-size:" /wp-content/themes/hunter-galloway/

# Find all color declarations
grep -rn "#[0-9a-fA-F]\{6\}" /wp-content/themes/hunter-galloway/

# Find all responsive breakpoints
grep -rn "@media" /wp-content/themes/hunter-galloway/
```

### File Structure Analysis
```bash
# List all CSS files
find /wp-content/themes/hunter-galloway/ -name "*.css" -type f

# List all JavaScript files  
find /wp-content/themes/hunter-galloway/ -name "*.js" -type f

# List all PHP template files
find /wp-content/themes/hunter-galloway/ -name "*.php" -type f
```

## 📋 Analysis Checklist

### Before Starting Any Component
- [ ] WordPress CSS extracted and documented
- [ ] Screenshots taken for visual reference
- [ ] Hover states and interactions noted
- [ ] Responsive behavior mapped
- [ ] Dependencies identified
- [ ] Business logic understood
- [ ] Color values extracted with exact hex codes
- [ ] Typography measurements documented
- [ ] Animation timing noted
- [ ] Asset loading order mapped

### During Component Development
- [ ] Side-by-side comparison with WordPress
- [ ] Exact measurements validated
- [ ] Color matching confirmed
- [ ] Hover states replicated
- [ ] Responsive behavior identical
- [ ] Performance impact acceptable

### After Component Completion
- [ ] Visual regression test passed
- [ ] All breakpoints tested
- [ ] Interactive functionality verified
- [ ] No console errors
- [ ] Performance metrics acceptable

## 🎯 Success Metrics

A proper WordPress analysis succeeds when:

1. **Zero Visual Differences**: Astro component is indistinguishable from WordPress
2. **Exact Measurements**: All spacing, sizing, typography matches precisely
3. **Identical Interactions**: Hover states, animations, transitions work exactly
4. **Perfect Responsive**: Mobile/tablet/desktop behavior identical
5. **Complete Functionality**: All business logic and calculations preserved

---

**Remember**: WordPress analysis is not optional - it's the foundation of pixel-perfect migration. Every minute spent in thorough analysis saves hours of guesswork and revision later.

**Last Updated**: January 2025