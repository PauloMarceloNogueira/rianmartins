// PORTFOLIO FILTERING - ISOTOPE
//**********************************
jQuery.noConflict()(function($){
"use strict";

var $container = $('.oi_port_container');
		
if($container.length) {
	//$('.oi_portfolio_page_holder').css('min-height',$(window).height())
	$container.waitForImages(function() {
		
		// initialize isotope
		$container.isotope({
		  itemSelector : '.oi_strange_portfolio_item',
		  layoutMode : 'masonry',
		});
		
		$('#filters a:first-child').addClass('filter_current');
		// filter items when filter link is clicked
		$('#filters a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  $(this).removeClass('filter_button').addClass('filter_button filter_current').siblings().removeClass('filter_button filter_current').addClass('filter_button');
		  
		  return false;
		});
		
	},null,true);
}});

// Load More Masorny PORTFOLIO
//**********************************

jQuery.noConflict()(function($){
"use strict";
	$( "#load_more_port_masorny_posts" ).each(function() {
		$(this).click(function(e) {
				var tempurl = oi_theme_plugin.theme_url;
				var url = tempurl+'/framework/ajax-portfolio.php';
				var $offset = $( "#load_more_port_masorny_posts" ).attr('data-offset');
				var $load_posts_count = $( "#load_more_port_masorny_posts" ).attr('data-load-posts_count');
				var $layout_mode = $( "#load_more_port_masorny_posts" ).attr('data-layout-mode');
				var $column_count = '123';
				var $tag = $( "#load_more_port_masorny_posts" ).attr('data-tag');
				
				$column_count = parseInt($column_count,10)
				$offset = parseInt($offset,10)
				$load_posts_count = parseInt($load_posts_count,10)
				
				var $oi_mas_post_count = $('.oi_strange_portfolio_item').length;
				$('#load_more_port_masorny_posts:not(disabled)').html('<span style=""> <i class="fa fa-spinner fa-spin"></i></span>');
				$('#load_more_port_masorny_posts').addClass('do_not_hover');
				$.get
				  (
				  url,"oi_modal="+$offset+"&oi_post_count="+$oi_mas_post_count+"&oi_tag="+$tag+"&oi_load_post_count="+$load_posts_count+"&oi_layout_mode="+$layout_mode+"&oi_column_count="+$column_count,function(result,status)
					{
						
						$(result.new_posts).imagesLoaded( function(){
						$('.oi_port_container').isotope( 'insert', $(result.new_posts) );
						$('.oi_strange_portfolio_item_holder').css('opacity',1);
						$offset = $( "#load_more_port_masorny_posts" ).attr('data-offset',$offset + $load_posts_count);
						$('#oi_masorny_posts_per_page').html($('.oi_strange_portfolio_item').length);
						$('#load_more_port_masorny_posts').html(result.loading)
						$('#load_more_port_masorny_posts').removeClass('do_not_hover');
						if ( parseInt($('#oi_max_masorny_posts').html()) == $('.oi_strange_portfolio_item').length ){
							$('#load_more_port_masorny_posts').html(result.all_loaded);
							$('#load_more_port_masorny_posts').addClass('disabled');
							$('.oi_load_more.disabled').click(function(e){$('#load_more_port_masorny_posts:not(disabled)').html('<span style="">NO MORE PROJECTS</span>');})
						};
						});
						
						
					},
				  "json"
				 );
			e.preventDefault();
		}); 
	});
	
});

