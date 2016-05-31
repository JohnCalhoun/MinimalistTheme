<?php get_header(); ?>

	<div id="content">
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'menu_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'single_menu',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'single_subheader'
                    )); ?>
         </div>
     </div>
     <div class="row">
     <div class="col-md-8">

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php if( isset($_GET['show']) && ($_GET['show']=='comments')): ?>
               <a href="<?php the_permalink(); ?>" rel="bookmark">Return to Post</a>
               <?php comments_template(); ?>
          <?php else :?>
               <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php get_template_part('tag-cat'); ?>
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
     <div class="col-md-4 hidden-xs hidden-sm">
          <?php get_sidebar('single'); ?>
     </div>
     </div>
	<div class="row">
		<?php get_sidebar('singleFooter'); ?>
	</div>
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'menu_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'single_footer',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'single_subfooter'
                    )); ?>
         </div>
     </div>
     </div>
<?php get_footer(); ?>
