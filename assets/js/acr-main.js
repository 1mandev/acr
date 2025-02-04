/*---------------------------
    => preloader
-----------------------------*/
$(document).ready(function() {
  // Fakes the loading setting a timeout
  setTimeout(function() {
    $('body').addClass('loaded');
  }, 500);
});

/*---------------------------
    => bannner-add
-----------------------------*/
$(document).ready(function() {
  $('#banner-add__form').hide();
  $('.add-banner__button button').click(function() {
    $('#banner-add__form').fadeIn('slow');
    $('.add-banner__button button').fadeOut('slow');
  });
});

/*---------------------------
    => navbar
-----------------------------*/
$(document).ready(function() {
  $('body').addClass('js');
  var $menu = $('#menu'),
    $menulink = $('.menu-link'),
    $menuTrigger = $('.has-subnav > a');

  $menulink.click(function(e) {
    e.preventDefault();
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
  });

  var add_toggle_links = function() {
    if ($('.menu-link').is(':visible')) {
      if ($('.toggle-link').length > 0) {
      } else {
        $('.has-subnav > a').before(
          '<span class="toggle-link"> Open submenu </span>'
        );
        $('.toggle-link').click(function(e) {
          var $this = $(this);
          $this
            .toggleClass('active')
            .siblings('ul')
            .toggleClass('active');
        });
      }
    } else {
      $('.toggle-link').empty();
    }
  };
  add_toggle_links();
  $(window).bind('resize', add_toggle_links);
});

/*---------------------------
    => sidebar-add
-----------------------------*/
$(document).ready(function() {
  $('.add-sidebar__form').hide();
  $('.sidebar__add--content').show();

  $('.add-sidebar__button button').click(function() {
    $('.add-sidebar__form').fadeIn('slow');
  });

  if($('.edit-sidebar__form').length){
    $('#editsidebar__hide').hide();
  }
});


/*---------------------------
    => back-to-top
-----------------------------*/
$(window).scroll(function() {
  if ($(this).scrollTop() > 300) {
    $('.back-to-top').addClass('show-back-to-top');
  } else {
    $('.back-to-top').removeClass('show-back-to-top');
  }
});

$('.back-to-top').click(function() {
  $('html, body').animate({ scrollTop: 0 }, 800);
  return false;
});

/*---------------------------
    => load-more
-----------------------------*/
$(document).ready(function() {
  $('.masonry-not-columns a')
    .slice(16)
    .hide();

  let limit = 16;
  if ($('.masonry-not-columns a:hidden').length != 0) {
    $('.loadmore__button').show();
  }
  $('.loadmore__button').on('click', function(e) {
    e.preventDefault();
    // limit += 5;
    $('.masonry-not-columns a:hidden')
      .slice(0, limit)
      .slideDown();
    if ($('.masonry-not-columns a:hidden').length == 0) {
      $('.loadmore__button').fadeOut('slow');
    }
  });
});

/*---------------------------
    => slick
    => featured section
-----------------------------*/
$(document).ready(function() {
  $('.featured__slider').slick({
    rows: 2,
    slidesPerRow: 4,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesPerRow: 3
        }
      },
      {
        breakpoint: 610,
        settings: {
          slidesPerRow: 2
        }
      },
      {
        breakpoint: 450,
        settings: {
          slidesPerRow: 1
        }
      }
    ]
  });

  $('.image__slider').slick({
    rows: 2,
    slidesPerRow: 4,
    arrows: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesPerRow: 3
        }
      },
      {
        breakpoint: 610,
        settings: {
          slidesPerRow: 2
        }
      },
      {
        breakpoint: 430,
        settings: {
          slidesPerRow: 1
        }
      }
    ]
  });
});

/*---------------------------
    => check-button
-----------------------------*/
const checkBoxReward = document.querySelector('#reward-checkbox'),
  checkBoxFeaturedReward = document.querySelector('#featured-reward-checkbox'),
  emailField = document.querySelector('#Email'),
  phoneField = document.querySelector('#Phone');

function requiredField(checkBox) {
  checkBox.addEventListener('change', () => {
    emailField.toggleAttribute('required');
    phoneField.toggleAttribute('required');
  });
}

requiredField(checkBoxReward);
requiredField(checkBoxFeaturedReward);

/*---------------------------
    => popup
-----------------------------*/
jQuery(document).ready(function($) {
  //open popup
  if ($('.popup-trigger').length) {
    $('.popup').addClass('is-visible');

    //close popup
    $('.popup').on('click', function(event) {
      if ($(event.target).is('.popup-close') || $(event.target).is('.popup')) {
        event.preventDefault();
        $(this).removeClass('is-visible');
      }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function(event) {
      if (event.which == '27') {
        $('.popup').removeClass('is-visible');
      }
    });
  }
});
