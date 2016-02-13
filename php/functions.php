<?php
     //theme supports
     add_theme_support( 'automatic-feed-links' ); 
     add_theme_support( 'post-thumbnails' );      
     add_theme_support( 'title-tag' );     
     add_theme_support( 'custom-background' );
     add_theme_support( 'custom-header' );
     add_theme_support( 'html5', array( 'search-form',
                                        'comment-list',
                                        'comment-form',
                                        'search-from',
                                        'gallery',
                                        'caption'
                                   ) ); 
     //nav menus
     register_nav_menus( array(
                         'main_menu'=>'Main menu in header and footer',
                         'single_subheader'=>'header for Single post pages',
                         'page_subheader'=>'header for the pages',
                         'archives_subheader'=>'header for the archives pages',
                         'index_subfooter'=>'header for the index pages',
                         'front_subfooter'=>'header for the front page',
                         
                         'single_subfooter'=>'footer for Single post pages',
                         'page_subfooter'=>'footer for the pages',
                         'archives_subfooter'=>'footer for the archives pages',
                         'index_subfooter'=>'footer for the index pages',
                         'front_subfooter'=>'footer for the front page'
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
     //edit except read more
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
     add_action( 'widgets_init', 'my_register_sidebars' );

     function my_register_sidebars() {
          /* Register the 'primary' sidebar. */
          register_sidebar(
               array(
                    'id' => 'index-sidebar',
                    'name' => ( 'Index Sidebar' ),
                    'description' => ( 'Sidebar for the Index page' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
               )
          );
          register_sidebar(
               array(
                    'id' => 'page-sidebar',
                    'name' => ( 'Page Sidebar' ),
                    'description' => ( 'Sidebar for the Single page' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
               )
          );
          register_sidebar(
               array(
                    'id' => 'page-sidebarFooter',
                    'name' => ( 'Page SidebarFooter' ),
                    'description' => ( 'Sidebar footer for the Single page' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
               )
          );
          register_sidebar(
               array(
                    'id' => 'Single-sidebar',
                    'name' => ( 'Single Sidebar' ),
                    'description' => ( 'Sidebar for the Single post pages' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
               )
          );
          register_sidebar(
               array(
                    'id' => 'archive-sidebar',
                    'name' => ( 'Archive Sidebar' ),
                    'description' => ( 'Sidebar for the Archive pages' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
               )
          );

     /* Repeat register_sidebar() code for additional sidebars. */
     }
     global $wp_locale; 
?>
