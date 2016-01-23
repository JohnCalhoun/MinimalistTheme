<?php
	add_theme_support( 'automatic-feed-links' ); 
	register_nav_menus( array(
					'main_menu'=>'Main menu in header and footer'
					)); 
	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}
?>


