<?php get_header(); ?>

	<div id="content">

		<div class="post" id="post-<?php the_ID(); ?>">

			<?php get_template_part('header_nav'); ?>
			<div class="entry">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php if( isset($_GET['comments']) && ($_GET['comments']==1)): ?>
               <a href="<?php the_permalink(); ?>" rel="bookmark">Return to Post</a>
               <?php comments_template(); ?>
          <?php else :?>
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
               <a href="<?php the_permalink(); ?>&comments=1">Comments</a>
               (<?php comments_number(); ?>)
		<?php endif; ?>	
               </div>
		</div>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
     <?php endif; ?>
	<small><?php edit_post_link('Leo edit link', '<p>', '</p>'); ?></small>

	</div>
	
<?php get_footer(); ?>
