<?php get_header(); ?>

	<div id="content">	
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'menu_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'index_menu',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'index_subheader'
                    )); ?>
         </div>
     </div>
     <div class="row">
     <div class="row">
	<div class="col-md-8">
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
               <h1 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> </h1>
               <div class="entry">
                    <?php the_post_thumbnail(); ?>
                    <?php the_excerpt(); ?>
               </div>
               <?php get_template_part('tag-cat'); ?> 
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
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'menu_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'index_footer',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'index_subfooter'
                    )); ?>
         </div>
     </div>

     </div>

<?php get_footer(); ?>
