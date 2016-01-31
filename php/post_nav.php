<div id="post_nav">
<h4><b>POSTS</b></h4>
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
  $counter=0;
  foreach ( $arcresults as $arcresult ) {
    if(++$counter == 10 ) break;
    $year = $arcresult->year;
    $month = $arcresult->month;
    if ($year != $last_year) {
      $last_year = $year;
      $last_month = 0;
?>
<div class="year"><?php echo $arcresult->year; ?></div>
<?php
    }
    if ($month != $last_month) {
      $last_month = $month;
?>
<div class="month"><?php echo $GLOBALS['wp_locale']->get_month($arcresult->month) ?></div>
<?php
    }
?>
<div class="day"><?php echo $arcresult->dayofmonth; ?></div>
<div class="title"><span id=p<?php echo $arcresult->ID; ?>><a href="<?php echo get_permalink($arcresult->ID); ?>"><?php echo strip_tags(apply_filters('the_title', $arcresult->post_title)); ?></span></div>
<?php
  }
}
?>
</div>
