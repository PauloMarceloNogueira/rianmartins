jQuery.noConflict()(function($){
"use strict";
	//$('.oi_header_menu_fixed').css('margin-top',(($('.oi_logo_holder').height()- $('.oi_header_menu_fixed').outerHeight())/2))
	// makes sure the whole site is loaded
	jQuery("#status").css('display','block');
	jQuery("#preloader").css('display','block');
	

	
	$(document).ready(function() {
		$('.oi_page_holder').css('visibility','visible');
		// will first fade out the loading animation
		jQuery("#status").fadeOut("slow");
		// will fade out the whole DIV that covers the website.
		jQuery("#preloader").fadeOut("slow");
		$('.oi_content_holder').css('margin-top',$('.oi_head_holder').outerHeight())
		

		$('.row[data-vc-full-width="true"]').addClass('oi_full_row_vc');
		$('.row[data-vc-full-width="true"]').css('left',-(($('.oi_content_holder').width() - $('.container').width()))/2);
		$('.row[data-vc-full-width="true"]').css('padding-left',(($('.oi_content_holder').width() - $('.container').width()))/2);
		$('.row[data-vc-full-width="true"]').css('padding-right',(($('.oi_content_holder').width() - $('.container').width()))/2);
		$('.row[data-vc-stretch-content="true"]').css('padding-right','0px');
		$('.row[data-vc-stretch-content="true"]').css('padding-left','0px');
		$('.row[data-vc-full-width="true"]').css('margin-left','0px');
		$( window ).resize(function() {
			$('.row[data-vc-full-width="true"]').addClass('oi_full_row_vc');
			$('.row[data-vc-full-width="true"]').css('left',-(($('.oi_content_holder').width() - $('.container').width()))/2);
			$('.row[data-vc-full-width="true"]').css('padding-left',(($('.oi_content_holder').width() - $('.container').width()))/2);
			$('.row[data-vc-full-width="true"]').css('padding-right',(($('.oi_content_holder').width() - $('.container').width()))/2);
			$('.row[data-vc-stretch-content="true"]').css('padding-right','0px');
			$('.row[data-vc-stretch-content="true"]').css('padding-left','0px');
			$('.row[data-vc-full-width="true"]').css('margin-left','0px');
		});
		
	});


	$('.oi_xs_menu').click(function(){
		$('.oi_header_menu_mobile').toggleClass('oi_v_menu');
	});
	
	$('.wp-smiley').removeClass('img-responsive')
	$('.wp-caption img').removeAttr('height');
	$('.wp-caption img').removeAttr('width')
	$('.wp-caption').removeAttr('style');
	$('.oi_widget img').addClass('img-responsive');
	$('.alignnone').addClass('img-responsive');
	$('.alignnone img').addClass('img-responsive')
	$('table:not(#wp-calendar)').addClass('table table-striped table-bordered');
	$('.oi_blog_post_content_holder a').addClass('colored');
	$('.oi_single_post_content_holder a').addClass('colored');

	$(document).on('opening', '.remodal', function () {
	  $('.oi_head_holder').addClass('oi_modal_open');
	});
	$(document).on('closed', '.remodal', function () {
		 $('.oi_head_holder').removeClass('oi_modal_open');
		 $('.oi_head_holder').addClass('oi_modal_closed');
		 setInterval(function() {$('.oi_head_holder').removeClass('oi_modal_closed') }, 1000);

	});
	
$(document).ready(function() {	
var $container = $('.oi_mas_container');
		
if($container.length) {
	$container.waitForImages(function() {
		
		// initialize isotope
		$container.isotope({
		  itemSelector : '.oi_mas_item',
		  layoutMode : 'masonry',
		});
		
		
	},null,true);
};
});
	
	$(".oi_gallery_slider").owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		loop: true,
		navigation : true,
        rewindNav : true,
        scrollPerPage : false,
        pagination : true,
        paginationNumbers : true,
		lazyLoad: false,
		navText:[,],
		autoplay: true,
		stopOnHover : true,
		smartSpeed:1000,
		autoplayTimeout: 3000,
		autoplayHoverPause:true,
		responsive: {
				0: {
					margin: 0,
					items: 1
				},
				600: {
					margin: 0,
					items: 1
				},
				800: {
					margin: 0,
					items: 1
				},
				1200: {
					margin: 0,
					items: 1
				}
			}
		
	});
	
		$("#slider_1").owlCarousel({
			loop:true,
			autoplay:true,
			nav:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			dots:false,
			navText:[,],
			responsive: {
				0: {
					margin: 0,
					items: 1
				},
				600: {
					margin: 0,
					items: 1
				},
				800: {
					margin: 0,
					items: 1
				},
				1200: {
					margin: 0,
					items: 1
				},
				1400: {
					margin: 0,
					items: 1
				}
			}
		});
	
	
});


jQuery.noConflict()(function($){
if( $(window).width()<767)
$( ".menu-item-has-children").toggleClass('oi_active_menu_has_sub');
{
	$( ".oi_header_menu_fixed > li " ).click(function(event) {
		$( this ).toggleClass('oi_active_menu_has_sub').find( $( "ul.sub-menu" )).css('display','block');
		if ( $( this ).find( $( "ul.sub-menu" )).children().length > 0 ) {
			if (!$( this ).hasClass( "oi_active_menu_has_sub" )){
				event.preventDefault();
			};
		};
	});
};
	
	
if($('body').outerWidth()>1000){
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.oi_head_holder').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 0);

function hasScrolled() {
    var st = $(this).scrollTop();
	var header_h = $('.oi_head_holder').outerHeight();

    
	if(st>navbarHeight){
		$('.oi_head_holder .oi_logo_holder').addClass('oi_scrolled')
		$('.oi_head_holder').css('margin-top','0')
	}else{
		$('.oi_head_holder .oi_logo_holder').removeClass('oi_scrolled')
		$('.oi_head_holder').css('margin-top','0px')
	}
	
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
	
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.oi_head_holder').removeClass('nav-down').addClass('nav-up').css('top',-header_h);
		
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.oi_head_holder').removeClass('nav-up').addClass('nav-down').css('top',0);
			
        }
    }
    
    lastScrollTop = st;
}


};
$(window).load(function() {
		$( '<i class="fa fa-angle-right fa-fw"></i>' ).appendTo( $('.oi_gallery_slider .owl-next') );
		$( '<i class="fa fa-angle-left fa-fw"></i>' ).appendTo( $('.oi_gallery_slider .owl-prev') );
	
	
		$('.oi_blog_chess').each(function(index, element) {
			$( this ).find($('.oi_chess_content')).css('height',$( this ).find($('.oi_chess_img_holder')).height())
		});
	});

});
jQuery.noConflict()(function($){
"use strict";
	$(document).ready(function() {
		$('.oi_vc_button').each(function(index, element) {
			var oi_color = $( this ).css( "color" );
			var oi_bg = $( this ).css( "background-color" );
			var oi_border_color = $( this ).css( "borderTopColor" );
			$(element).hover(
				function() {
					$(this).css({
						'color' :$( this ).attr('data-title-color-hover'),
						'background' :$( this ).attr('data-bg-color-hover'),
						'border-color' :$( this ).attr('data-border-c-hover'),
					});
				},
				function() {
					$(this).css({
						'color' :oi_color,
						'background' :oi_bg,
						'border-color' :oi_border_color,
					});
				}
			);
		});
		
		$( ".oi_custom_heading_holder" ).each(function( index ) {
			if($(this).height()>40){
			$(this).find(".oi_heading_icon:not(.oi_heading_icon_center)").css('margin-top',($(this).height()-$(this).find('i').height())/2);
			}else{
				$(this).find(".oi_heading_icon:not(.oi_heading_icon_center)").css('margin-top',-2);
				$(this).find(".oi_heading_icon:not(.oi_heading_icon_center)").css('margin-right',5);
			}
		});
		
		$(".oi_over").append('<div class="oi_overlay"></div>')
		
		
		$('.oi_owl_slider').each(function(index, element) {
			var id =$(element).attr('id');
			if ( $('#'+id).attr('data-arrows') == 'true' ) {
				$( '<i class="fa fa-angle-right"></i>' ).css('font-size',$(element).attr('data-icon-size')).appendTo( $('#'+id+' .owl-next') );
				$( '<i class="fa fa-angle-left"></i>' ).css('font-size',$(element).attr('data-icon-size')).appendTo( $('#'+id+' .owl-prev') );
				var oi_color = $( this ).attr('data-color');
				var oi_color_h = $( this ).attr('data-color-hover');
				$('#'+id+' .owl-nav i').hover(
					function() {
						$(this).css({
							'color' :oi_color_h,
						});
					},
					function() {
						$(this).css({
							'color' :oi_color
						});
					}
				);
			}
		});
		
		
		  $('.oi_partner_holder').each(function(index, element) {
			var id =$(element).attr('id');
			$("#"+id ).tipso({
				speed           : 0,
				background      : $("#"+id ).attr('data-bg'),
				color           : $("#"+id ).attr('data-color'),
				position        : $("#"+id ).attr('data-position'),
				width           : 0,
				maxWidth        : "400",
				delay           : 0,
				animationIn     : "fadeIn",
				animationOut    : "fadeOut",
				offsetX         : 0,
				offsetY         : 0,
				tooltipHover    : false,
				content         : null,
				ajaxContentUrl  : null,
				useTitle        : true,
				onBeforeShow    : null,
				onShow          : null,
				onHide          : null
			});	
		
		});
		if ($("div").is("#map")) {
				$("#map").gmap3({
						marker:{     
						// address:"93 Worth St, New York, NY",
						address :"7th Ave, New York, NY", 
						options:{ icon: "assets/css/img/marker.png"}},
						map:{
						options:{
						styles: [ {
						stylers: [ { "saturation":-100 }, { "lightness": 0 }, { "gamma": 0.5 }]},
						],
						zoom: 13,
						scrollwheel:false,
						draggable: true }
						}
						});	
			}
		
		if ($("div").is(".oi-instagram-1841661834")) {
				jQuery.fn.spectragram.accessData = {
                            accessToken: '1413693287.7d50a77.c4f0866b4d234d60adc450e6e55972bd',
                            clientID: '7d50a770b8b44289af0d313c0be75577'
				};
				//Call spectagram function on the container element and pass it your query
				$('.oi-instagram-1841661834').spectragram('getUserFeed', {
					query: 'envatostudio', //this gets user photo feed
					size: 'big',
					max: 9					});		
			}
		
		$.fn.equalizeHeights = function () {
			return this.height(Math.max.apply(this, $(this).map(function (i, e) {
				return $(e).height()
			}).get()))
		};
		$('.oi_inner_equalize_heights .wpb_column').equalizeHeights();

	});
});