<?php

	$contato = new WP_Query( 'page_id=7' );
	
	get_header();

	the_post();
	$meta	=	(get_post_meta($post->ID));


	echo '<div class="oi_content_holder">';

		echo '<div class="container oi_container_holder_vc">';

			echo '<div class="oi_page_holder_custom">';

				echo '<div class="row row-fluid oi_inner_without_paddings oi_inner_equalize_heights mb0">';

					echo '<div class="col-sm-4">';
						
						$post1	=	get_post($meta['post_1'][0]);
						$meta1	=	(get_post_meta($post1->ID));
						$perm1	=	get_permalink($post1->ID);
						$cat1	=	get_the_category($post1->ID);

						echo '<div class="oi_strange_portfolio_item oi_port_style_ii">';
							
							echo '<div class="oi_vc_potrfolio item_height_x2" style="background-image: url(\'' . (wp_get_attachment_url($meta1['home'][0])) . '\');">';

								echo '<a href="' . ($perm1) . '">';
									
									echo '<div class="oi_vc_port_mask bg_rgba0006">';

										echo '<div class="text-center">';

											echo '<h3 class="oi_sub_legend text_fff">' . $post1->post_title . '</h3>';
											echo '<div class="oi_vc_port_cat text_fff">';

												echo $cat1[0]->name;

											echo '</div>';
											echo '<div class="oi_vc_sep bg_fff"></div>';

										echo '</div>';

									echo '</div>';
									
								echo '</a>';

							echo '</div>';

						echo '</div>';
						echo '<div class="oi_vc_text item_height_x1 bg_fff">';

							echo '<div class="oi_vc_text_span">';

								echo '<div class="oi_custom_heading_holder mb20">';

									echo '<div class="oi_vc_heading oi_border_position_bottom text-center">';

										echo '<div class="oi_heading_icon oi_heading_icon_center">';

											echo '<i class="vc_li vc_li-display size34 lh34 text_fff"></i>';

										echo '</div>';
										echo '<h3 class="text_222 font_normal oi_icon_titile">' . ($meta['titulo_texto_2'][0]) . '</h3>';
										echo '<p class="font_normal oi_icon_sub_titile text_666">';

											echo 'Raster &amp; Vector Ggraphics';

										echo '</p>';
										echo '<div class="oi_heading_border oi_border_position_bottom text-center">';

											echo '<span class="text-center w100 bt_e8e8e8"></span>';

										echo '</div>';

									echo '</div>';

								echo '</div>';
								echo '<p class="text-center">';

									echo $meta['texto_2'][0];

								echo '</p>';

							echo '</div>';

						echo '</div>';

					echo '</div>';
					echo '<div class="col-sm-5">';

						echo '<div class="oi_vc_text item_height_x1 bg_fff">';

							echo '<div class="oi_vc_text_span">';

								echo '<img class="wp-image-71 aligncenter" src="' . (wp_get_attachment_url($meta['logo'][0])) . '" alt="boom" width="92" height="92"/>';

								echo '<div class="text-center">';

									echo '<h3 style="text-transform: uppercase;">' . (get_bloginfo('name')) . '</h3>';
									echo '<p>' . get_bloginfo('description') . '</p>';

								echo '</div>';

							echo '</div>';

						echo '</div>';

						echo '<div class="oi_strange_portfolio_item oi_port_style_ii">';

							$post2	=	get_post($meta['post_2'][0]);
							$meta2	=	(get_post_meta($post2->ID));
							$perm2	=	get_permalink($post2->ID);
							$cat2	=	get_the_category($post2->ID);
							
							echo '<div class="oi_vc_potrfolio item_height_x2" style="background-image: url(\'' . (wp_get_attachment_url($meta2['home'][0])) . '\');">';

								echo '<a href="' . ($perm2) . '">';

									echo '<div class="oi_vc_port_mask bg_rgba0008">';

										echo '<div class="text-center">';

											echo '<h3 class="oi_sub_legend text_fff">' . $post2->post_title . '</h3>';

											echo '<div class="oi_vc_port_cat text_fff">' . $cat2[0]->name . '</div>';
											echo '<div class="oi_vc_sep bg_fff"></div>';

										echo '</div>';

									echo '</div>';

								echo '</a>';

							echo '</div>';

						echo '</div>';
					
					echo '</div>';

					echo '<div class="col-sm-3">';

						$post3	=	get_post($meta['post_3'][0]);
						$meta3	=	(get_post_meta($post3->ID));
						$perm3	=	get_permalink($post3->ID);
						$cat3	=	get_the_category($post3->ID);

						echo '<div class="wpb_wrapper">';

							echo '<div class="oi_strange_portfolio_item oi_port_style_ii">';
								
								echo '<div class="oi_vc_potrfolio item_height_x1" style="background-image: url(\'' . (wp_get_attachment_url($meta3['home'][0])) . '\');">';

									echo '<a href="' . ($perm3) . '">';

										echo '<div class="oi_vc_port_mask bg_rgba0006">';

											echo '<div class="text-center">';

												echo '<h3 class="oi_sub_legend text_fff">' . $post3->post_title . '</h3>';
												echo '<div class="oi_vc_port_cat text_fff">' . $cat3[0]->name . '</div>';
												echo '<div class="oi_vc_sep bg_fff"></div>';

											echo '</div>';

										echo '</div>';

									echo '</a>';

								echo '</div>';

							echo '</div>';
							echo '<div class="oi_vc_text item_height_x1 bg_fff">';

								echo '<div class="oi_vc_text_span">';

									// echo '<ul class="oi_icon_list oi_icon_list_align_left">';

									// 	echo '<li class="oi_list_item mb10">';

									// 		echo '<div class="oi_list_item_icon_holder oi_icon_left">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-calculator size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_center">';

									// 			echo '<div class="oi_icon_inner_holder mb14">';

									// 				echo '<i class="typcn typcn-calculator size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_content_holder">';

									// 			echo '<p class="text_000 font_normal oi_item_title">Free Resources</p>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_right">';

									// 			echo '<div class="oi_icon_inner_holder ml14">';

									// 				echo '<i class="typcn typcn-calculator size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';

									// 	echo '</li>';
									// 	echo '<li class="oi_list_item mb10">';

									// 		echo '<div class="oi_list_item_icon_holder oi_icon_left">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-cog-outline size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_center">';

									// 			echo '<div class="oi_icon_inner_holder mb14">';

									// 				echo '<i class="typcn typcn-cog-outline size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_content_holder">';

									// 			echo '<p class="font_normal oi_item_title text_000">Premium Support</p>';

									// 		echo '</div>';

									// 		echo '<div class="oi_list_item_icon_holder oi_icon_right">';

									// 			echo '<div class="oi_icon_inner_holder ml14">';

									// 				echo '<i class="typcn typcn-cog-outline size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';

									// 	echo '</li>';
									// 	echo '<li class="oi_list_item mb10">';

									// 		echo '<div class="oi_list_item_icon_holder oi_icon_left">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-download-outline size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_center">';

									// 			echo '<div class="oi_icon_inner_holder mb14">';

									// 				echo '<i class="typcn typcn-download-outline size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_content_holder">';

									// 			echo '<p class="text_000 font_normal oi_item_title">Visual Composer</p>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_right">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-download-outline size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';

									// 	echo '</li>';
									// 	echo '<li class="oi_list_item mb10">';

									// 		echo '<div class="oi_list_item_icon_holder oi_icon_left">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-support size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_center">';

									// 			echo '<div class="oi_icon_inner_holder mb14">';

									// 				echo '<i class="typcn typcn-support size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_content_holder">';

									// 			echo '<p class="text_000 font_normal oi_item_title">Regular Support</p>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_right">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-support size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';

									// 	echo '</li>';
									// 	echo '<li class="oi_list_item mb10">';

									// 		echo '<div class="oi_list_item_icon_holder oi_icon_left">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-leaf size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_center">';

									// 			echo '<div class="oi_icon_inner_holder mb14">';

									// 				echo '<i class="typcn typcn-leaf size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_content_holder">';

									// 			echo '<p class="text_000 font_normal oi_item_title">Premium Features</p>';

									// 		echo '</div>';
									// 		echo '<div class="oi_list_item_icon_holder oi_icon_right">';

									// 			echo '<div class="oi_icon_inner_holder mr14">';

									// 				echo '<i class="typcn typcn-leaf size20 lh20 text_B99D61"></i>';

									// 			echo '</div>';

									// 		echo '</div>';

									// 	echo '</li>';

									// echo '</ul>';

								echo '</div>';

							echo '</div>';
							echo '<div class="oi_strange_portfolio_item oi_port_style_ii">';

								$post4	=	get_post($meta['post_4'][0]);
								$meta4	=	(get_post_meta($post4->ID));
								$perm4	=	get_permalink($post4->ID);
								$cat4	=	get_the_category($post4->ID);

								echo '<div class="oi_vc_potrfolio item_height_x1" style="background-image: url(\'' . (wp_get_attachment_url($meta4['home'][0])) . '\');">';

									echo '<a href="' . ($perm4) . '">';

										echo '<div class="oi_vc_port_mask bg_rgba0006">';

											echo '<div class="text-center">';

												echo '<h3 class="oi_sub_legend text_fff">' . $post4->post_title . '</h3>';
												echo '<div class="oi_vc_port_cat text_fff">' . $cat4[0]->name . '</div>';
												echo '<div class="oi_vc_sep bg_fff"></div>';

											echo '</div>';

										echo '</div>';

									echo '</a>';

								echo '</div>';

							echo '</div>';

						echo '</div>';

					echo '</div>';

				echo '</div>';
				echo '<div class="row row-fluid oi_inner_without_paddings mb0">';

					echo '<div class="oi_testim col-sm-12">';

						echo '<div class="oi_vc_text item_height_x1 bg_fff">';

							echo '<div class="oi_vc_text_span">';
								
								echo '<p></p>';

								echo '<div class="oi_testimonial_holder text-center">';

									echo '<span class="oi_testimonial_content_holder">';

										echo '<h5 class="oi_tesimonial_content text_888">';
											
											echo str_replace(array('<p>', '</p>'), '', get_the_content());

										echo '</h5>';

									echo '</span>';
									echo '<div class="clearfix"></div>';
									echo '<div class="oi_testimonial_author_holder text-center">';

										echo '<img class="oi_oi_testimonial_image" src="http://placehold.it/330x330">';
											
										echo '<p class="oi_tesimonial_title text-center text_000">';

											echo $meta['autor_do_depoimento'][0];

										echo '</p>';

									echo '</div>';

								echo '</div>';
								echo '<p></p>';

							echo '</div>';

						echo '</div>';

					echo '</div>';

				echo '</div>';
				echo '<div class="row row-fluid oi_inner_without_paddings mb0">';

					echo '<div class="col-sm-4">';

						$post5	=	get_post($meta['post_5'][0]);
						$meta5	=	(get_post_meta($post5->ID));
						$perm5	=	get_permalink($post5->ID);
						$cat5	=	get_the_category($post5->ID);

						echo '<div class="wpb_wrapper">';

							echo '<div class="oi_strange_portfolio_item oi_port_style_ii">';

								echo '<div class="oi_vc_potrfolio item_height_x1" style="background-image: url(\'' . (wp_get_attachment_url($meta5['home'][0])) . '\');">';

									echo '<a href="' . $perm5 . '">';

										echo '<div class="oi_vc_port_mask bg_rgba0006">';

											echo '<div class="text-center">';

												echo '<h3 class="oi_sub_legend text_fff"> ' . $post4->post_title . ' </h3>';
												echo '<div class="oi_vc_port_cat text_fff">' . $cat5[0]->name . '</div>';
												echo '<div class="oi_vc_sep bg_fff"></div>';

											echo '</div>';

										echo '</div>';

									echo '</a>';

								echo '</div>';

							echo '</div>';

						echo '</div>';

					echo '</div>';
					echo '<div class="col-sm-8">';
						echo '<div class="row row-fluid  oi_inner_without_paddings">';

							echo '<div class="col-sm-6">';

								echo '<div class="oi_vc_text item_height_x1 bg_fff">';

									echo '<div class="oi_vc_text_span">';

										while ($contato -> have_posts()) : $contato->the_post();

											echo get_the_content();
											
										endwhile;

									echo '</div>';

								echo '</div>';

							echo '</div>';

							echo '<div class="col-sm-6">';

									echo '<div class="oi_vc_text oi_contact_block_holder item_height_x1 bg_e5e5e5">';

										echo '<div class="oi_vc_text_span">';

											echo '<div class="oi_tringle"></div>';
											echo '<a class="oi_contact_block" href="#" data-remodal-target="modal">';

												echo '<div class="circle">';

													echo '<div class="mail-box">';

														echo '<div class="flag"></div>';

													echo '</div>';

												echo '</div>';

											echo '</a>';

										echo '</div>';
										echo '<div class="remodal" data-remodal-id="modal">';

											echo '<button data-remodal-action="close" class="remodal-close"></button>';
											echo do_shortcode('[contact-form-7 id="13" title="Formulário de contato"]');

										echo '</div>';

									echo '</div>';

								echo '</div>';
							
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

		echo '</div>';

	echo '</div>';

	get_footer();

?>