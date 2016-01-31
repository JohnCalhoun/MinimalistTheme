<?php
     //theme supports
     add_theme_support( 'automatic-feed-links' ); 
     add_theme_support( 'post-thumbnails' );      
     add_theme_support( 'title-tag' );     
     add_theme_support( 'custom-background' );
     add_theme_support( 'custom-header' );
     //nav menus
     register_nav_menus( array(
                         'main_menu'=>'Main menu in header and footer'
                         )); 
     if ( ! isset( $content_width ) ) {
          $content_width = 600;
     }
     
     //to make comments work
     function curPageURL() {
          $pageURL = 'http';
          if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
          $pageURL .= "://";
          if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
          } else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
          }
          return $pageURL;
     }

     function new_excerpt_more($more) {
          global $post;
          return '<a class="moretag" href="'. get_permalink($post->ID) . '"> More...</a>';
}
     add_filter('excerpt_more', 'new_excerpt_more');
     //editor style
     function my_theme_add_editor_styles() {
          add_editor_style( 'editor-style.css' );
     }
     add_action( 'admin_init', 'my_theme_add_editor_styles' ); 
?>
