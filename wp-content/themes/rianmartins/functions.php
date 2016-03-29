<?php
	
	add_theme_support('post-thumbnails');
	add_action('init',	'register_my_menus');

	function register_my_menus() {

		register_nav_menus(

			array(

				'menu-topo'		=>	__('Menu Topo')

			)

		);

	}

?>