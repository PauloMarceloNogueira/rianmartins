<?php
	
	get_header();

		$args = array(
			'posts_per_page'	=> 100,
			'offset'			=> 0,
			'category'			=> '',
			'category_name'		=> '',
			'orderby'			=> 'date',
			'order'				=> 'DESC',
			'include'			=> '',
			'exclude'			=> '',
			'meta_key'			=> '',
			'meta_value'		=> '',
			'post_type'			=> 'post',
			'post_mime_type'	=> '',
			'post_parent'		=> '',
			'author'			=> '',
			'post_status'		=> 'publish',
			'suppress_filters'	=> true 
		);

		$posts_array = get_posts( $args );

		echo '<div class="oi_content_holder">';

			echo '<div class="container">';

				echo '<div class="this_page oi_page_holder">';

					echo '<div class="oi_s_t_w_s">';

						echo '<div>';

							echo '<div class="oi_port_filter_holder">';

								echo '<div class="oi_port_filter" id="filters">';

									echo '<a href="#" data-filter="*" class="filter_button filter_current">Todos</a>';
									$categories = get_categories();
									foreach ($categories as $cat) {

										echo '<a href="#" data-filter=".cat-' . ($cat->slug) . '" class="filter_button">' . $cat->name . '</a>';
										
									}
									// echo '<a href="#" data-filter=".ui-design" class="filter_button">UI Design</a>';
									// echo '<a href="#" data-filter=".web-design" class="filter_button">Web Design</a>';
									// echo '<a href="#" data-filter=".web-development" class="filter_button">Web Development</a>';

								echo '</div>';

							echo '</div>';
							echo '<div class="row oi_port_container oi_wall">';
								
								foreach ( $posts_array as $post ) : setup_postdata( $post );

									$cat	=	get_the_category();
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = (wp_get_attachment_url($thumb_id));
									echo '<div class="oi_strange_portfolio_item oi_port_style_ii oi_col col-md-4  oi_x1 cat-' . $cat[0]->slug . '">';

										echo '<div class="oi_vc_potrfolio" style="background-image: url(\'' . $thumb_url . '\');">';

											echo '<a href="' . get_the_permalink() . '">';

												echo '<div class="oi_vc_port_mask bg_rgba0006">';

													echo '<h3 class="oi_sub_legend text_fff">' . get_the_title() . '</h3>';
													echo '<div class="oi_vc_port_cat text_fff">';

														echo $cat[0]->name;

													echo '</div>';
													echo '<div class="oi_vc_sep bg_fff"></div>';

												echo '</div>';

											echo '</a>';

										echo '</div>';

									echo '</div>';

								endforeach;
								
							echo '</div>';

						echo '</div>';

					echo '</div>';

				echo '</div>';

    		echo '</div> ';
    		
    	echo '</div> ';
    	echo '<div class="oi_footer_holder_main">';

			echo '<div class="oi_bottom_line">';

				echo '<div class="oi_bottom_line_standard">';

					echo '<div class="oi_bottom_line_holder">';

						echo '<div class="container">';

							echo '<div class="row">';

								echo '<div class="col-md-6 col-sm-6">';

									echo '&copy; Copyright ' . get_bloginfo('name') . ' ' . date("Y") . '. Design by <a href="http://themeforest.net/user/OrangeIdea/portfolio?ref=FoxSash" target="_blank" class="collored">OrangeIdea</a>. Coding by <a href="http://www.shdev.com.br" target="_blank" class="collored">SHDevelopment</a>.';

								echo '</div>';
								echo '<div class="col-md-6 col-sm-6">';

									echo '<div class="menu-footer-menu-container">';

										echo '<ul id="menu-footer-menu" class="oi_footer_menu">';

											echo '<li><a href="https://twitter.com.html">Twitter</a></li>';
											echo '<li><a href="https://www.facebook.com/rian.martins.5">Facebook</a></li>';
											echo '<li><a href="https://www.behance.net.html">Behance</a></li>';

										echo '</ul>';

									echo '</div>';

								echo '</div>';

							echo '</div>';

						echo '</div>';

					echo '</div>';

				echo '</div>';

			echo '</div>';

		echo '</div>';

	get_footer();

?>