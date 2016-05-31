<div id="sidebar-primary" class="sidebar">
     <?php if ( is_active_sidebar( 'index-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'index-sidebar' ); ?>
     <?php else : ?>
          <?php get_template_part('post_nav'); ?>
          <!-- Create some custom HTML or call the_widget().  It's up to you. -->
     <?php endif; ?>
</div>
