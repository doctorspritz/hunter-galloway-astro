/**
 * HeroWidget Component Types
 * Hunter Galloway Design System
 * 
 * Supports multiple hero variants across the website:
 * - Professional: Home loans for doctors, nurses
 * - General: Default hero for most pages
 * - Calculator: Calculator and tool pages
 * - Refinance: Refinance-specific messaging
 */

export interface HeroWidgetProps {
  /** Hero variant that determines default styling and background */
  variant?: 'professional' | 'nurse' | 'general' | 'calculator' | 'refinance';
  
  /** Main heading text (required) */
  title: string;
  
  /** Subtitle text (optional) - supports HTML */
  subtitle?: string;
  
  /** Description text below subtitle (optional) - supports HTML */
  description?: string;
  
  /** Call-to-action button text */
  buttonText?: string;
  
  /** Button URL/href */
  buttonHref?: string;
  
  /** Bottom promise/guarantee text */
  bottomText?: string;
  
  /** Custom background image URL (overrides variant default) */
  backgroundImage?: string;
  
  /** Additional CSS classes */
  class?: string;
}

export interface HeroWidgetVariants {
  professional: {
    defaultImage: '/images/doctors-hero.jpg';
    theme: 'professional';
  };
  nurse: {
    defaultImage: '/images/nurse-hero.jpg';
    theme: 'professional';
  };
  general: {
    defaultImage: '/images/post_hero.jpg';
    theme: 'general';
  };
  calculator: {
    defaultImage: '/images/coronavirus-hero.jpg';
    theme: 'urgent';
  };
  refinance: {
    defaultImage: '/images/post_hero.jpg';
    theme: 'benefit-focused';
  };
}

export interface HeroWidgetContent {
  doctors: {
    title: 'Home Loans for Doctors';
    subtitle: 'Borrow up to 95% of the property value without paying Lenders<br>Mortgage Insurance and access exclusive interest rate discounts.';
    description: 'Find out how we can save you $10,000 to $40,000 (or more)<br>in repayments across the life of your loan.';
  };
  nurse: {
    title: 'Special Home Loan Offer for Nurses';
    subtitle: 'Nurses qualify for discounted interest rates and an LMI waiver up to 85% LVR';
    description: 'This would save $5,168 on a $500,000 purchase in Queensland, see how much you could save.';
  };
  refinance: {
    title: 'The RBA has cut interest rates twice this year <br> Has your bank done the same for you?';
    subtitle: 'If you have had your home loan for over 2 years, you may be on an <br>  uncompetitive interest rate.';
    description: 'Find out how much you can save';
  };
}