<?php
	
	get_header();

		the_post();
		$meta	=	(get_post_meta($post->ID));
		echo '<div class="oi_content_holder">';

			echo '<div class="container">';

				echo '<div class="this_page oi_page_holder">';

					echo '<div class="oi_sinle_portfolio_holder">';

						echo '<div class="oi_portfolio_page_holder">';

							echo '<div class="row row-fluid oi_inner_without_paddings mb0">';

								echo '<div class="col-md-12">';

									echo '<img src="' . (wp_get_attachment_url($meta['foto_1'][0])) . '" class="img-responsive" alt="" />';

								echo '</div>';

							echo '</div>';
							echo '<div class="row row-fluid oi_inner_without_paddings mb0 bg_fff pt60pb60">';

								echo '<div class="col-sm-3">';

									echo '<p></p>';

								echo '</div>';
								echo '<div class="col-sm-6">';

									echo '<div class="oi_custom_heading_holder mb20">';

										echo '<div class="oi_vc_heading oi_border_position_bottom text-center">';

											echo '<h2 class="oi_icon_titile font_normal text_000">' . (get_the_title()) . '</h2>';
											echo '<p class="oi_icon_sub_titile font_normal text_B99D61">';

												echo $meta['chamada'][0];

											echo '</p>';
											echo '<div class="oi_heading_border oi_border_position_bottom text-center">';

												echo '<span class="text-center w40 bt_b99d61"></span>';


											echo '</div>';

										echo '</div>';

									echo '</div>';
									echo '<p class="text-center">';

										echo $meta['descrição'][0];

									echo '</p>';

								echo '</div>';

							echo '<div class="col-sm-3">';

								echo '<p></p>';

							echo '</div>';

						echo '</div>';
						echo '<div class="row row-fluid oi_inner_without_paddings mb0">';

							echo '<div class="col-sm-12">';

								echo '<img src="' . (wp_get_attachment_url($meta['foto_2'][0])) . '" class="img-responsive" alt="" />';

							echo '</div>';

						echo '</div>';
						echo '<div class="row row-fluid oi_inner_without_paddings bg_fff mt0mb0 p60p40">';

							echo '<div class="text-center col-sm-12 pr40">';

								echo '<div class="wpb_wrapper">';

									echo '<div class="oi_custom_heading_holder mb20">';

										echo '<div class="oi_vc_heading oi_border_position_bottom text-center">';

											echo '<h3 class="oi_icon_titile font_normal text_222">Solicitação do Cliente</h3>';
											echo '<p class="oi_icon_sub_titile font_normal text_666">';

												echo 'O que tivemos que fazer';

											echo '</p>';
											echo '<div class="oi_heading_border oi_border_position_bottom text-center">';

												echo '<span class=" text-center w100 bt_e8e8e8"></span>';

											echo '</div>';

										echo '</div>';

									echo '</div>';
									echo '<div class="mt0mb25">';

										echo '<p class="text-center">';

											echo $meta['solicitação_do_cliente'][0];

										echo '</p>';

									echo '</div>';

								echo '</div>';

							echo '</div>';
							// echo '<div class="col-sm-6 pl40">';

							// 	echo '<div class="oi_custom_heading_holder mb20">';

							// 		echo '<div class="oi_vc_heading oi_border_position_bottom text-left">';

							// 			echo '<h3 class="oi_icon_titile font_normal text_222">Briefing</h3>';
							// 			echo '<p class="oi_icon_sub_titile font_normal text_666">&nbsp;</p>';
							// 			echo '<div class="oi_heading_border oi_border_position_bottom text-left">';

							// 				echo '<span class=" text-left w100 bt_e8e8e8"></span>';

							// 			echo '</div>';

							// 		echo '</div>';

							// 	echo '</div>';
							// 	echo '<div class="mt0mb25">';

							// 		echo '<p>';
										
							// 			echo $meta['briefing'][0];

							// 		echo '</p>';

							// 	echo '</div>';

							// echo '</div>';

						echo '</div>';
						echo '<div class="row row-fluid oi_inner_without_paddings mb0">';

							echo '<div class="col-sm-12">';

								echo '<img class="img-responsive" src="' . (wp_get_attachment_url($meta['foto_3'][0])) . '" alt="" title="" />';

							echo '</div>';
						
						echo '</div>';
						echo '<div class="row row-fluid oi_inner_without_paddings mb0">';
							echo '<div class="col-sm-12">';

								echo '<img class="img-responsive" src="' . (wp_get_attachment_url($meta['foto_4'][0])) . '" alt="" title="" />';

							echo '</div>';

						echo '</div>';
						// echo '<div class="row row-fluid oi_inner_without_paddings mb0" style="background-image: url(\'' . (wp_get_attachment_url($meta['foto_5'][0])) . '\')">';

						// 	echo '<div class="text-right col-sm-6 pr40"></div>';
						// 	echo '<div class="col-sm-6 bg_fff">';

						// 		echo '<div class="oi_vc_text item_height_x2 bg_efefef">';

						// 			echo '<div class="oi_vc_text_span">';

						// 				echo '<div class="oi_custom_heading_holder mb20">';

						// 					echo '<div class="oi_vc_heading oi_border_position_bottom text-left">';

						// 						echo '<h3 class="oi_icon_titile font_normal text_222">Sobre o Projeto</h3>';
						// 						echo '<p class="oi_icon_sub_titile font_normal text_B99D61">O que foi feito</p>';
						// 						echo '<div class="oi_heading_border oi_border_position_bottom text-left">';

						// 							echo '<span class="text-left w100 bt_b99d61"></span>';

						// 						echo '</div>';

						// 					echo '</div>';

						// 				echo '</div>';
						// 				echo '<p>';

						// 					echo $meta['sobre_o_projeto'][0];

						// 				echo '</p>';

						// 				echo '<a class="oi_vc_button" href="#" target="_self"><i class="fa fa-angle-right oi_button_icon oi_button_icon_left"></i>UX &amp; UI Design</a>';
						// 				echo '<a class="oi_vc_button" href="#" target="_self"><i class="fa fa-angle-right oi_button_icon oi_button_icon_left"></i>Wordpress Development</a>';
						// 				echo '<a class="oi_vc_button" href="#" target="_self"><i class="fa fa-angle-right oi_button_icon oi_button_icon_left"></i>PHP Coding</a>';
						// 				echo '<a class="oi_vc_button" href="#" target="_self"><i class="fa fa-angle-right oi_button_icon oi_button_icon_left"></i>SEO Optimization</a>';

						// 			echo '</div>';

						// 		echo '</div>';

						// 	echo '</div>';

						// echo '</div>';
						echo '<div class="row row-fluid oi_inner_without_paddings">';

							echo '<div class="col-sm-12">';

								echo '<img src="' . (wp_get_attachment_url($meta['foto_6'][0])) . '" class="img-responsive" alt="" />';

							echo '</div>';

						echo '</div>';
						echo '<div class="oi_port_nav">';

							$prev_post = get_previous_post();
							$next_post = get_next_post();
							echo '<a href="' . $next_post->guid . '" rel="next"><i class="fa fa-long-arrow-left fa-fw"></i></a>';
							echo '<a href="' . get_bloginfo('url') . '/portfolio/"><i class="fa fa-th-large fa-fw"></i></a>';
							echo '<a href="' . $prev_post->guid . '" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>';

						echo '</div>';

					echo '</div>';

				echo '</div>';

			echo '</div>';

		echo '</div>';

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