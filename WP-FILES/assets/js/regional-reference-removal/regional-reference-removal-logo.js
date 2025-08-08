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

    const waitForElement = (selector) => {
      return new Promise((resolve) => {
        if (document.querySelector(selector)) {
          return resolve(document.querySelector(selector));
        }

        const observer = new MutationObserver(() => {
          if (document.querySelector(selector)) {
            resolve(document.querySelector(selector));
            observer.disconnect();
          }
        });

        observer.observe(document.documentElement, {
          childList: true,
          subtree: true,
          characterData: true,
        });
      });
    };

    if (!isFirstPage) return;
    const logo = document.querySelector('header .header__logo img');

    // Update the src of the logo in the header
    if (logo) {
      logo.src =
        '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg';
    }

    waitForElement('header .header__logo img').then((logo) => {
      if (logo) {
        logo.src =
          '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg';
      }
    });
  } catch (error) {
    console.error('Error updating logo:', error);
  }
})();
