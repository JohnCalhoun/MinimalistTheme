<?php get_header(); ?>

	<div id="content">
	<div class="row">
	<div class="col-md-8">
<?php if (have_posts()) : ?>


		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php include "header_nav.php"; ?>
				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
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
<table>
<tr><th><br /><br /><h4><b>POSTS</b></h4></th></tr>

	

<?php
$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) as `month`, DAYOFMONTH(post_date) as `dayofmonth`, ID, post_name, post_title FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC";
$key = md5($query);
$cache = wp_cache_get( 'mp_archives' , 'general');
if ( !isset( $cache[ $key ] ) ) {
  $arcresults = $wpdb->get_results($query);
  $cache[ $key ] = $arcresults;
  wp_cache_add( 'mp_archives', $cache, 'general' );
} else {
  $arcresults = $cache[ $key ];
}
if ($arcresults) {
  $last_year = 0;
  $last_month = 0;
  foreach ( $arcresults as $arcresult ) {
    $year = $arcresult->year;
    $month = $arcresult->month;
    if ($year != $last_year) {
      $last_year = $year;
      $last_month = 0;
?>
<tr class=year><th><br /><br /><?php echo $arcresult->year; ?></th></tr>
<?php
    }
    if ($month != $last_month) {
      $last_month = $month;
?>
<tr class=archive><th><?php echo $wp_locale->get_month($arcresult->month); ?></th><td></td></tr>
<?php
    }
?>
<tr class=archive><th><?php echo $arcresult->dayofmonth; ?></th><td id=p<?php echo $arcresult->ID; ?>><a href="/<?php echo $arcresult->post_name; ?>"><?php echo strip_tags(apply_filters('the_title', $arcresult->post_title)); ?></a></td></tr>
<?php
  }
}
?>
</table>
</div>
</div>
</div>

<?php get_footer(); ?>
