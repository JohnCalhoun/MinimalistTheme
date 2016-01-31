<?php get_header(); ?>
	<div id="content">
     <div class="row">
     <div class="col-md-8">

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
				
		<?php endwhile; endif; ?>
	<small><?php edit_post_link('Edit', '<p>', '</p>'); ?></small>
	</div>
     <div class="col-md-4 hidden-xs hidden-sm">
          <?php get_sidebar('page'); ?>
     </div>
     </div>
     </div>
<?php get_footer(); ?>
