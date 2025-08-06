//scroll up
const btnUp = document.querySelector('.btn_up');
if (btnUp) {
  btnUp.style.right =
    (window.innerWidth - document.querySelector('#main-content').clientWidth) /
      2 +
    'px';
}

document.querySelector('.btn_up').addEventListener('click', (e) => {
  e.preventDefault();
  jQuery(function ($) {
    $('html, body').animate(
      {
        scrollTop: 0,
      },
      300
    );
  });
});

//Deposit Calculator
document
  .querySelectorAll('.blog_row .hc_input_field input')
  .forEach((item, index) => {
    let parent = item.parentElement;
    if (item.id == 'hcdc_deposit') {
      parent.setAttribute('data-title', '$');
      item
        .closest('.hc_input_row')
        .querySelectorAll('.hc_input_cell .hc_input_label')[index].innerHTML =
        'Deposit <span>(required)</span>';
    } else if (item.id == 'hcdc_rate') {
      parent.setAttribute('data-title', '%');
      item
        .closest('.hc_input_row')
        .querySelectorAll('.hc_input_cell .hc_input_label')[index].innerHTML =
        'Rate <span>(required)</span>';
    } else if (item.id == 'hcdc_term') {
      parent.setAttribute('data-title', 'Yrs');
      item
        .closest('.hc_input_row')
        .querySelectorAll('.hc_input_cell .hc_input_label')[index].innerHTML =
        'Term <span>(required)</span>';
    }
  });

if (
  document.querySelector('.blog_row #hc_deposit_calculator a.hc_result_button')
) {
  document
    .querySelector(
      '.blog_row #hc_deposit_calculator .hc_result_section .hc_result_row'
    )
    .after(
      document.querySelector(
        '.blog_row #hc_deposit_calculator .hc_result_section .hc_result_row .hc_info_txt'
      )
    );
}

//header fixed
window.addEventListener('scroll', (e) => {
  if (window.scrollY > 20) {
    document.querySelector('header').classList.add('fixed');
    document.querySelector('header').style = '';
  } else {
    document.querySelector('header').classList.remove('fixed');
  }
  if (window.innerWidth > 768) {
    if (
      document.querySelector('.new_banner').getBoundingClientRect().top <=
        100 &&
      document.querySelector('#main-footer')?.getBoundingClientRect().bottom >=
        window.innerHeight + 50
    ) {
      document.querySelector('.btn_up').classList.add('active');
    } else {
      document.querySelector('.btn_up').classList.remove('active');
    }
  } else {
    if (
      document.querySelector('.hero_widget').getBoundingClientRect().bottom <=
        window.innerHeight / 2 &&
      document.querySelector('#main-footer')?.getBoundingClientRect().bottom >=
        window.innerHeight + 50
    ) {
      document.querySelector('.btn_up').classList.add('active');
    } else {
      document.querySelector('.btn_up').classList.remove('active');
    }
  }

  if (isMobile) {
    const btnformWrapper = document.querySelector(
      '.blog_row #hc_deposit_calculator a.hc_result_button'
    );
    const formWrapper = document.querySelector(
      '.blog_row #hc_deposit_calculator'
    );

    if (btnformWrapper && formWrapper) {
      const formWrapperRect = formWrapper.getBoundingClientRect();
      const btnformWrapperRect = btnformWrapper.getBoundingClientRect();

      const windowHeight =
        window.innerHeight || document.documentElement.clientHeight;

      if (
        formWrapperRect.top < windowHeight &&
        btnformWrapperRect.bottom > 75
      ) {
        document.querySelector('.footer_button').hidden = true;
      } else {
        document.querySelector('.footer_button').hidden = false;
      }
    }
  }
});

// calculate banner/sidebar
document.querySelectorAll('.input-banner').forEach((item) => {
  item.addEventListener('input', (e) => {
    document.querySelectorAll('.input-banner').forEach((el) => {
      el.value = e.target.value;
    });
  });
});

function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

//mut
const optionMut = {
  childList: true,
  subtree: true,
  attributeFilter: ['style'],
};

const globalMutation = new MutationObserver((mutations) => {
  if (!document.querySelector('.elementor-editor-active')) {
    //Deposit Calculator
    mutations.forEach((mutation) => {
      if (mutation.attributeName === 'style') {
        const element = mutation.target;
        if (element.matches('#hc_down_slider .noUi-origin')) {
          let leftStyleSlider = document.querySelector(
            '#hc_down_slider .noUi-origin'
          ).style.left;
          document.querySelector('#hc_down_slider_result').style.left =
            leftStyleSlider;
        }
      }
    });

    if (
      document.querySelector(
        '.blog_row #hc_deposit_calculator a.hc_result_button'
      ) &&
      !document.querySelector(
        '.blog_row #hc_deposit_calculator .hc_result_section .hc_info_txt + .blog_row #hc_deposit_calculator a.hc_result_button'
      )
    ) {
      //Deposit Calculator
      document
        .querySelector(
          '.blog_row #hc_deposit_calculator .hc_result_section .hc_info_txt'
        )
        .after(
          document.querySelector(
            '.blog_row #hc_deposit_calculator a.hc_result_button'
          )
        );
    }

    if (localStorage.getItem('scrollTo') != null) {
      let value = localStorage.getItem('scrollTo');

      if (
        document.querySelector(
          '.elementor-widget-shortcode #equity_loan_amount'
        )
      ) {
        jQuery(function ($) {
          $('html, body').animate(
            {
              scrollTop: $('.elementor-widget-shortcode').offset().top - 171,
            },
            250
          );
        });
        document.querySelector(
          '.elementor-widget-shortcode #equity_loan_amount'
        ).value = localStorage.getItem('scrollTo');

        localStorage.removeItem('scrollTo');
      }

      if (
        document.querySelector('.hntr_calculators') &&
        document.querySelector('#hcdc_deposit')
      ) {
        jQuery(function ($) {
          $('html, body').animate(
            {
              scrollTop: $('.hntr_calculators').offset().top - 75,
            },
            250
          );
        });

        if (value != '') {
          document.querySelector('#hcdc_deposit').value = value;
        }
        localStorage.removeItem('scrollTo');
      }
    }

    globalMutation.disconnect();

    globalMutation.observe(document.body, optionMut);
  }
});

globalMutation.observe(document.body, optionMut);

const waitElement = setInterval(() => {
  if (
    document.querySelector(
      '[data-widget_type*="table-of-contents"] .elementor-toc__header h4'
    )
  ) {
    clearInterval(waitElement);
    document
      .querySelector(
        '[data-widget_type*="table-of-contents"] .elementor-toc__header h4'
      )
      .insertAdjacentHTML('afterbegin', `<?= $iconContent ?>`);
  }
}, 1000);

const waitContent = setTimeout(() => {
  const contentH = document.querySelectorAll(
    '#main-content h2, #main-content h3'
  ).length;
  if (contentH > 0) {
    clearInterval(waitContent);
    const calc = document.querySelector('.insert_calc').innerHTML;
    document
      .querySelectorAll(
        '#main-content h2, #main-content h3, #main-content h4'
      )[2]
      .closest('.elementor-element')
      .insertAdjacentHTML(
        'beforebegin',
        `<div class="insert_calc">${calc}</div>`
      );

    const banners = [
      {
        text: 'Are you actually ready to buy your first home?',
        button: "Find out if you're eligible for a loan",
      },
      {
        text: 'Our checklist to maximize your chances of securing a loan',
        button: 'See our checklist',
      },
      {
        text: 'What is the process of applying for a loan?',
        button: 'Explore our roadmap',
      },
      {
        text: 'Find out what options you have',
        button: 'Get your free credit rating assessment',
      },
      {
        text: 'Learn if you are eligible for a loan',
        button: 'Discover your individual borrowing capacity',
      },
    ];

    const banner = (data, step) => {
      return /* HTML */ `<div class="content_banner">
        <p>${data.text}</p>
        <a
          href="#"
          class="btn_yellow ${step === 1 || step === 2
            ? 'keradan'
            : 'rc_open A-trigger pum-trigger'}"
          ${step === 1 || step === 2
            ? `onclick="keradan.mbb.show_popup('${
                step === 1 ? 'checklist' : 'roadmap'
              }'); return false;"`
            : ''}
          >${data.button}</a
        >
      </div>`;
    };
    const headers = document.querySelectorAll(
      '#main-content h2, #main-content h3, #main-content h4'
    );
    const headersLength = headers.length;
    let step = Math.floor(headersLength / 6);

    if (step < 4) {
      step = 4;
    } else if (step > 8) {
      step = 8;
    }

    let currentStep = 0;

    document
      .querySelectorAll('#main-content h2, #main-content h3, #main-content h4')
      .forEach((item, index) => {
        if ((index + 1) % step == 0 && index != step - 1 && currentStep < 5) {
          if (item.closest('.elementor-element').dataset.banner === 'true') {
            item
              .closest('.elementor-element')
              .nextElementSibling.insertAdjacentHTML(
                'beforebegin',
                banner(banners[currentStep], currentStep)
              );
            item.closest(
              '.elementor-element'
            ).nextElementSibling.dataset.banner = 'true';
            currentStep++;
            return;
          }
          item
            .closest('.elementor-element')
            ?.insertAdjacentHTML(
              'beforebegin',
              banner(banners[currentStep], currentStep)
            );
          item.closest('.elementor-element').dataset.banner = 'true';
          currentStep++;
        }
      });
  }
}, 2000);

const waitFooter1 = setInterval(() => {
  if (document.querySelector('.footer_button')) {
    clearInterval(waitFooter1);
    document
      .querySelector('.footer_button')
      .insertAdjacentHTML(
        'afterbegin',
        '<p><b>Get a home loan</b> with expert assistance</p>'
      );
  }
}, 500);
