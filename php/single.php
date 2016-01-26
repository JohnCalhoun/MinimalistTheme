<?php get_header(); ?>

	<div id="content">

		<div class="post" id="post-<?php the_ID(); ?>">

			<?php get_template_part('header_nav'); ?>
			<div class="entry">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<p>
					<small>
                         <button class="button" onclick="$('#Comments').toggle();">Comments</button>
                         <div id="Comments" style="display: none">
                              <?php comment_form(); ?>
                              <?php comments_template(); ?>		
                         </div>
                        						
					</small>
				</p>

			</div>
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
	<small><?php edit_post_link('Leo edit link', '<p>', '</p>'); ?></small>

	</div>
	
<?php get_footer(); ?>
