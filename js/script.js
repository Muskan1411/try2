    $('.owl-carousel1').owlCarousel({
      loop:false,
      margin:10,
      nav    : true,
      smartSpeed :900,
      navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      responsiveClass: true,
      responsive:{
      0:{
      items: 2,
      dots: false
      },
      600:{
      items: 2,
      dots: false
      },
      900:{
      items: 2,
      dots: false
      },
      1200:{
      items: 2,
      dots: false
      }
      },
      autoplay:true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsiveRefreshRate: 100
      });

    $('.owl-carousel2').owlCarousel({
      loop:false,
      margin:10,
      nav    : true,
      smartSpeed :900,
      navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      responsiveClass: true,
      responsive:{
      0:{
      items: 2,
      dots: false
      },
      600:{
      items: 2,
      dots: false
      },
      900:{
      items: 3,
      dots: false
      },
      1200:{
      items: 4,
      dots: false
      }
      },
      autoplay:true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsiveRefreshRate: 100
      });
      // $(document).on('click','.more', function() ) {
      // 	('#myModal').modal('show');
      // }



jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
		$animatables.each(function(i) {
       var $animatable = $(this);
			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
			}
    });

	};
  
  // Hook doAnimations on scroll, and trigger a scroll
	$(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});




