<?php get_header(); ?>

	<div id="content">

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php if( isset($_GET['show']) && ($_GET['show']=='comments')): ?>
               <a href="<?php the_permalink(); ?>" rel="bookmark">Return to Post</a>
               <?php comments_template(); ?>
          <?php else :?>
               <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
               <a href="?show=comments">Comments</a>
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
