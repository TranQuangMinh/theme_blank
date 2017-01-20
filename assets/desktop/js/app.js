$ = jQuery;

$(document).ready(function(){
	if ($('.slider-galleries .wrap').length > 0) {
		$('.slider-galleries .wrap').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    items: 2,
		    navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
	        onInitialized: function(event){
        		$(event.target).find('li').each(function(id, tag) {
        			$(tag).height( $(tag).width() / 1 );
        		});
	        }
		});
	}

	if ($('.slider-customer .listing').length > 0) {
		$('.slider-customer .listing').owlCarousel({
		    loop: true,
	      	autoplay: true,	
		    margin:10,
		    items: 1,
		    animateOut: 'fadeOutUp',
		    animateIn: 'fadeInUp',
		    mouseDrag: false
		});
	}

	if ($('.slider-product .wrap-inner').length > 0) {
		$('.slider-product .wrap-inner').owlCarousel({
		    loop:true,
		    margin:10,
		    items: 4,
		    responsiveClass:true,
	        responsive:{
	            0:{
	                items:1,
	                nav: true,
	                navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
	            },
	            600:{
	                items:3,
	                nav: true,
	                navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
	            },
	            991:{
	            	items:3,
	            	nav: true,
	            	navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
	            },
	            1000:{
	                items:3,
	                loop:false
	            }
	        },
	        onInitialized: function(event){
        		$(event.target).find('.thumbnail').each(function(id, tag) {
        			$(tag).height( $(tag).width() / 1 );
        		});
	        }
		});
	}

	if ($('.section-service-full .wrap').length > 0) {
		$('.section-service-full .wrap').owlCarousel({
		    loop:true,
		    margin:10,
		    items: 4,
		    nav:true,
		    navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
		    responsiveClass:true,
	        responsive:{
	            0:{
	                items:1,
	            },
	            600:{
	                items:3,
	            },
	            1000:{
	                items:4,
	                loop:false
	            }
	        },
	        onInitialized: function(event){
        		$(event.target).find('.thumbnail').each(function(id, tag) {
        			$(tag).height( $(tag).width() / 1 );
        		});
	        }
		});
	}

	if ($('.section-service').length > 0) {
		$('.section-service').css({
			minHeight: $('.section-service .block-intro').outerHeight() + 80
		})
	}

	if ($('.listing-style2 .thumbnail').length > 0) {
		$('.listing-style2').find('.thumbnail').each(function(id, tag) {
			$(tag).height( $(tag).width() / 1.33 );
		});
	}

	if ($('.resize-frame').length > 0) {
		$('.resize-frame').each(function(id, tag) {
			var ratio = '1';
			if (typeof $(tag).data().ratio != 'undefined' && $(tag).data().ratio > 0) {
				ratio = $(tag).data().ratio
			}
			$(tag).height( $(tag).width() / ratio );
		});
	}

	$('.main-menu').clone().addClass('cloned').wrapInner('<div class="container"></div>').appendTo('.heaer-site');

	if( typeof $.datetimepicker != 'undefined') {
		jQuery.datetimepicker.setLocale('vi');

		jQuery('.datetimepicker').datetimepicker({
			i18n: {
				vi: {
					months: [
						"Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
					],
					dayOfWeekShort: [
						"CN", "T2", "T3", "T4", "T5", "T6", "T7"
					],
					dayOfWeek: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"]
				}
			}
		});
	}
})
.on('click', '.btn-menu', function(event) {
	event.preventDefault();
	$('.main-menu-mobile').toggleClass('active');
})
.on('click', '.header-menu', function(event) {
	event.preventDefault();
	$('.main-menu-mobile').toggleClass('active');
});


$(window).on('scroll', function(){
    $top = $(window).scrollTop();
    $offTop = $('.main-menu').offset().top + $('.main-menu').outerHeight();

    if ($top >= $offTop) {
        $('body').addClass('show-menu-fixed');
    } else {
        $('body').removeClass('show-menu-fixed');
    }
});

