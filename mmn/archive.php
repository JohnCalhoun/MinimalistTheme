<?php 
get_header(); ?>

	<div id="content">	
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'menu_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'archives_menu',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'archives_subheader'
                    )); ?>
         </div>
     </div>
     <div class="row">
     <div class="row">
	<div class="col-md-8">
<?php if (have_posts()) : ?>
          <?php the_post(); ?>
          <h1 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php get_search_form(); ?>
          <div class=row>
          <div class="col-md-6">
               <h2>Archives by Month:</h2>
               <ul>
                    <?php wp_get_archives('type=monthly'); ?>
               </ul>
          </div>
          <div class="col-md-6">
               <h2>Archives by Subject:</h2>
               <ul>
                    <?php wp_list_categories(); ?>
               </ul>
          </div>
          </div>
<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

	</div>
     <div class="col-md-4 hidden-xs hidden-sm">
          <?php get_sidebar('archive'); ?>
     </div>
     </div>
     <div class="row">
         <div class="col-md-12">
               <?php wp_nav_menu( array(
                    'menu_class'=>'sub_menu',
                    'depth'=>1,
                    'menu'=>'archive_footer',
                    'fallback_cb'=>FALSE,
                    'theme_location'=>'archive_subfooter'
                    )); ?>
         </div>
     </div>

     </div>

<?php get_footer(); ?>
