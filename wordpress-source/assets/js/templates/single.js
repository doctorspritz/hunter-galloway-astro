//scroll up
document.querySelector('.btn_up').style.right =
  (window.innerWidth - document.querySelector('#main-content').clientWidth) /
    2 +
  'px';

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
  setTimeout(() => {
    if (document.querySelector('.sidebar_content a.elementor-item-active')) {
      document
        .querySelector('.sidebar_content a.elementor-item-active')
        .classList.remove('elementor-item-active');
    }
  }, 300);
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


// Banner
window.addEventListener('scroll', (e) => {


  if (
    document.querySelector('.single_banner').getBoundingClientRect().bottom <
      0 &&
    document.querySelector('#main-footer').getBoundingClientRect().bottom >=
      window.innerHeight + 50
  ) {
    document.querySelector('.btn_up').classList.add('active');
  } else {
    document.querySelector('.btn_up').classList.remove('active');
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
  } else {
    if (
      document.querySelector('#main-content').getBoundingClientRect().top < -100
    ) {
      document.querySelector('.sidebar_content').classList.add('collapse');
      setGradient(document.querySelector('.sidebar_content ul'));
    } else {
      document.querySelector('.sidebar_content').classList.remove('collapse');
    }
  }
});

//Table of Contents
function setGradient(target) {
  const scrollPosition = target.scrollTop + target.clientHeight;
  const maxScroll = target.scrollHeight;

  if (scrollPosition >= maxScroll) {
    document.querySelector('.sidebar_content').classList.add('hide_gradient');
  } else {
    document
      .querySelector('.sidebar_content')
      .classList.remove('hide_gradient');
  }
}

document
  .querySelector('.sidebar_content ul')
  .addEventListener('scroll', (e) => {
    setGradient(e.target);
  });

console.log(
  '.blog_row h2 length: ' + document.querySelectorAll('.blog_row h2').length
);
document.querySelectorAll('.blog_row h2').forEach((item, index) => {
  document
    .querySelector('.sidebar_content ul')
    .insertAdjacentHTML(
      'beforeend',
      `<li><a href="#elementor-toc__heading-anchor-${index}">${item.innerText}</a></li>`
    );
});

document.querySelector('.sidebar_content').classList.remove('loading');

document.querySelectorAll('.sidebar_content a').forEach((item, index) => {
  item.addEventListener('click', (e) => {
    e.preventDefault();

    document
      .querySelector('.elementor-item-active')
      ?.classList.remove('elementor-item-active');
    e.target.classList.add('elementor-item-active');

    jQuery(function ($) {
      $('html, body').animate(
        {
          scrollTop: $('.blog_row h2').eq(index).offset().top - 75,
        },
        500
      );
    });
  });
});

// calculate banner/sidebar
document.querySelectorAll('.input-banner').forEach((item) => {
  item.addEventListener('input', (e) => {
    document.querySelectorAll('.input-banner').forEach((el) => {
      el.value = e.target.value;
    });
  });
});

const calculateValue = document.querySelector('[data-et_pb_calculate_value]');
if (calculateValue && calculateValue !== 1) {
  document.querySelectorAll('#et-main-area .btn_yellow').forEach((item) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();

      let value = e.currentTarget.parentElement.querySelector('input').value;

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
      } else if (
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
        ).value = value;
      } else if (document.querySelector('.mercuryCalculator')) {
        jQuery(function ($) {
          $('html, body').animate(
            {
              scrollTop: $('.mercuryCalculator').offset().top - 171,
            },
            250
          );
        });
      } else {
        localStorage.setItem('scrollTo', value);
        window.open(e.currentTarget.href, '_blank');
      }
    });
  });
}

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

function setActiveTOCItem() {
  var headings = document.querySelectorAll('#main-content h2');
  var tocItems = document.querySelectorAll('.sidebar_content a');

  var visibleIndex = -1;

  headings.forEach(function (heading, index) {
    if (isElementInViewport(heading) && visibleIndex === -1) {
      visibleIndex = index;
    }
  });

  if (visibleIndex !== -1) {
    tocItems.forEach(function (item, index) {
      if (index === visibleIndex) {
        item.classList.add('elementor-item-active');
      } else {
        item.classList.remove('elementor-item-active');
      }
    });
  }
}

document.addEventListener('scroll', setActiveTOCItem);

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
