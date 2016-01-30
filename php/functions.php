<?php
     //theme supports
     add_theme_support( 'automatic-feed-links' ); 
     
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
  

?>
