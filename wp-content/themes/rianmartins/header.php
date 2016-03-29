<?php
	
	global $post;
	$slug	=	get_post( $post )->post_name;

?>
<!DOCTYPE html>
<html lang="pt-BR">
	
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
	  		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="assets/images/favicon.ico" />
		<title><? bloginfo('name') ?><? wp_title(); ?></title>
		
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/FlexSlider/flexslider.css' type='text/css' media='all' />
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/css/owl.carousel.css' type='text/css' media='all' />
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/css/remodal.css' type='text/css' media='all' />
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/css/remodal-default-theme.css' type='text/css' media='all' />
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/css/tipso.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='<?=(get_bloginfo('template_url'))?>/_assets/css/options.css' type='text/css' media='all' />

		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato%7CRoboto%3A300%2C400%2C300normal%2C300300%7CDroid+Serif&#038;ver=1445246577' type='text/css' media='all' />

		<script type='text/javascript' src='<?=(get_bloginfo('template_url'))?>/_assets/js/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='<?=(get_bloginfo('template_url'))?>/_assets/js/jquery-migrate-1.2.1.min.js'></script>

	</head>
	<body class="<?=($slug)?> page">

		<?php

			echo '<div class="oi_head_holder nav-down">';

				echo '<div class="oi_logo_holder logo-menu_wide_boxed">';

					echo '<div class="container oi_logo-menu_container">';

						echo '<div class="row vertical-align">';

							echo '<div class="col-md-2 col-sm-5 col-xs-12">';

								$configuracoes = get_post_meta(169);
								echo '<a href="' . (get_bloginfo('url')) . '" class="oi_logo">';

									echo '<img src="' . (wp_get_attachment_url($configuracoes['icone'][0])) . '" alt="BARTON - Smart Portfolio HTML Template for Creative People">';

								echo '</a>';

							echo '</div>';
							echo '<div class="clearfix visible-xs"></div>';
							echo '<div class="col-md-10 col-sm-8 oi_main_menu ">';

								echo '<a class="oi_xs_menu" href="#"><span>OPEN MENU</span></a>';

								wp_nav_menu(

									array(
										
										'menu'				=>	'menu-topo',
										'theme-location'	=>	'',
										'container'			=>	'div',
										'container_class'	=>	'',
										'container_id'		=>	'menu-main-menu-container',
										'menu_class'		=>	'oi_header_menu_fixed',
										'echo'				=>	true,
										'menu_id'			=>	'menu-main-menu',
										'before'			=>	'',
										'after'				=>	'',
										'link_before'		=>	'',
										'link_after'		=>	'',
										'depth'				=>	'',
										'walker'			=>	''

									)

								);

							echo '</div>';

						echo '</div>';
						echo '<div class="oi_sm_menu">';

							wp_nav_menu(

								array(
									
									'menu'				=>	'menu-topo',
									'theme-location'	=>	'',
									'container'			=>	'div',
									'container_class'	=>	'',
									'container_id'		=>	'menu-main-menu-container',
									'menu_class'		=>	'oi_header_menu_mobile oi_header_menu_fixed',
									'echo'				=>	true,
									'menu_id'			=>	'menu-main-menu-1',
									'before'			=>	'',
									'after'				=>	'',
									'link_before'		=>	'',
									'link_after'		=>	'',
									'depth'				=>	'',
									'walker'			=>	''

								)

							);

						echo '</div>';

					echo '</div>';

				echo '</div>';

			echo '</div>';

		?>