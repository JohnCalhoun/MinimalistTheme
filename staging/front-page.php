<?php get_header(); ?>

	<div id="content" class="front-page">
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'main_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'front_menu',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'front_subheader'
                    )); ?>
         </div>
     </div>
     <div class="row">
     <div class="col-md-12">
	<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                     
				<h4>Welcome!</h4>
                    <p><?php bloginfo( 'description' ); ?></p>
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
				
		<?php endwhile; endif; ?>
	<small><?php edit_post_link('Edit', '<p>', '</p>'); ?></small>
	</div>
     </div>
<?php get_footer(); ?>
