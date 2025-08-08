# Hunter Galloway Content & Component Audit

## Homepage Component Analysis (front-page.php)

### 🏠 Homepage Structure (Actual WordPress)

#### 1. Hero Section (`home_offer`)
**Location**: Lines 13-90 in front-page.php
**Content**:
- **Main Headline**: "Get a home loan with full guidance and expert assistance"
- **Three Key Benefits**:
  - 97% loan approval rate with tooltip explaining rejection rates
  - Access to 30+ Australian banks & lenders
  - #1 rated Mortgage Broker in Brisbane with tooltip (5-star, 2000+ reviews)
- **Primary CTA**: "Calculate my borrowing capacity" (yellow button → /mortgage-calculator/)
- **Hero Image**: Family holding cardboard house roof (responsive: .jpg/.png)
- **Trust Indicators**:
  - "14 Years of experience" with custom SVG number
  - Google Reviews badge "Based on 2000+ reviews"

**Visual Elements**:
- Split layout (text left, image right)
- Checkmark icons for benefit list
- Custom SVG "14" graphic
- Google icon
- Yellow button styling

#### 2. Awards Section (`home_offer_awards`)
**Location**: Lines 91-95, references template-parts/blocks/awards.php
**Content**: 6 award badges with tooltips
- FBAA Broker of the Year 2019 (2 badges)
- EA Broker of the Year 2024
- EA Brokerage of the Year ≤ 5 Brokers 2024
- ThreeBest Best Business of 2024
- TheAdviser TOP 25 Brokerage 2019

#### 3. Loan Purpose Section (`loan-purpose`)
**Location**: Lines 96-144
**Heading**: "What do you need a loan for?"
**4 Purpose Cards**:
1. **Buy My First Home** (Most Popular badge)
   - CTA: /get-a-stress-free-first-home-loan/
   - Image: first-home.webp
2. **Refinance My Loan**
   - CTA: /lower-your-rate
   - Image: refinance.webp
3. **Upgrade My Home**
   - CTA: /ready-to-upgrade/
   - Image: upgrade.webp
4. **Invest in Property**
   - CTA: /your-property-investment-journey/
   - Image: buy-luxury.webp

#### 4. Bank Logos Section (`banks`)
**Location**: Lines 147-172
**Content**: 
- Heading: "We offer flexibility and best rates due to the variety of banks & lender networks we work with"
- 14+ bank logos including Westpac, NAB, ING, ANZ, etc.

#### 5. Mortgage vs Rent Calculator (`mortagevsrent`)
**Location**: Lines 174-198
**Interactive Elements**:
- Range slider: $100-$2500 weekly rent
- "Calculate" button
- Custom slider styling with caption

#### 6. Property Map Section (`to-map`)
**Location**: Lines 201-217
**Content**:
- Heading: "Looking for property in Brisbane?"
- 4 feature bullets (housing prices, transport, schools, green zones)
- CTA: "Explore map" → /suburbs-map/

#### 7. Borrowing Capacity Calculator
**Location**: Line 219, references template-parts/calculators/calculate-capacity.php
**Interactive calculator component**

#### 8. Why Choose Section (`why_choose`)
**Location**: Lines 221-241
**4 Statistics**:
- 97% Loan approval rate
- 14 years of experience  
- 2,000+ Happy customers
- 30+ Banks and lenders

#### 9. Reviews Section
**Location**: Line 244, includes reviews.php
**Testimonial slider with customer photos and quotes**

---

## Design System Components (Organisms)

### 🎯 Primary Components to Recreate

#### **Hero Organism**
- **Layout**: Split (60/40)
- **Elements**: H1, benefit list with icons, CTA button, hero image, trust badges
- **Interactions**: Tooltips on benefits
- **Responsive**: Image changes on mobile

#### **Awards Carousel**
- **Layout**: Horizontal scroll of award badges
- **Interactions**: Tooltips on hover
- **Content**: 6+ awards with images and descriptions

#### **Purpose Cards Grid**
- **Layout**: 2x2 grid (desktop), stack (mobile)
- **Elements**: Badge, title, description, CTA button, background image
- **Styling**: Card hover effects, "Most Popular" badge overlay

#### **Bank Logo Cloud**
- **Layout**: Responsive flex grid
- **Elements**: 14+ bank logos
- **Styling**: Grayscale with hover effects

#### **Interactive Calculator Widget**
- **Elements**: Slider input, dynamic caption, calculate button
- **State**: Real-time value updates
- **Styling**: Custom slider design

#### **Statistics Block**
- **Layout**: 4-column grid
- **Elements**: Large number, description text
- **Styling**: Minimal design with emphasis on numbers

#### **Testimonial Slider**
- **Layout**: Card-based carousel
- **Elements**: Customer photo, quote, name, star rating
- **Interactions**: Auto-scroll, navigation dots
- **Styling**: Active slide has different styling

### 🎨 Visual Design System

#### **Typography**
- **Primary Font**: Open Sans (not Gotham Pro as initially thought)
- **Headings**: Various weights (400, 700, 800)
- **Body**: 16px, 24px line-height

#### **Colors**
- **Primary Yellow**: #FDB948 (not #FFD700)
- **Dark Grey**: #262626
- **Text Grey**: #444
- **Light Background**: #FFF5E2 (reviews section)

#### **Button Styles**
- **Primary**: `.btn_yellow` - Yellow background, dark text
- **States**: Hover effects, mobile arrow icons

#### **Layout**
- **Container**: Max-width 1272px, 16px padding
- **Sections**: 50px padding vertical
- **Grid**: Flexbox-based responsive layouts

---

## Landing Page Patterns

### **Landing Page Hero** (from page-get-a-stress-free-first-home-loan.php)
- **Layout**: Text left, image + cards right
- **Elements**:
  - Multi-colored headline with spans
  - Description with inline checkmarks
  - CTA button
  - Rating component
  - Floating stats card (3500+ buyers)
  - Testimonial card with stars
- **Responsive**: Different headline for mobile

---

## Calculator Components Analysis

### **Mortgage vs Rent Calculator**
- Custom range slider
- Dynamic value display
- Calculate button trigger

### **Borrowing Capacity Calculator** 
(Referenced but need to analyze calculate-capacity.php)

### **Stamp Duty Calculator**
(Need to analyze from calculator pages)

---

## Form Components

### **Assessment Form Pattern**
- Lead capture with validation
- Multi-step or single form
- Success/error states

---

## Missing from Current Astro Implementation

1. **Hero Section**: Completely different content and layout
2. **Awards Component**: Not implemented
3. **Loan Purpose Cards**: Missing entirely
4. **Bank Logos Section**: Not present
5. **Interactive Calculators**: Not built
6. **Statistics Section**: Different content
7. **Testimonial Slider**: Not implemented
8. **Proper Typography**: Using wrong font family
9. **Color Scheme**: Wrong brand colors
10. **Visual Hierarchy**: Simplified version of original

---

## Component Priority for Migration

### **High Priority (Critical Path)**
1. Hero Section with tooltips and trust indicators
2. Awards component with tooltip system
3. Loan Purpose cards grid
4. Interactive calculator widgets
5. Bank logos section

### **Medium Priority**
1. Statistics section (Why Choose)
2. Testimonial slider
3. Property map CTA section

### **Lower Priority**
1. Mobile-specific optimizations
2. Advanced animations/transitions
3. Tooltip styling refinements