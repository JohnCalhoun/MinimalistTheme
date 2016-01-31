<img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" /> 
<h2 class="header-title"><a class="logo" href="<?php echo get_home_url(); ?>" ><?php bloginfo('name'); ?></a>| <a class="page-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php wp_nav_menu( array(     
          'main_menu'=>'Main menu',
          'depth'=>1,
          'menu_class'=>'main_menu',
          'before'=>'',
          'after'=> ''
          )); ?>

