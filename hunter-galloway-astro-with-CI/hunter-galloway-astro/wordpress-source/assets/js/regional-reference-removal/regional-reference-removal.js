const teamImages = [
  '/wp-content/uploads/2018/02/mortgage-broker-brisbane.jpg',
  '/wp-content/uploads/2024/04/3-Hunter_Galloway_223-scaled-1-1024x683.jpg',
  '/wp-content/uploads/2022/07/Break-Costs-Images-larger-1024-%C3%97-400px-1024x400.png',
  '/wp-content/uploads/2024/04/3-Hunter_Galloway_223-scaled-1-768x512.jpg',
  '/wp-content/uploads/2024/04/3-Hunter_Galloway_223-scaled-1-1536x1024.jpg',
  '/wp-content/uploads/2024/04/3-Hunter_Galloway_223-scaled-1-2048x1365.jpg',
  '/wp-content/uploads/2024/04/3-Hunter_Galloway_223-scaled-1-1200x800.jpg',
  '/wp-content/uploads/2024/04/3-Hunter_Galloway_223-scaled-1-600x400.jpg',
  '/wp-content/themes/Divi/images/our_story.jpg',
  '/wp-content/uploads/2022/07/3-Hunter_Galloway_223-1024x683.jpg',
  '/wp-content/uploads/2022/07/Break-Costs-Images-larger-1024-×-400px-1024x400.png',
];

(() => {
  try {
    const targetPages = [
      '/mortgage-calculator/',
      '/home-loans-for-nurses/',
      '/home-guarantee-scheme/',
      '/lmi-waiver-lawyers/',
      '/rentvesting/',
      '/physiotherapist-home-loans/',
      '/home-loans-pharmacists/',
      '/accountant-home-loans/',
      '/ethical-banks-australia/',
      '/our-team/',
      '/no-lmi-and-90-lvr/',
      '/first-home-super-saver-scheme/',
      '/making-an-offer-on-a-house/',
      '/contact/',
      '/removing-a-guarantor-from-mortgage/',
      '/new-zealand-citizen-home-loan/',
      '/first-home-owners-grant-qld/',
      '/bridging-loan/',
      '/first-home-buyer-guide/',
      '/pre-approval/',
      '/home-loan-on-contractor-income/',
      '/how-to-calculate-buying-someone-out-of-a-house-in-australia/',
      '/barefoot-investor-bank-accounts/',
      '/buying-at-auction/',
    ];

    const currentPage = window.location.pathname;

    if (!sessionStorage.getItem('firstPage')) {
      sessionStorage.setItem('firstPage', currentPage);
    }
    const firstPageInSession = sessionStorage.getItem('firstPage');

    // const isTargetPage = targetPages.some((page) => currentPage.includes(page));
    const isFirstPage = targetPages.some((page) =>
      firstPageInSession.includes(page)
    );

    console.log('isFirstpage', isFirstPage);
    if (!isFirstPage) return;

    const assessmentPopupBgImg = document.querySelector(
      '#popmake-11791 .quiz__side-cover img'
    );
    const assessmentPopupLogoImg = document.querySelector(
      '#popmake-11791  .quiz__logo img'
    );
    const ourTeamHeader = document.querySelector('.ourteam_slider');
    const outTeamImages = document.querySelectorAll(
      teamImages.map((img) => `img[src*="${img}"]`).join(', ')
    );
    const texts = document.querySelectorAll(
      '.single_bottom_text_bottom, .hero_points li:last-child div'
    );

    if (texts.length > 0) {
      texts.forEach((text) => {
        text.innerHTML = text.innerHTML.replace(/in Brisbane/gi, '');
      });
    }

    // Update the src of images in the article
    if (outTeamImages && outTeamImages.length > 0) {
      outTeamImages.forEach((outTeamImage) => {
        outTeamImage.src =
          '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/mortgage-broker-brisbane.jpg';
        outTeamImage.srcset = '';
      });
    }

    // Update the src of the logo in the assessment popup

    if (assessmentPopupLogoImg) {
      assessmentPopupLogoImg.src =
        '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg';
    }

    // Update the src of the assessment popup background image
    if (assessmentPopupBgImg) {
      assessmentPopupBgImg.src =
        '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/assessment_popup_bg.jpg';
      assessmentPopupBgImg.srcset = '';
      assessmentPopupBgImg.setAttribute(
        'nitro-lazy-srcset',
        '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/assessment_popup_bg.jpg'
      );
    }

    // Update the src of the our team header image
    if (ourTeamHeader) {
      ourTeamHeader.style.backgroundImage = `url('/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/banner_who_we_are.jpg')`;
    }
  } catch (error) {
    console.error('Error updating logo:', error);
  }
})();
