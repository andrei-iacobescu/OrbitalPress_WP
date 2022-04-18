

jQuery(document).ready(function($){
  $('.main-carousel-wrapper-one').not('.slick-initialized').slick({
        centerMode: true,
        centerPadding: '0px',
        margin: '0px',
        slidesToShow: 1,
        arrows: false,
        autoplay: true,
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
    });
  
  


  $('.carousel-one').not('.slick-initialized').slick({
        centerMode: true,
        centerPadding: '0px',
        margin: '0px',
        slidesToShow: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3500,
        // fade: true,
        cssEase: 'linear',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
    });

  $('.carousel-two').not('.slick-initialized').slick({
        centerMode: true,
        centerPadding: '0px',
        margin: '0px',
        slidesToShow: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3700,
        // fade: true,
        cssEase: 'linear',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
    });


  $('.carousel-three').not('.slick-initialized').slick({
        centerMode: true,
        centerPadding: '0px',
        margin: '0px',
        slidesToShow: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3300,
        // fade: true,
        cssEase: 'linear',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
    });


  $('.never-miss-carousel').slick({
      centerMode: true,
      centerPadding: '0px',
      margin: '0px',
      slidesToShow: 1,
  
      arrows: true,
      nextArrow: '<i class="far fa-caret-square-right"></i>',
      prevArrow: '<i class="far fa-caret-square-left"></i>',
      autoplay: true,
      pauseOnHover: true,
      autoplaySpeed: 2000,
      // fade: true,
      // cssEase: 'linear',
      responsive: [
  {
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 1
    }
  }
]
  });

  $('#most-popular-carousel').slick({
    centerMode: true,
    centerPadding: '0px',
    margin: '0px',
    slidesToShow: 1,

    arrows: true,
    nextArrow: '<i class="far fa-caret-square-right"></i>',
    prevArrow: '<i class="far fa-caret-square-left"></i>',
    autoplay: true,
    pauseOnHover: true,
    autoplaySpeed: 2000,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });


  $('#economy-carousel-one').slick({
    centerMode: true,
    centerPadding: '0px',
    margin: '0px',
    slidesToShow: 1,
    buttons: false,
    arrows: false,
    nextArrow: '<i class="far fa-caret-square-right"></i>',
    prevArrow: '<i class="far fa-caret-square-left"></i>',
    autoplay: true,
    pauseOnHover: true,
    autoplaySpeed: 5000,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });



  $('#economy-carousel-two').slick({
    centerMode: true,
    centerPadding: '0px',
    margin: '0px',
    slidesToShow: 1,
    buttons: false,
    arrows: false,
    nextArrow: '<i class="far fa-caret-square-right"></i>',
    prevArrow: '<i class="far fa-caret-square-left"></i>',
    autoplay: true,
    pauseOnHover: true,
    autoplaySpeed: 6000,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });


  $('#economy-carousel-three').slick({
    centerMode: true,
    centerPadding: '0px',
    margin: '0px',
    slidesToShow: 1,
    buttons: false,
    arrows: false,
    nextArrow: '<i class="far fa-caret-square-right"></i>',
    prevArrow: '<i class="far fa-caret-square-left"></i>',
    autoplay: true,
    pauseOnHover: true,
    autoplaySpeed: 6000,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });




  $('#politics-news-carousel-one').slick({
    centerMode: true,
    centerPadding: '0px',
    margin: '0px',
    slidesToShow: 1,

    arrows: true,
    nextArrow: '<i class="far fa-caret-square-right"></i>',
    prevArrow: '<i class="far fa-caret-square-left"></i>',
    autoplay: true,
    pauseOnHover: true,
    autoplaySpeed: 2000,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $('#politics-news-carousel-two').slick({
    centerMode: true,
    centerPadding: '0px',
    margin: '0px',
    slidesToShow: 1,

    arrows: true,
    nextArrow: '<i class="far fa-caret-square-right"></i>',
    prevArrow: '<i class="far fa-caret-square-left"></i>',
    autoplay: true,
    pauseOnHover: true,
    autoplaySpeed: 3000,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $('.carousel-page-template').not('.slick-initialized').slick({
    // fade: true,
    cssEase: 'linear'
  });


    $('.dropdown-menu').css('display', 'none');

    $('.dropdown').on('show.bs.dropdown', function() {
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
     
    });
  
    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function() {
      
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    
    });




  
  
    


    
});

