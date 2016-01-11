<?php get_header(); ?>

	<div id="content">

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="/" >JMC</a><b style="color: #10B897"> :</b> <b style="color: #999999"><?php the_title(); ?></b></h2>
			<hr />

			<div class="entry">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
				
		<?php endwhile; endif; ?>
	<small><?php edit_post_link('Edit', '<p>', '</p>'); ?></small>
	</div>


<?php get_footer(); ?>