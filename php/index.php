<?php get_header(); ?>

	<div id="content">
	<div class="row">
	<div class="col-md-8">
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
               <h1 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> </h1>
               <div class="entry">
                    <?php the_post_thumbnail(); ?>
                    <?php the_excerpt(); ?>
               </div>
               <div class="entry-meta">
                    <div class="row">
                    <div class="col-xs-6 text-left">
                         <p><?php the_tags('',':',''); ?></p>
                    </div>
                    <div class="col-xs-6 text-right">
                         <p><?php the_category(':'); ?></p>
                    </div>
                    </div>
          	</div>
               </div>
		<?php endwhile; ?>
		<div class="nav-previous alignleft"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<div class="nav-next alignright"><?php next_posts_link( 'Older posts' ); ?></div>



<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>


	</div>
<div class="col-md-4 hidden-xs hidden-sm">
     <?php get_sidebar('index'); ?>
</div>
</div>
</div>

<?php get_footer(); ?>
