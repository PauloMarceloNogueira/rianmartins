<?php
	
	get_header();

		the_post();

		echo '<div class="oi_content_holder">';

			echo '<div class="container oi_container_holder_vc">';

				echo '<div class="oi_page_holder_custom">';

					$image	=	wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
					echo '<div class="row row-fluid oi_inner_without_paddings mb0 bg_demo_contact" style="background-image: url(\'' . $image . '\') !important;">';

						echo '<div class="col-sm-6 pl40">';

							echo '<div class="wpb_wrapper">';

								echo '<div class="oi_vc_text item_height_x1 bg_fff">';

									echo '<div class="oi_vc_text_span">';

											

										// echo '<p></p>';
										// echo '<h2>LET’S KEEP IN TOUCH</h2>';
										// echo '<p></p>';
										// echo '<ul class="oi_icon_list oi_icon_list_align_left">';

											// echo '<li class="oi_list_item mb10">';

												// echo '<div class="oi_list_item_icon_holder oi_icon_left">';

													// echo '<div class="oi_icon_inner_holder mr14">';

														// echo '<i class="typcn typcn-location-outline size20 lh20 text_B99D61"></i>';

													// echo'</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_center">';

													// echo '<div class="oi_icon_inner_holder mb14">';

														// echo '<i class="typcn typcn-location-outline size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_content_holder">';

													// echo '<p class="oi_item_title font_normal text_000">';

														// echo '77a First Street, London, UK';

													// echo '</p>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_right">';

													// echo '<div class="oi_icon_inner_holder ml14">';

														// echo '<i class="typcn typcn-location-outline size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';

											// echo '</li>';
											// echo '<li class="oi_list_item mb10">';

												// echo '<div class="oi_list_item_icon_holder oi_icon_left">';

													// echo '<div class="oi_icon_inner_holder mr14">';

														// echo '<i class="typcn typcn-mail size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';

												// echo '<div class="oi_list_item_icon_holder oi_icon_center">';

													// echo '<div class="oi_icon_inner_holder mb14">';

														// echo '<i class="typcn typcn-mail size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_content_holder">';

													// echo '<p class="oi_item_title font_normal text_000">';

														// echo 'contact@barton.com';

													// echo '</p>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_right">';

													// echo '<div class="oi_icon_inner_holder ml14">';
														
														// echo '<i class="typcn typcn-mail size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';

											// echo '</li>';
											// echo '<li class="oi_list_item mb10">';

												// echo '<div class="oi_list_item_icon_holder oi_icon_left">';

													// echo '<div class="oi_icon_inner_holder mr14">';

														// echo '<i class="typcn typcn-phone-outline size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_center">';

													// echo '<div class="oi_icon_inner_holder mb14">';

														// echo '<i class="typcn typcn-phone-outline size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_content_holder">';

													// echo '<p class="oi_item_title font_normal text_000">';

														// echo '+44 1324 56-789';

													// echo '</p>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_right">';

													// echo '<div class="oi_icon_inner_holder ml14">';
														
														// echo '<i class="typcn typcn-phone-outline size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';

											// echo '</li>';
											// echo '<li class="oi_list_item mb10">';

												// echo '<div class="oi_list_item_icon_holder oi_icon_left">';

													// echo '<div class="oi_icon_inner_holder mr14">';

														// echo '<i class="typcn typcn-time size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_center">';

													// echo '<div class="oi_icon_inner_holder mb14">';

														// echo '<i class="typcn typcn-time size20 lh20 text_B99D61"></i>';

													// echo '</div>';

												// echo '</div>';
												// echo '<div class="oi_list_item_content_holder">';

													// echo '<p class="oi_item_title font_normal text_000">';

														// echo 'Working hours: 8am - 6pm';

													// echo '</p>';

												// echo '</div>';
												// echo '<div class="oi_list_item_icon_holder oi_icon_right">';

													// echo '<div class="oi_icon_inner_holder ml14">';
													// echo '<i class="typcn typcn-time  size20 lh20 text_B99D61"></i>';

												// echo '</div>';

											// echo '</div>';

										// echo '</li>';

									// echo '</ul>';
									echo get_the_content();

								echo '</div>';

						echo '</div>';

					echo '</div>';

				echo '</div>';
				echo '<div class="col-sm-6"></div>';

			echo '</div>';
			echo '<div class="row row-fluid oi_inner_without_paddings mb0 bg_fff">';

				echo '<div class="col-sm-6">';

					echo '<div class="pt40pb40 pr40pl40">';

						echo do_shortcode('[contact-form-7 id="13" title="Formulário de contato"]');

					echo '</div>';

				echo '</div>';
				echo '<div class="col-sm-6 relative">';

					echo '<div class="clearfix"></div>';
					echo '<div id="map"></div>';

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