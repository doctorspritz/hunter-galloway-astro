<?php

if (is_active_sidebar('longtailux-widget')) : ?>
  <div id="header-widget-area" class="chw-widget-area widget-area container" role="complementary">
    <?php dynamic_sidebar('longtailux-widget'); ?>
  </div>

<?php endif; ?>
<div class="footer_adv">
  <div class="container">
    <div class="footer_adv_top">
      <ul class="hg_adv flex">
        <li>
          <div class="hg_adv_title">
            60%
          </div>
          <div class="hg_adv_text">
            average loan Approval Rate
          </div>
        </li>
        <li>
          <div class="hg_adv_title">
            97%
          </div>
          <div class="hg_adv_text">
            our loan Approval rate
          </div>
        </li>
        <li>
          <div class="hg_adv_title"> 2,000+
            <!-- <?php
                  $contents = file_get_contents("google_otz.txt");
                  $lines = explode("|", $contents);
                  foreach ($lines as $line) {
                    $linesfin = @explode("#", $line, 2)[0];
                    $linename = @explode("#", $line, 2)[1];

                    if ($linesfin == 'raiting') {
                      echo $linename;
                    }
                  }
                  ?> -->
          </div>
          <div class="hg_adv_text">
            5 star Reviews on google
          </div>
        </li>
        <!-- <li>
                    <div class="hg_adv_title">
                        $343M
                    </div>
                    <div class="hg_adv_text">
                        loaned from banks
                    </div>
                </li> -->
      </ul>
    </div>
    <div class="footer_adv_bottom flex">
      <p>We can find you the perfect home loan solution</p>
      <div>
        <a href="/get-free-assessment/" class="btn_yellow rc_open" style="line-height: 48px;">Request a Call</a>
        <p class="footer_video_text">or video call</p>
      </div>
    </div>
  </div>
</div>
<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action('et_after_main_content');

if ('on' === et_get_option('divi_back_to_top', 'false')) : ?>

  <span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if (!is_page_template('page-template-blank.php')) : ?>

  <footer id="main-footer">
    <?php get_sidebar('footer'); ?>

    <?php if (has_nav_menu('footer-menu')) : ?>
      <div id="et-footer-nav">
        <div class="container">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'depth'          => '1',
            'menu_class'     => 'bottom-nav',
            'container'      => '',
            'fallback_cb'    => '',
          ));
          ?>
        </div>
      </div> <!-- #et-footer-nav -->
    <?php endif; ?>
    <div id="footer-bottom">
      <div class="container clearfix">
        <?php
        if (false !== et_get_option('show_footer_social_icons', true)) {
          get_template_part('includes/social_icons', 'footer');
        }
        echo et_core_fix_unclosed_html_tags(et_core_esc_previously(et_get_footer_credits()));
        ?>
      </div> <!-- .container -->
    </div>
  </footer> <!-- #main-footer -->
  </div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) 
?>

</div> <!-- #page-container -->

<div class="footer_button">
  <a href='#' class="btn_yellow rc_open" style="line-height: 48px;font-weight:800;">
    Get a Free Assessment
  </a>
</div>

<?php wp_footer(); ?>

<style>
  /* display logo image */
  .header__logo img {
    display: block;
  }
</style>

<script src="/wp-content/themes/hunter-galloway/assets/js/swiper.min.js"></script>
<script src="/wp-content/themes/hunter-galloway/common.js?v=6.1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/customscript.js?ver=1.5"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>

<script>
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
</script>

<script>
  if (window.location.href.includes('get-free-assessment')) {
    document.querySelector('.footer_adv_bottom a').addEventListener('click', (e) => {
      scrollToSection(e, 'body')
    })

    document.querySelector('.footer_button a').addEventListener('click', (e) => {
      scrollToSection(e, 'body')
    })
  }

  (function($) {
    $(document).tooltip({
      position: {
        my: "left-50 bottom-20",
        at: "center top",
        using: function(position, feedback) {
          $(this).css(position);
          $("<div>")
            .addClass("arrow")
            .addClass(feedback.vertical)
            .addClass(feedback.horizontal)
            .appendTo(this);
        }
      }
    });

    //slider
    var swiper = new Swiper('.slider_holder', {
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.slider_holder .slide-button-next',
        prevEl: '.slider_holder .slide-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1299: {
          slidesPerView: 3,
        },
      },
    });

    var swiper2 = new Swiper('.slider_prize', {
      slidesPerView: 6,
      navigation: {
        nextEl: '.slider_prize .slide-button-next',
        prevEl: '.slider_prize .slide-button-prev',
      },

      breakpoints: {
        480: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        767: {
          slidesPerView: 3,
          spaceBetween: 15,
        },
        1023: {
          slidesPerView: 4,
        }
      }
    });

    function lendersSlider() {
      if (window.matchMedia('(max-width: 767px)').matches) {
        var swiper3 = new Swiper('.lenders_slider', {
          slidesPerView: 4.4,
          centerMode: true,
          navigation: {
            nextEl: '.lenders_slider .slide-button-next',
            prevEl: '.lenders_slider .slide-button-prev',
          },
          breakpoints: {
            480: {
              slidesPerView: 3.4,
              spaceBetween: 15,
            },
            640: {
              slidesPerView: 3.4,
              spaceBetween: 15,
            },
            767: {
              slidesPerView: 4.4,
              spaceBetween: 15,
            }
          }
        });
      }
    }
    lendersSlider();
    $(window).resize(function() {
      lendersSlider();
    });



    $(document).on("click", ".reviews_widget .btn_show_more", function() {
      $(this).closest('.slide_item').find('.show_more_text').slideToggle();
      $(this).closest('.slide_item').find('.dots').toggleClass('hide');
      $(this).toggleClass('less_text');
    })

  })(jQuery);
</script>
<?php if (!is_single()) { ?>
  <script>
    (function($) {
      window.addEventListener('scroll', function() {
        var sidebarScroll = window.pageYOffset;
        if (sidebarScroll >= 280) {
          $(".header__assessment-control").addClass('active');
        } else {
          $(".header__assessment-control").removeClass('active');
        };
      });


      $('.header__assessment-top').on('click', function() {
        $('body,html').animate({
            scrollTop: 0
          },
          800
        );
        return false;
      });

    })(jQuery);
  </script>
<?php }; ?>

<?php if (isset($_GET['bookNow'])) { ?>
  <script>
    PUM.open(11791);
  </script>
<?php }; ?>

<script type="text/javascript">
  (function($) {
    $(".pb_nap_slider_top.owl-carousel").owlCarousel({
      items: 1,
      nav: true,
      dots: false
    });

    $(".pb_nap_slider_middle.owl-carousel").owlCarousel({
      items: 1,
      nav: true,
      dots: false
    });

    $(".pb_nap_slider_bottom.owl-carousel").owlCarousel({
      items: 1,
      nav: true,
      dots: false
    });

    if (location.search.includes('active') && location.search.includes('quiz')) {
      $('.header_wrapper .old_head_cta').first().click();
      setTimeout(function() {
        $('.header_wrapper .old_head_cta').first().click();
      }, 100)
      setTimeout(function() {
        $('.header_wrapper .old_head_cta').first().click();
      }, 1000)
    }
  })(jQuery);
</script>


<!--$(window).height()-->

<script>
  // change default form: remove second step, after mortgage calculation
  function keradan_get_cookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  function keradan_set_cookie(name, value, options = {}) {
    if (!options.path) options.path = '/';

    if (options.expires instanceof Date) {
      options.expires = options.expires.toUTCString();
    }
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
      updatedCookie += "; " + optionKey;
      let optionValue = options[optionKey];
      if (optionValue !== true) {
        updatedCookie += "=" + optionValue;
      }
    }
    document.cookie = updatedCookie;
  }

  function keradan_delete_cookie(name) {
    setCookie(name, "", {
      'max-age': -1
    })
  }

  function main_form_update_after_mortgage_calculation() {
    if (!keradan_get_cookie('morgage_calculation_already_made')) return;

    let selects_selector = `select[name="menu-106"]`;
    document.querySelectorAll(selects_selector).forEach(function(select_el) {
      let option = select_el.querySelector('option[value="I want to refinance a loan"]');
      option.selected = true;
    });

    let buttons_selector = `.form_continue_block input.btn_yellow[type="submit"][value="Request a Call"]`;
    document.querySelectorAll(buttons_selector).forEach(function(el) {
      el.parentElement.style.display = "block";
    });

    let continue_buttons_selector = `#form_continue_open`;
    document.querySelectorAll(continue_buttons_selector).forEach(function(el) {
      el.parentElement.style.display = "none";
    });
  }
  main_form_update_after_mortgage_calculation();
</script>

<script>
  (function($) {
    window.loanAmountGlobal,
      window.depositGlobal,
      window.lvrGlobal,
      window.mailLoanAmount;

    window.depositDollarGlobal = 0;

    var isDoctor = false;
    var minLoan = 300000;
    var activeStep = '0';
    var successType = '';
    var failPurchase = '';
    var failMinDep = '';
    var quizErrors = {
      renovateUnable: [
        'Thank you for your interest.',
        'Here at Hunter Galloway, we have a dedicated specialist team to look after our more complicated loans.',
        'Due to the complex nature of building loans, we are only able to take on a limited number of these at one time.',
        'Unfortunately, our team is currently at maximum capacity.',
        'It would be irresponsible of us to take on your home loan at this time as we would not be able to give you the quality of service that you deserve.',
        'We would recommend contacting another mortgage broker to see if they have the capacity to assist with your loan.',
        "Sorry that we aren't able to help.",
      ],
      commercialUnable: [
        'Thank you for your interest.',
        'We are unable to assist with commercial or business loans at this time.',
        'Here at Hunter Galloway, we specialise in residential and investment loans. We have made a conscious decision to focus on helping with home loans where we believe we can deliver the most value.',
        'It would be irresponsible of us to take on your loan at this time as we would not be able to give you the quality of service that you deserve. We would recommend contacting a mortgage broker who specialises in these areas to see if they have capacity to assist with your loan. ',
        "Sorry that we aren't able to help.",
      ],
      commercialOrBusinessUnable: [
        'Thank you for reaching out to us.',
        'At Hunter Galloway, we specialise in residential and investment home loans, which allows us to focus on delivering the best possible outcomes for our clients in these areas.',
        'Unfortunately, we are not able to assist with commercial or business loans at this time.',
        'We believe it’s important that you work with a broker who specialises in commercial or business lending to ensure you receive the quality of service and expertise you deserve. We recommend reaching out to a mortgage broker experienced in this field who can better assist with your needs.',
        'We appreciate your understanding and are sorry we’re unable to help on this occasion.',
      ],
      refLowLoan: [
        'Thank you for your interest.',
        'Unfortunately, we are unable to assist with refinancing home loans with a total loan value under $300,000.',
        'We are committed to delivering an exceptional experience for each and every one of our customers. Because of this, we spend around 40 hours on average to process each loan application, regardless of the size of the loan.',
        'Due to the costs involved in this process, we need to set a minimum loan requirement so that we can keep our business running and help as many people as possible.',
        'We are working on improving our systems and processes so that it takes us less time to process home loans without sacrificing quality or service.',
        'In the meantime, it may be worth contacting another mortgage broker to see if they can assist with your loan, as every broker has a different cost structure and minimum loan requirements.',
        "Sorry that we aren't able to help.",
      ],
      hightLVR: [
        'Thank you for your interest.',
        'Your LVR should be under 80% in order to proceed with refinancing your loan. ',
        'Refinancing a loan with and LVR over 80% would require paying Lenders Mortgage Insurance (LMI). This  potentially adds thousands or tens of thousands of dollars in upfront costs to your mortgage. ',
        'Due to the costs involved, we find that our clients are rarely better off financially if they refinance a loan when LMI is required. We are committed to delivering the best service and outcomes for our customers, which is why we we do not take on these kinds of loans.',
        "Sorry that we aren't able to help.",
      ],
      lowDepositHome: [
        'Thank you for your interest.',
        'Based on your purchase price of <span class="fail-value-purchage"></span>, you would need a minimum of <span class="fail-min-dep"></span> to proceed.',
        'Our panel of lenders require a minimum deposit of <span class="quiz-min-dep">8%</span> in order to proceed with a home loan application.',
        "Fortunately, there may be other options available to you. You may be able to use government grants and schemes such as the <a href='https://www.huntergalloway.com.au/first-home-loan-deposit-scheme/'>First Home Loan Deposit Scheme</a>. You may also be able to apply for a <a href='https://www.huntergalloway.com.au/guarantor-home-loan/'>guarantor home loan</a>.",
        'We are not currently able to help with the First Home Loan Deposit Scheme or guarantor home loans as we have a dedicated team for these, and they are currently at maximum capacity.',
        'It would be irresponsible of us to take on your home loan as we would not be able to give you the quality of service that you deserve.',
        'However, other mortgage brokers may have more capacity to assist. We would recommend reaching out to another mortgage broker to see if they are able to help you with your home loan.',
        "Sorry that we aren't able to help.",
      ],
      lowLoanHome: [
        'Thank you for your interest.',
        'Unfortunately, we are unable to assist with home loans with a loan value under $300,000.',
        'We are committed to delivering an exceptional experience for each and every one of our customers. Because of this, we spend around 40 hours on average to process each loan application, regardless of the size of the loan.',
        'Due to the costs involved in this process, we need to set a minimum loan requirement so that we can keep our business running and help as many people as possible.',
        'We are working on improving our systems and processes so that it takes us less time to process home loans without sacrificing quality or service.',
        'In the meantime, it may be worth contacting another mortgage broker to see if they can assist with your loan, as every broker has a different cost structure and minimum loan requirements.',
        "Sorry that we aren't able to help.",
      ],
      lowDepositInvestor: [
        'Thank you for your interest.',
        'Based on your purchase price of <span class="fail-value-purchage"></span>, you would need a minimum of <span class="fail-min-dep">/span> to proceed. ',
        'Our panel of lenders require a minimum deposit of <span class="quiz-min-dep">12%</span> in order to proceed with an investment home loan application. ',
        "If you're looking for some tips on how to save your deposit faster, check out our Facebook community at the link below. We have a bunch of great resources that will help you.",
      ],
      lowLoanInvestor: [
        'Thank you for your interest.',
        'Unfortunately, we are unable to assist with investment home loans with a total loan value under $300,000.',
        'We are committed to delivering an exceptional experience for each and every one of our customers. Because of this, we spend around 40 hours on average to process each loan application, regardless of the size of the loan.',
        'Due to the costs involved in this process, we need to set a minimum loan requirement so that we can keep our business running and help as many people as possible.',
        'We are working on improving our systems and processes so that it takes us less time to process home loans without sacrificing quality or service.',
        'In the meantime, it may be worth contacting another mortgage broker to see if they can assist with your loan, as every broker has a different cost structure and minimum loan requirements.',
        "Sorry that we aren't able to help.",
      ],
      bridgComplicated: [
        'Thank you for your interest.',
        'Here at Hunter Galloway, we have a dedicated specialist team to look after our more complicated loans.',
        'Due to the complex nature of bridging and low documentation loans, we are only able to take on a limited number of these at at one time. Unfortunately, our team is currently at maximum capacity. ',
        'It would be irresponsible of us to take on your home loan at this time as we would not be able to give you the quality of service that you deserve.',
        'We would recommend contacting another mortgage broker to see if they have capacity to assist with your loan.',
        "Sorry that we aren't able to help.",
      ],
      badCredit: [
        'Thank you for your interest.',
        'Unfortunately, we are unable to assist with  loans for bad credit, defaults, or bankruptcy.  These types of loans require the use of a specialist lender and we do not have access to these on our panel of lenders.',
        "We would recommend reaching out to another broker to see if they can assist. Some brokers specialise in these types of loans and we'd recommend getting in contact with them.",
        'Alternatively, you could contact Latrobe Financials, Pepper Money, or Liberty Financial - these are the main lenders who can help with bad credit loans.',
        "Sorry that we aren't able to help.",
      ],
    };

    if (location.href.includes('home-loans-for-doctors')) {
      $('.quiz-step:not(.quiz-submit-form):not(.quiz-step_fail)').prepend(
        '<div class="quiz__caption quiz__caption-doctor">Exclusive interest rate discounts for doctors.</div>'
      );
      isDoctor = true;
      $('.quiz__caption-doctor').show();
      $('.quiz__side-original').remove();
      setTimeout(() => {
        $('.quiz__side-original').remove();
      }, 3000);
      $('.quiz__side').addClass('quiz__side_doctor');
      // $('.quiz__side-desk').attr(
      //   'src',
      //   'https://hgstagingsite.wpengine.com/wp-content/uploads/2019/07/home-loans-for-medical-professionals.jpg'
      // );
      // $('.quiz__side-mob').attr(
      //   'src',
      //   'https://hgstagingsite.wpengine.com/wp-content/uploads/2019/07/home-loans-for-medical-professionals.jpg'
      // );
    } else {
      $('.quiz__side-doctor').remove();
      setTimeout(() => {
        $('.quiz__side-doctor').remove();
      }, 3000);
    }

    $('.quiz-form__input').on('focus', function() {
      $(this).removeClass('quiz-form__input-error');
      if ($('.quiz-step.active').hasClass('quiz-step_price')) {
        $('.quiz-step.active .quiz-form__input').removeClass(
          'quiz-form__input-error'
        );
      }
      $('.quiz-step.active .quiz-form__input-error-text').remove();
    });

    $('.quiz-form__input_money').on('input', function() {
      $(this).val(
        numberWithCommas(
          $(this)
          .val()
          .replace(/[^0-9]/g, '')
        )
      );
      if ($('.quiz-step.active').data('type') == 'homePurchaseProperty') {
        calcPurchaseHome();
      } else if (
        $('.quiz-step.active').data('type') == 'investPurchaseProperty'
      ) {
        calcPurchaseInvest();
      } else if ($('.quiz-step.active').data('type') == 'refinance') {
        calcRefinance();
      }
    });

    $('.quiz-refresh, .quiz-btn__home').on('click', function(e) {
      e.preventDefault();
      if (location.pathname === '/') {
        refreshSteps();
        successType = '';
        if ($(this).hasClass('quiz-btn__home')) {
          $('#pum-11791 .pum-close').click();
        }

      } else {
        location.href = '/';
      }
    });

    $('.quiz-step_price-variant').on('click', function(e) {
      $(this).addClass('active').siblings('.active').removeClass('active');
      $('.quiz-btn__next').removeClass('quiz-btn__next_disabled');
      $(
        '.quiz-step_price-confirm.active .quiz-step_price-variants .quiz-form__input-error-text'
      ).remove();

      if ($(this).text() == 'YES') {
        $('.quiz-btn__next').click();
      }
    });

    $('#pum-11791 .pum-close').on('click', function() {
      setTimeout(() => {
        refreshSteps();
      }, 1500);
      successType = '';
    });

    $('.quiz .assessment-form__form')[0].addEventListener(
      'wpcf7mailsent',
      function(event) {
        const popup = $('#popmake-11791')
        $('.quiz-submit-form.active').removeClass('active');
        $('.quiz-step_success').addClass('active');
        $('.quiz__side-form').css('display', 'none');
        $('.quiz__side-cover').css('display', 'block');
        $('#popmake-11791').attr('data-active-slide', 'success');
        $('quiz-head__wrap').css('visibility', 'hidden');
        $('.quiz-head .quiz__title').html("Thank you for Enquiry!")
        $('.quiz-btn__back').css('display', 'none');
        $('.quiz__logo').css('display', 'block');
        $('.quiz-count').css('display', 'none');
      },
      false
    );

    $('.quiz-form__list-item').on('click', function(e) {
      e.preventDefault();
      $(this).find('input')[0].checked = true;
      $(this).addClass('active').siblings('.active').removeClass('active');
      $(this)
        .removeClass('quiz-form__list-item_error')
        .siblings('.quiz-form__list-item_error')
        .removeClass('quiz-form__list-item_error');
      $('.quiz-step.active .quiz-form__list_error').remove();
      $('.quiz-btn__next').click();
    });

    $('.quiz').on('click', function(e) {
      if (
        $(e.target).hasClass('quiz-form__group_money-drop') ||
        $(e.target).parents('.quiz-form__group_money-drop').length
      ) {
        return false;
      }
      $('.quiz-form__dropdown').slideUp();
    });

    $('.quiz-form__dropdown-item').on('click', function(e) {
      e.preventDefault();
      // $(this).find('input')[0].checked = true;
      var val = $(this).find('.quiz-form__dropdown-val').text();
      $(this).toggleClass('active').siblings('.active').removeClass('active');
      $(this)
        .parent()
        .slideToggle()
        .siblings('input')
        .val($(this).hasClass('active') ? val : '');

      if ($(this).hasClass('active')) {
        if ($(this).text().includes('more')) {
          $('.quiz-step.active .input-price-exact').focus();
          $('.quiz-step.active .quiz-tip_more-than').css('display', 'flex');
          // $('.quiz-step.active .quiz-tip_more-than').slideDown(function () {
          //   $(this).css('display', 'flex');
          // });
        } else {
          $('.quiz-step.active .input-price-exact').val('');
          // $('.quiz-step.active .quiz-tip_more-than').slideUp();
          $('.quiz-step.active .quiz-tip_more-than').css('display', 'none');
        }
        if ($('.quiz-step.active').data('type') == 'homePurchaseProperty') {
          calcPurchaseHome();
        } else if (
          $('.quiz-step.active').data('type') == 'investPurchaseProperty'
        ) {
          calcPurchaseInvest();
        }
      }
    });

    $('.input-price-aprox').on('click', function() {
      $(this).siblings('.quiz-form__dropdown').slideToggle();
      $('.quiz-step.active .quiz-tip__text-first').hide();
      $('.quiz-step.active .quiz-tip__text-second').show();
    });

    $('.input-price-aprox').keypress(function(e) {
      e.preventDefault();
    });

    $('.input-price-exact').on('input', function() {
      if ($(this).val()) {
        $('.quiz-step.active')
          .find('.quiz-form__dropdown-item.active')
          .removeClass('active');
        if (!$('.quiz-step.active .input-price-aprox').val().includes('more')) {
          $('.quiz-step.active .input-price-aprox').val('');
        }
      }
    });

    $('.quiz-btn__next').on('click', function() {
      const quizActiveStep = $('.quiz-count__active');
      if ($('.quiz-step.active').data('type')) {
        successType = $('.quiz-step.active').data('type');
      }

      if ($('.quiz-step.active .quiz-form__list-item').length) {
        if (!$('.quiz-step.active .quiz-form__list-item.active').length) {
          $('.quiz-step.active .quiz-form__list-item').addClass(
            'quiz-form__list-item_error'
          );

          $('.quiz-step.active .quiz-form__list_error').remove();

          $('.quiz-step.active .quiz-form__list').before(
            '<div class="quiz-form__list_error">Please select an option to continue</div>'
          );

          return false;
        }

        activeStep = $('.quiz-step.active .quiz-form__list-item.active').data(
          'value'
        );

        if ($('.quiz-step.active .quiz-form__list-item.active').data('type')) {
          successType = $('.quiz-step.active .quiz-form__list-item.active').data(
            'type'
          );
        }

        if (activeStep === '.quiz-submit-form' || activeStep === 'renovateUnable' || activeStep === 'commercialOrBusinessUnable') {
          const backBtn = $('.quiz-head .quiz-btn__back');
          const logo = $('.quiz-head .quiz__logo');

          backBtn.css('display', 'flex');
          logo.css('display', 'none');
          quizActiveStep.html('2');
        }

        if (activeStep === 'renovateUnable' || activeStep === 'commercialOrBusinessUnable') {
          $('#popmake-11791').attr('data-active-slide', 'renovate-unable');
        }

        if (activeStep === '.quiz-submit-form') {
          const popup = $('#popmake-11791')
          const side = $('.quiz__side');
          const sideCover = $('.quiz__side .quiz__side-cover');
          const sideForm = $('.quiz__side .quiz__side-form');
          sideCover.css('display', 'none');
          sideForm.css('display', 'block');

          if (popup) {
            popup.attr('data-active-slide', 'form');
          }


        }

        if (activeStep[0] == '.') {
          $('.quiz-head .quiz__title').html(
            "We'd love to help you with your loan."
          );

          $('.quiz__side-info .quiz__title').html(
            "We'd love to help you with your loan."
          );

          $('.quiz__side-info .quiz__title-caption').css('display', 'none');

          if (activeStep === '.quiz-submit-form') {

            const formTitle = `
            <div class="quiz__title-badge">Market-leading loan approval rate in Australia of <span>97%</span></div>
            <div class="quiz__title-text"><span>Get a home loan</span> with full guidance and expert assistance</div>
          `;

            $('.quiz-head .quiz__title').html(formTitle);

          }
          var quizSuccess = {
            homePurchaseProperty: [
              ['Loan type', 'Purchase A Property'],
              ['Property price', '$' + numberWithCommas(window.loanAmountGlobal)],
              ['Deposit required', '$' + numberWithCommas(window.depositGlobal)],
            ],
            investPurchaseProperty: [
              ['Loan type', 'Investment property'],
              ['Property price', '$' + numberWithCommas(window.loanAmountGlobal)],
              ['Deposit required', '$' + numberWithCommas(window.depositGlobal)],
            ],
            commercial: [
              ['Loan type', 'Commercial Or Business Loan'],
              ['Property price', '$' + numberWithCommas(window.loanAmountGlobal)],
              ['Deposit required', '$' + numberWithCommas(window.depositGlobal)],
            ],
            refinance: [
              ['Loan type', 'Refinance A Loan'],
              ['Loan amount', '$' + numberWithCommas(window.loanAmountGlobal)],
              ['LVR', window.lvrGlobal + '%'],
            ],
            build: [
              ['Loan type', 'Build'],

            ]
          };

          if ($('.quiz-step.active').data('step') == '0') {
            $('.quiz-step.active').removeClass('active');
            $(activeStep).addClass('active');
            $('.quiz-summary').remove();

            console.log('transactionType', quizSuccess);
            console.log('successType', successType);
            var transactionType = quizSuccess[successType][0][1];
            $('.quiz-form__input-type').val(transactionType);
            return false;
          }

          $('.quiz-summary__body').html('');

          var transactionType = quizSuccess[successType][0][1];
          var loanAmount = window.mailLoanAmount;
          var deposit = window.depositDollarGlobal;

          $('.quiz-form__input-type').val(transactionType);
          $('.quiz-form__input-loan').val(loanAmount);
          $('.quiz-form__input-deposit').val(deposit);

          quizSuccess[successType].forEach(function(text) {
            $('.quiz-summary__body').append(
              '<div class="quiz-summary__item"><div class="quiz-summary__item-caption">' +
              text[0] +
              '</div><div class="quiz-summary__item-value">' +
              text[1] +
              '</div></div>'
            );
          });

          // $('.quiz-form__input-total').val(finalText);

          $('.quiz-step.active').removeClass('active');
          $(activeStep).addClass('active');
          return false;
        }

        if ($('.quiz-step.active .quiz-form__list-item_fail.active').length) {
          openFailStep(activeStep);
          return false;
        }

        moveToStep(activeStep);
      } else if ($('.quiz-step_count.active').length) {
        if ($('.quiz-step.active .quiz-insert__value_empty').length) {
          $('.quiz-step.active .quiz-form__input-error-text').remove();

          $('.quiz-step.active .quiz-form__input_money').each(function(
            index,
            item
          ) {
            if (!$(item).val() || $(item).val() == 0) {
              $(item).addClass('quiz-form__input-error');
              $(item).after(
                '<div class="quiz-form__input-error-text">Please fill in the required field.</div>'
              );
            }
          });

          return false;
        }

        $('.quiz-step.active.quiz-form__input-error-text').remove();

        if ($('.quiz-step_count.active').attr('data-error')) {
          openFailStep($('.quiz-step_count.active').attr('data-error'));
          return false;
        }

        activeStep = $('.quiz-step.active').data('target');
        moveToStep(activeStep);
      } else if ($('.quiz-step_price.active').length) {
        $('.quiz-step.active .quiz-form__input-error-text').remove();
        $('.quiz-step.active .quiz-form__input_money').removeClass(
          'quiz-form__input-error'
        );

        if (
          (!$('.quiz-step.active .input-price-aprox').val() &&
            !$('.quiz-step.active .input-price-exact').val()) ||
          ($('.quiz-step.active .input-price-aprox').val().includes('more') &&
            !$('.quiz-step.active .input-price-exact').val())
        ) {
          $('.quiz-step.active .quiz-form__input_money').each(function(
            index,
            item
          ) {
            if (!$(item).val()) {
              $(item).addClass('quiz-form__input-error');
              $(item).after(
                '<div class="quiz-form__input-error-text">Please fill in the required field.</div>'
              );
            }
          });

          return false;
        }

        if ($('.quiz-step_price.active').attr('data-error')) {
          openFailStep($('.quiz-step_price.active').attr('data-error'));
          return false;
        }

        activeStep = $('.quiz-step.active').data('target');
        moveToStep(activeStep);
      } else if ($('.quiz-step_price-confirm.active').length) {
        $(
          '.quiz-step_price-confirm.active .quiz-step_price-variants .quiz-form__input-error-text'
        ).remove();
        if (
          !$('.quiz-step_price-confirm.active .quiz-step_price-variant.active')
          .length
        ) {
          $('.quiz-step_price-confirm.active .quiz-step_price-variants').append(
            '<div class="quiz-form__input-error-text">Please select</div>'
          );
          return false;
        }
        if (
          $('.quiz-step_price-confirm.active .quiz-step_price-variant.active')
          .text()
          .toLowerCase() === 'yes'
        ) {
          moveToForm();
          return false;

          moveToStep(activeStep);
        } else {
          if ($('.quiz-step.active').data('type') == 'homePurchaseProperty') {
            openFailStep($('.quiz-step.active').data('error'));
          } else if (
            $('.quiz-step.active').data('type') == 'investPurchaseProperty'
          ) {
            openFailStep($('.quiz-step.active').data('error'));
          }
        }
      }
    });

    $('.quiz-step_price-change').on('click', function() {
      $('.quiz-btn__back').click();
      $('.quiz-btn__next').removeClass('quiz-btn__next_disabled');
    });

    $('.quiz-btn__back').on('click', function(e) {
      e.preventDefault();
      const logo = $('.quiz-head .quiz__logo');
      const side = $('.quiz__side');
      const sideCover = $('.quiz__side .quiz__side-cover');
      const sideForm = $('.quiz__side .quiz__side-form');
      const quizActiveStep = $('.quiz-count__active');

      $('.quiz-btn__next').removeClass('quiz-btn__next_disabled');
      $('.quiz-step.active [type="radio"]:checked').removeAttr('checked');
      $('.quiz-form__list-item.active').removeClass('active');
      var step = '' + $('.quiz-step.active').data('step');

      const isForm = $('.quiz-step.active').hasClass('quiz-submit-form');
      if (isForm) {

        this.style.display = 'none';
        logo.css('display', 'block');
        sideCover.css('display', 'block');
        sideForm.css('display', 'none');
        quizActiveStep.html('1');

      }
      if ($('.quiz-step.active').hasClass('quiz-step_fail')) {
        logo.css('display', 'block');
        sideCover.css('display', 'block');
        sideForm.css('display', 'none');
        quizActiveStep.html('1');
        this.style.display = 'none';
        $('#popmake-11791').attr('data-active-slide', 'cover');

        $('.quiz-step.active').removeClass('active');
        $(
          ".quiz-step[data-step='" + $('.quiz-step_fail').data('back') + "']"
        ).addClass('active');
        return false;
      }

      $('.quiz-step.active').removeClass('active');
      if (step.length == '1') {
        $(".quiz-step[data-step='0']").addClass('active');
        $('.quiz__side-info .quiz__title, .quiz-head .quiz__title').html(
          'Get a Free Assessment'

        );

        $('#popmake-11791').attr('data-active-slide', 'cover');

      } else {
        var lastSteps = step.split('-');
        if (lastSteps[lastSteps.length - 1] == '1') {
          lastSteps.pop();
        } else {
          lastSteps[lastSteps.length - 1] =
            parseInt(lastSteps[lastSteps.length - 1]) - 1;

        }

        $(".quiz-step[data-step='" + lastSteps.join('-') + "']").addClass(
          'active'
        );
      }
    });

    function moveToForm() {
      $('.quiz-head .quiz__title').html(
        'You are eligible for a $' +
        numberWithCommas(window.loanAmountGlobal - window.depositGlobal) +
        ' home loan.'
      );

      var quizSuccess = {
        homePurchaseProperty: [
          ['Loan type', 'Purchase A Property'],
          ['Property price', '$' + numberWithCommas(window.loanAmountGlobal)],
          ['Deposit required', '$' + numberWithCommas(window.depositGlobal)],
        ],
        investPurchaseProperty: [
          ['Loan type', 'Investment property'],
          ['Property price', '$' + numberWithCommas(window.loanAmountGlobal)],
          ['Deposit required', '$' + numberWithCommas(window.depositGlobal)],
        ],
        refinance: [
          ['Loan type', 'Refinance A Loan'],
          ['Loan amount', '$' + numberWithCommas(window.loanAmountGlobal)],
          ['LVR', window.lvrGlobal + '%'],
        ],
      };

      $('.quiz-summary__body').html('');

      var transactionType = quizSuccess[successType][0][1];
      var loanAmount = window.mailLoanAmount;
      var deposit = window.depositDollarGlobal;

      $('.quiz-form__input-type').val(transactionType);
      $('.quiz-form__input-loan').val(loanAmount);
      $('.quiz-form__input-deposit').val(deposit);

      quizSuccess[successType].forEach(function(text) {
        $('.quiz-summary__body').append(
          '<div class="quiz-summary__item"><div class="quiz-summary__item-caption">' +
          text[0] +
          '</div><div class="quiz-summary__item-value">' +
          text[1] +
          '</div></div>'
        );
      });

      // $('.quiz-form__input-total').val(finalText);

      $('.quiz-step.active').removeClass('active');
      $('.quiz-submit-form').addClass('active');
    }

    function moveToStep(step) {
      $('.quiz-step.active').removeClass('active');
      $('.quiz-step[data-step="' + step + '"]').addClass('active');
      $('.quiz-btn__next').removeClass('quiz-btn__next_disabled');
      if (
        $('.quiz-step[data-step="' + step + '"]').hasClass(
          'quiz-step_price-confirm'
        ) &&
        !$('.quiz-step[data-step="' + step + '"] .quiz-step_price-variant.active')
        .length
      ) {
        $('.quiz-btn__next').addClass('quiz-btn__next_disabled');
      }

      if (isDoctor && (step == '1-1' || step == '1-2-2' || step == '2-1')) {
        $(
          '.quiz-step[data-step="' + step + '"] .quiz-form__list-item:last-child'
        ).click();
      }
      if (isDoctor) {
        $('.quiz-min-dep').text('5%');
      }
    }

    function openFailStep(name) {
      $('.quiz-step_fail .quiz__caption').html('');
      quizErrors[name].forEach(function(text) {
        $('.quiz-step_fail .quiz__caption').append('<p>' + text + '</p>');
      });
      if (failPurchase && failMinDep) {
        $('.fail-value-purchage').text('$' + numberWithCommas(failPurchase));
        $('.fail-min-dep').text('$' + numberWithCommas(failMinDep));
      }
      $('.quiz-step_fail').data('back', $('.quiz-step.active').data('step'));
      $('.quiz-step.active').removeClass('active');
      if (isDoctor) {
        $('.quiz-min-dep').text('5%');
      }
      $('.quiz-step_fail').addClass('active');
    }

    function refreshSteps() {

      $('.quiz__side-info .quiz__title, .quiz-head .quiz__title').html(
        'Get a Free Assessment'
      );
      $('.quiz__side-form').css('display', 'none');
      $('.quiz__side-cover').css('display', 'block');
      $('#popmake-11791').attr('data-active-slide', 'cover');
      $('.quiz__side-info .quiz__title-caption').css('display', 'block');
      $('.quiz-step_fail_social').removeClass('quiz-step_fail_social');
      $('.quiz-form__list-item.active').removeClass('active');
      $('.quiz-btn__back').css('display', 'none');
      $('.quiz__logo').css('display', 'block');
      $('.quiz-count').css('display', '');
      $('.quiz-count__active').html('1');
      $('.quiz-step').removeAttr('data-error');
      $('.quiz-form__input').val('');
      $('.quiz-insert__procent').addClass('quiz-insert__value_empty').text('');
      $('.quiz-insert__amount').addClass('quiz-insert__value_empty').text('');
      $('.quiz__body [type="radio"]:checked').removeAttr('checked');
      $('.quiz-form__dropdown-item.active').removeClass('active');
      $('.quiz-step_price-variant.active').removeClass('active');
      $('.quiz-step.active').removeClass('active');
      $('.quiz-step[data-step="0"]').addClass('active');
    }

    function calcRefinance() {
      var firstValue = parseFloat(
        $('.quiz-step.active .calc-input-first').val().replace(/,/g, '')
      );
      var secondValue = parseFloat(
        $('.quiz-step.active .calc-input-second').val().replace(/,/g, '')
      );
      if (!firstValue || !secondValue) {
        $('.quiz-step.active .quiz-insert__value')
          .addClass('quiz-insert__value_empty')
          .text('');
        return false;
      }

      $('.quiz-step.active .quiz-insert__value').removeClass(
        'quiz-insert__value_empty'
      );

      window.depositDollarGlobal = parseInt(secondValue);
      var lvr = parseInt((secondValue / firstValue) * 100);
      window.loanAmountGlobal = parseInt(secondValue);
      window.mailLoanAmount = parseInt(firstValue);
      window.lvrGlobal = lvr;

      $('.quiz-step.active .quiz-insert__procent').text(lvr + '%');
      $('.quiz-step.active .quiz-insert__amount').text(
        '$' + numberWithCommas(parseInt(secondValue))
      );

      if (secondValue < minLoan) {
        $('.quiz-step.active').attr('data-error', 'refLowLoan');
        $('.quiz-step.active .quiz-insert__amount')
          .addClass('quiz-insert__value_fail')
          .removeClass('quiz-insert__value_success');
      } else {
        $('.quiz-step.active .quiz-insert__amount')
          .addClass('quiz-insert__value_success')
          .removeClass('quiz-insert__value_fail');
      }

      if (lvr > 80) {
        $('.quiz-step.active .quiz-insert__procent')
          .addClass('quiz-insert__value_fail')
          .removeClass('quiz-insert__value_success');
        $('.quiz-step.active').attr('data-error', 'hightLVR');
        return false;
      } else {
        $('.quiz-step.active .quiz-insert__procent')
          .addClass('quiz-insert__value_success')
          .removeClass('quiz-insert__value_fail');
      }

      if (secondValue >= minLoan && lvr <= 80) {
        $('.quiz-step.active').removeAttr('data-error');
      }
    }

    function calcPurchaseHome() {
      console.log('calcPurchaseHome');
      var coefDep = 0.08;
      if (isDoctor) {
        $('.quiz-min-dep').text('5%');
        coefDep = 0.05;
      }

      var secondValue = parseFloat(
        $('.quiz-step.active .calc-input-second').val().replace(/,/g, '')
      );

      if (!secondValue && secondValue !== 0) {
        var secondValue = parseFloat(
          $('.quiz-step.active .calc-input-first').val().replace(/,/g, '')
        );
      }

      window.depositDollarGlobal = parseInt(secondValue * coefDep);
      window.loanAmountGlobal = secondValue;
      window.mailLoanAmount = parseInt(secondValue);
      window.depositGlobal = parseInt(secondValue * coefDep);


      // if (secondValue <= minLoan + parseInt(secondValue * coefDep)) {
      if (secondValue < minLoan) {
        $('.quiz-step.active').attr('data-error', 'lowLoanHome');
      }

      failPurchase = secondValue;
      failMinDep = parseInt(secondValue * coefDep);
      // if (secondValue > minLoan + parseInt(secondValue * coefDep)) {

      if (secondValue >= minLoan) {
        $('.quiz-step.active').removeAttr('data-error');

        $('.quiz-step_price-input').val('$' + numberWithCommas(secondValue));
        $('.quiz-step_price-deposit').text(
          '$' + numberWithCommas(parseInt(secondValue * coefDep))
        );
      }
    }

    function calcPurchaseInvest() {
      var coefDep = 0.12;
      if (isDoctor) {
        coefDep = 0.05;
      }

      var secondValue = parseFloat(
        $('.quiz-step.active .calc-input-second').val().replace(/,/g, '')
      );

      if (!secondValue && secondValue !== 0) {
        var secondValue = parseFloat(
          $('.quiz-step.active .calc-input-first').val().replace(/,/g, '')
        );
      }

      window.depositDollarGlobal = parseInt(secondValue * coefDep);
      window.loanAmountGlobal = secondValue;
      window.mailLoanAmount = parseInt(secondValue);
      window.depositGlobal = parseInt(secondValue * coefDep);

      if (secondValue <= minLoan + parseInt(secondValue * coefDep)) {
        $('.quiz-step.active').attr('data-error', 'lowLoanInvestor');
      }

      failPurchase = secondValue;
      failMinDep = parseInt(secondValue * coefDep);

      if (secondValue > minLoan + parseInt(secondValue * coefDep)) {
        $('.quiz-step.active').removeAttr('data-error');

        $('.quiz-step_price-input').val('$' + numberWithCommas(secondValue));
        $('.quiz-step_price-deposit').text(
          '$' + numberWithCommas(parseInt(secondValue * coefDep))
        );
      }
    }

    function numberWithCommas(x) {
      if (x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
      }
      return '';
    }
  })(jQuery);
</script>


<script>
  let waitFooter = setInterval(() => {
    if (!document.querySelector('footer #menu-footer + #custom_html-3') && document.querySelector('footer #menu-footer') && document.querySelector('footer #custom_html-3') && !window.matchMedia("(max-width: 991px)").matches) {
      clearInterval(waitFooter)
      document.querySelector('footer #menu-footer').after(document.querySelector('footer #custom_html-3'))
    }
  }, 200)
</script>


<!-- BEGIN PLERDY CODE -->
<script type="text/javascript" defer data-plerdy_code='1'>
  var _protocol = "https:" == document.location.protocol ? " https://" : " http://"
  _site_hash_code = "84fbb993ddaffd41d0fccd0f4fc93491", _suid = 22306, plerdyScript = document.createElement("script");
  plerdyScript.setAttribute("defer", ""), plerdyScript.dataset.plerdyMainScript = "plerdyMainScript",
    plerdyScript.src = "https://a.plerdy.com/public/js/click/main.js?v=" + Math.random();
  var plerdyMainScript = document.querySelector("[data-plerdyMainScript='plerdyMainScript']");
  plerdyMainScript && plerdyMainScript.parentNode.removeChild(plerdyMainScript);
  try {
    document.head.appendChild(plerdyScript)
  } catch (t) {
    console.log(t, "unable add script tag")
  }
</script>
<!-- END PLERDY CODE -->





</body>

</html>