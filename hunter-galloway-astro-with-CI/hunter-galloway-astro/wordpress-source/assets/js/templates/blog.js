//scroll up
document.querySelector('.btn_up').style.right =
  (window.innerWidth - document.querySelector('#main-content').clientWidth) / 2 + 'px';

document.querySelector('.btn_up').addEventListener('click', () => {
  jQuery(function ($) {
    $('html, body').animate(
      {
        scrollTop: 0,
      },
      250
    );
  });
});

//Deposit Calculator
document.querySelectorAll('.blog_row .hc_input_field input').forEach((item, index) => {
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

document.querySelector(
  '.blog_row #hc_deposit_calculator .hc_result_section .hc_result_row'
)?.after(
  document.querySelector(
    '.blog_row #hc_deposit_calculator .hc_result_section .hc_result_row .hc_info_txt'
  )
);

//header fixed
window.addEventListener('scroll', (e) => {
  if (window.scrollY > 20) {
    document.querySelector('header').classList.add('fixed');
    document.querySelector('header').style = '';
  } else {
    document.querySelector('header').classList.remove('fixed');
  }

  if (document.querySelector('#main-content').getBoundingClientRect().top < -100) {
    document.querySelector('.sidebar_content').classList.add('collapse');
  } else {
    document.querySelector('.sidebar_content').classList.remove('collapse');
  }

  if (
    document.querySelector('.single_banner').getBoundingClientRect().bottom < 0 &&
    document.querySelector('#main-footer').getBoundingClientRect().bottom >=
      window.innerHeight + 50
  ) {
    document.querySelector('.btn_up').classList.add('active');
  } else {
    document.querySelector('.btn_up').classList.remove('active');
  }
});
document.querySelector('.sidebar_content ul').addEventListener('scroll', (e) => {
  const element = e.target;
  const scrollPosition = element.scrollTop + element.clientHeight;
  const maxScroll = element.scrollHeight;

  if (scrollPosition >= maxScroll) {
    document.querySelector('.sidebar_content.collapse').classList.add('hide_gradient');
  } else {
    document.querySelector('.sidebar_content.collapse').classList.remove('hide_gradient');
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

const calculateValue = document.querySelector('[data-et_pb_calculate_value]');
if (calculateValue && calculateValue !== 1) {
  document.querySelectorAll('#et-main-area .btn_yellow').forEach((item) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();

      let value = e.currentTarget.parentElement.querySelector('input').value;

      if (document.querySelector('.hntr_calculators') && document.querySelector('#hcdc_deposit')) {
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
      } else if (document.querySelector('.elementor-widget-shortcode #equity_loan_amount')) {
        jQuery(function ($) {
          $('html, body').animate(
            {
              scrollTop: $('.elementor-widget-shortcode').offset().top - 171,
            },
            250
          );
        });
        document.querySelector('.elementor-widget-shortcode #equity_loan_amount').value = value;
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
  var headings = document.querySelectorAll(
    '#main-content h2.elementor-heading-title'
  );
  var tocItems = document.querySelectorAll(
    '.sidebar_content .elementor-toc__list-item a'
  );

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
          let leftStyleSlider = document.querySelector('#hc_down_slider .noUi-origin').style.left;

          console.log(leftStyleSlider);
          document.querySelector('#hc_down_slider_result').style.left = leftStyleSlider;
        }
      }
    });

    //Table of Contents
    if (
      document.querySelector('.elementor-widget-table-of-contents ul li a') &&
      document.querySelector('.sidebar_content ul').innerHTML == ''
    ) {
      document.querySelector('.sidebar_content ul').innerHTML = document.querySelector(
        '.elementor-widget-table-of-contents ul'
      ).innerHTML;
      document.querySelector('.sidebar').style = '';

      document.querySelectorAll('.sidebar_content a').forEach((element, index) => {
        element.addEventListener('click', (e) => {
          e.preventDefault();

          element
            .closest('ul')
            .querySelector('.elementor-item-active')
            ?.classList.remove('elementor-item-active');
          element.classList.add('elementor-item-active');

          jQuery(function ($) {
            $('html, body').animate(
              {
                scrollTop:
                  $('h2.elementor-heading-title').eq(index).offset().top - 75,
              },
              250
            );
          });
        });
      });
    }

    if (
      document.querySelector('.blog_row #hc_deposit_calculator a.hc_result_button') &&
      !document.querySelector(
        '.blog_row #hc_deposit_calculator .hc_result_section .hc_info_txt + .blog_row #hc_deposit_calculator a.hc_result_button'
      )
    ) {
      //Deposit Calculator
      document.querySelector(
        '.blog_row #hc_deposit_calculator .hc_result_section .hc_info_txt'
      ).after(document.querySelector('.blog_row #hc_deposit_calculator a.hc_result_button'));
    }

    if (localStorage.getItem('scrollTo') != null) {
      let value = localStorage.getItem('scrollTo');

      if (document.querySelector('.elementor-widget-shortcode #equity_loan_amount')) {
        jQuery(function ($) {
          $('html, body').animate(
            {
              scrollTop: $('.elementor-widget-shortcode').offset().top - 171,
            },
            250
          );
        });
        document.querySelector('.elementor-widget-shortcode #equity_loan_amount').value =
          localStorage.getItem('scrollTo');

        localStorage.removeItem('scrollTo');
      }

      if (document.querySelector('.hntr_calculators') && document.querySelector('#hcdc_deposit')) {
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
