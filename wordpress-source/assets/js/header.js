(function ($) {
  if ($(window).width() < 992) {
    $('.header__nav-dropdown').on('click', function (e) {
      $('.header__navbar-title').text(
        $(this).find('.header__nav-link').first().text()
      );
      if ($(window).width() < 992) {
        $(this)
          .siblings('.header__nav-dropdown.active')
          .removeClass('active')
          .find('.header__subnav')
          .removeClass('active');
      } else {
        $(this)
          .siblings('.header__nav-dropdown.active')
          .removeClass('active')
          .find('.header__subnav')
          .slideToggle();
      }

      if (!e.target.closest('.header__subnav')) {
        e.preventDefault();
        console.log(1);
        $(this).toggleClass('active');
        if ($(window).width() < 992) {
          $(this).find('.header__subnav').addClass('active');
        } else {
          $(this).find('.header__subnav').slideToggle();
        }
        $('.header__navbar-back').removeClass('hide');
      }
    });
  } else {
    $('.header__nav-dropdown .header__nav-link').on('click', function (e) {
      e.preventDefault();
    });
    $('.header__nav-dropdown')
      .on('mouseenter', function (e) {
        $(this)
          .siblings('.active')
          .removeClass('active')
          .find('.header__subnav')
          .slideUp('fast');
        $(this).addClass('active');
        $(this).find('.header__subnav').slideDown('fast');
      })
      .on('mouseleave', function (e) {
        setTimeout(() => {
          if (!$(this).is(':hover')) {
            $(this).removeClass('active');
            $(this).find('.header__subnav').slideUp('fast');
          }
        }, 900);
      });
  }

  $('.header__navbar-back').on('click', function (e) {
    e.preventDefault();
    $(this).addClass('hide');
    if ($(window).width() < 992) {
      $('.header__nav-dropdown.active')
        .removeClass('active')
        .find('.header__subnav')
        .removeClass('active');
    } else {
      $('.header__nav-dropdown.active')
        .removeClass('active')
        .find('.header__subnav')
        .slideToggle();
    }
    $('.header__navbar-title').text('Menu');
  });

  $('.header__menu-trigger').on('click', function (e) {
    e.preventDefault();
    $('.header__navbar-inner').addClass('active');
    // $('.header__navbar-inner').slideDown();
  });

  $('.header__navbar-close').on('click', function (e) {
    e.preventDefault();
    if (document.querySelector('.header__nav-dropdown.active')) {
      $('.header__nav-dropdown.active')
        .removeClass('active')
        .find('.header__subnav')
        .removeClass('active');
      $('.header__navbar-inner').removeClass('active');
      // .slideUp(function(){
      $('.header__navbar-title').text('Menu');
      $('.header__navbar-back').addClass('hide');
      // });
      // });
    } else {
      $('.header__navbar-inner').removeClass('active');
      // .slideUp(function(){
      $('.header__navbar-title').text('Menu');
      $('.header__navbar-back').addClass('hide');
      // });
    }
  });

  $('.header__search-toggle').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this)
        .siblings('.header__search-form')
        .find('input')
        .removeClass('active');
      $(this).siblings('.header__search-form').animate(
        {
          left: '97%',
          right: '0px',
          opacity: '0',
        },
        500
      );
      $(this).toggleClass('active');
      return false;
    }
    $(this).toggleClass('active');
    var leftOffset = '-10px';
    var rightOffser = '0px';
    if ($(window).width() < 992) {
      var leftOffset = '17px';
      var rightOffset = '17px';
    }
    $(this)
      .siblings('.header__search-form')
      .show()
      .animate(
        {
          left: leftOffset,
          right: rightOffset,
          opacity: '1',
        },
        500,
        function () {
          $(this).find('input').focus();
        }
      );
  });
})(jQuery);

//header fixed
const toggleHeaderFixed = () => {
  if (window.scrollY > 20) {
    document.querySelector('header').classList.add('fixed');
    document.querySelector('header').style = '';
  } else {
    document.querySelector('header').classList.remove('fixed');
  }
};
toggleHeaderFixed();

// window.addEventListener('scroll', (e) => {
//   toggleHeaderFixed();

//   if (
//     document.querySelector('.single_banner') && document.querySelector('.single_banner').getBoundingClientRect().bottom <
//       0 &&
//     document.querySelector('#main-footer').getBoundingClientRect().bottom >=
//       window.innerHeight + 50
//   ) {
//     document.querySelector('.btn_up').classList.add('active');
//   } else {
//     document.querySelector('.btn_up').classList.remove('active');
//   }
// });
