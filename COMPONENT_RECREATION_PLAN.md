# Hunter Galloway Component Recreation Plan

## Overview
This document outlines the step-by-step plan to recreate the actual WordPress components in the Astro/React architecture, based on the content audit findings.

---

## 🔧 Technical Setup Required

### 1. Update Design Tokens
```javascript
// tailwind.config.mjs - CORRECTIONS NEEDED
const colors = {
  yellow: {
    500: '#FDB948', // NOT #FFD700
    600: '#E5A43F'
  },
  gray: {
    dark: '#262626',
    text: '#444444',
    light: '#FFF5E2'
  }
}

// Font family corrections
fontFamily: {
  'primary': ['Open Sans', 'system-ui', 'sans-serif'], // NOT Gotham Pro
}
```

### 2. Install Additional Dependencies
```bash
npm install @headlessui/react framer-motion swiper
```

---

## 📋 Component Recreation Roadmap

### Phase 1: Foundation Components (Week 1)

#### 1.1 Typography & Layout Updates ⚡ URGENT
**File**: `src/styles/global.css`
**Changes Needed**:
- Remove Gotham Pro font imports
- Add Open Sans from Google Fonts
- Update color variables to match #FDB948 yellow
- Add container max-width: 1272px

#### 1.2 Button Component
**File**: `src/components/ui/Button.astro`
**Features**:
- `.btn_yellow` styling with correct colors
- Mobile arrow icon integration
- Hover states
- Loading states for forms

#### 1.3 Tooltip System
**File**: `src/components/ui/Tooltip.tsx` (React)
**Features**:
- Hover trigger tooltips (like benefit explanations)
- Custom positioning
- Animation in/out
**Dependencies**: @headlessui/react or custom implementation

---

### Phase 2: Homepage Hero Section (Week 1-2)

#### 2.1 Hero Organism
**File**: `src/components/organisms/HeroWidget/HeroWidget.astro`
**Layout**: Split 60/40 (text/image)
**Elements**:
```typescript
interface HeroProps {
  headline: string;
  benefits: Array<{
    text: string;
    tooltip?: string;
  }>;
  ctaText: string;
  ctaUrl: string;
  heroImage: {
    desktop: string;
    mobile: string;
    alt: string;
  };
  trustIndicators: {
    experienceYears: number;
    reviewCount: number;
  };
}
```

#### 2.2 Benefit List Component
**File**: `src/components/ui/BenefitList.tsx` (React)
**Features**:
- Checkmark icons
- Tooltip triggers
- Responsive text wrapping

#### 2.3 Trust Indicators Component
**File**: `src/components/ui/TrustIndicators.astro`
**Elements**:
- Custom SVG number (14)
- Google Reviews badge
- Star ratings

---

### Phase 3: Awards & Social Proof (Week 2)

#### 3.1 Awards Component
**File**: `src/components/sections/Awards.tsx` (React)
**Features**:
- 6 award images
- Tooltip on hover/click
- Responsive layout
- Image optimization
**Data Structure**:
```typescript
interface Award {
  id: string;
  image: string;
  alt: string;
  tooltip: string;
}
```

#### 3.2 Bank Logos Section
**File**: `src/components/sections/BankLogos.astro`
**Features**:
- Responsive flex grid
- 14+ bank logos
- Hover effects (opacity/grayscale)

---

### Phase 4: Loan Purpose Cards (Week 2)

#### 4.1 Purpose Cards Grid
**File**: `src/components/sections/LoanPurpose.astro`
**Layout**: 2x2 grid → stack on mobile
**Card Component**: `src/components/ui/PurposeCard.astro`
**Features**:
```typescript
interface PurposeCard {
  title: string;
  description: string;
  ctaText: string;
  ctaUrl: string;
  backgroundImage: string;
  badge?: string; // "Most Popular"
}
```

#### 4.2 Card Hover Effects
**Styling**: Subtle transform/shadow on hover
**Animation**: CSS transitions, not JS

---

### Phase 5: Interactive Components (Week 2-3)

#### 5.1 Mortgage vs Rent Calculator
**File**: `src/components/calculators/MortgageRentCalculator.tsx` (React)
**State Management**: Nanostores
**Features**:
- Custom range slider (100-2500)
- Dynamic value display
- Calculate button with results
- Mobile-responsive

**Implementation**:
```typescript
import { atom } from 'nanostores';

export const weeklyRent = atom(100);
export const mortgageEstimate = computed([weeklyRent], (rent) => {
  // Calculation logic
  return calculateMortgageFromRent(rent);
});
```

#### 5.2 Borrowing Capacity Calculator Widget
**File**: `src/components/calculators/BorrowingCapacity.tsx`
**Integration**: Embedded in homepage
**Features**: 
- Form inputs (income, expenses, deposit)
- Real-time calculation
- Results display

---

### Phase 6: Statistics & Testimonials (Week 3)

#### 6.1 Why Choose Statistics
**File**: `src/components/sections/Statistics.astro`
**Layout**: 4-column responsive grid
**Data**:
```typescript
const stats = [
  { number: "97%", description: "Loan approval rate" },
  { number: "14", description: "years of experience" },
  { number: "2,000+", description: "Happy customers" },
  { number: "30+", description: "Banks and lenders we have direct access to" }
];
```

#### 6.2 Testimonial Slider
**File**: `src/components/sections/TestimonialSlider.tsx` (React)
**Features**:
- Swiper.js integration
- Customer photos
- Star ratings
- Auto-scroll
- Navigation dots
- Active slide highlighting

**Dependencies**: `swiper` (already installed)

---

### Phase 7: Secondary Sections (Week 3)

#### 7.1 Property Map CTA Section
**File**: `src/components/sections/PropertyMap.astro`
**Features**:
- Feature bullet list
- CTA button to /suburbs-map/
- Background styling

---

## 🎨 Design System Implementation

### Color Palette Updates
```css
:root {
  --yellow-primary: #FDB948;
  --yellow-dark: #E5A43F;
  --gray-dark: #262626;
  --gray-text: #444444;
  --gray-light: #FFF5E2;
}
```

### Typography Scale
```css
h1 { font-size: 40px; line-height: 48px; font-weight: 400; }
h1 b { font-weight: 800; }
h2 { font-size: 40px; line-height: 48px; font-weight: 700; }
h3 { font-size: 32px; line-height: 40px; font-weight: 700; }
h4 { font-size: 24px; line-height: 32px; font-weight: 700; }
body, p { font-size: 16px; line-height: 24px; font-weight: 400; }
```

### Layout System
```css
.container {
  max-width: 1272px;
  width: 100%;
  padding: 0 16px;
  margin: 0 auto;
}

section {
  padding: 50px 0;
}
```

---

## 📱 Responsive Considerations

### Breakpoints
- Mobile: < 768px
- Tablet: 768px - 1024px  
- Desktop: > 1024px

### Mobile-First Changes
1. **Hero Section**: Stack layout, mobile hero image
2. **Loan Purpose Cards**: Single column
3. **Bank Logos**: Fewer columns, smaller logos
4. **Statistics**: 2x2 grid instead of 4 columns
5. **Testimonials**: Single slide view

---

## 🧪 Testing Strategy

### Component Testing
1. **Visual Regression**: Compare with WordPress screenshots
2. **Responsive Testing**: All breakpoints
3. **Interactive Testing**: Calculator functionality
4. **Accessibility Testing**: Tooltips, focus states
5. **Performance Testing**: Image loading, animations

### Tools
- Playwright for E2E testing
- Storybook for component development
- Lighthouse for performance

---

## 📊 Implementation Timeline

| Component | Complexity | Estimate | Dependencies |
|-----------|------------|----------|--------------|
| Typography/Colors | Low | 0.5 days | Design tokens |
| Button Component | Low | 0.5 days | - |
| Tooltip System | Medium | 1 day | @headlessui/react |
| Hero Section | High | 2 days | Tooltip system |
| Awards Component | Medium | 1 day | Tooltip system |
| Loan Purpose Cards | Medium | 1.5 days | - |
| Bank Logos | Low | 0.5 days | - |
| Mortgage Calculator | High | 2 days | Nanostores, Slider |
| Statistics Section | Low | 0.5 days | - |
| Testimonial Slider | Medium | 1.5 days | Swiper.js |
| Property Map CTA | Low | 0.5 days | - |

**Total Estimate**: 10 days (2 weeks with testing/refinement)

---

## 🚨 Critical Success Factors

1. **Exact Visual Match**: Homepage must look identical to WordPress
2. **Interactive Parity**: All calculators must function the same
3. **Performance**: Faster loading than WordPress
4. **Mobile Experience**: Responsive design maintained
5. **SEO**: Meta tags and structured data preserved

---

## 🔄 Review & Iteration Process

### Daily Reviews
- Component completion against WordPress original
- Responsive behavior verification
- Interactive functionality testing

### Weekly Milestones
- Week 1: Foundation + Hero complete
- Week 2: Awards + Loan Purpose + Calculator
- Week 3: Statistics + Testimonials + Polish

### Acceptance Criteria
✅ Visual match to WordPress (95%+ similarity)  
✅ All interactive elements functional  
✅ Responsive design working  
✅ Performance metrics met  
✅ Accessibility standards met