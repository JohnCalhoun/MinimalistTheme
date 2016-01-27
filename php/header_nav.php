<h2 class="hidden-xs hidden-sm"><a href="<?php echo get_home_url(); ?>" ><?php bloginfo('name'); ?></a><span style="color: #10B897">: </span><b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></b></h2>
<h2 class="hidden-md hidden-lg text-center"><a href="<?php echo get_home_url();?>"><? bloginfo('name'); ?></a><span style="color: #10B897">: </span><b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></b></h2>
<?php wp_nav_menu( array(     
          'main_menu'=>'Main menu',
          'depth'=>1,
          'menu_class'=>'main_menu',
          'before'=>'',
          'after'=> ''
          )); ?>
<hr />


