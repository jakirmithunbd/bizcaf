(function ($) {
	"use strict";	

	$('.banner').slick({
		arrow: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
				arrows: false
				}
			}
		]
	})

	$('.testimonial').slick({
		slidesToShow: 2,
		slidesToScroll: 2,
		arrows: true,

		  responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false
	      }
	    }
	  ]
	})

	$('.client-logo').slick({
		slidesToShow: 6,
		arrows: false,
		speed: 500,
		autoplay: true,
		autoplaySpeed: 10,
		responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 4,
	        autoplaySpeed: 200,
	      }
	    },
	    {
	      breakpoint: 575,
	      settings: {
	        slidesToShow: 2,
	        autoplaySpeed: 500
	      }
	    },
	  ]
	})

	$(".navbar-toggle").click(function() {
	  	$(this).toggleClass('in');
	});

    $('.counter').counterUp({
        delay: 10,
        time: 10000
    });

    	 /*** Sticky header */
	$(window).scroll(function() {
		if ($(window).scrollTop() > 0) {
			$(".header").addClass("sticky");
		} 
		else {
			$(".header").removeClass("sticky");
		}
	});

		/*** Header height = gutter height */
	function setGutterHeight(){
	 	var header = document.querySelector('.header'),
	 		gutter = document.querySelector('.header_gutter');
		 	gutter.style.height = header.offsetHeight + 'px';
	}


    /*** Product popup */
	$(".play-video").colorbox({
		iframe: true,
		innerWidth: 640, 
		innerHeight: 390,
		close: '<i class="icon-close"></i>',
	});

	$('#request_quote .btn').click(function () {
        $("#request_quote").toggleClass("open");
    });

	$(function(){

		$('.custom_file_upload input[type="file"]').change(function(){
			var val = $(this).val();
			$('.custom_file_upload .gfield_description').html(val.replace("C:\\fakepath\\", ""));
		}); 
	});

})(jQuery);