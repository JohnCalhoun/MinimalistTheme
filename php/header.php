<!DOCTYPE HTML> 
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1, <?php bloginfo('html_type'); ?>, charset=<?php bloginfo('charset'); ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="javascripts/bootstrap.js"></script>
	<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<title><?php wp_title(':'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="hidden-xs hidden-sm">
     <?php get_template_part('header_nav'); ?>
</div>
<div class="hidden-md hidden-lg text-center">
     <?php get_template_part('header_nav'); ?>
</div>
<hr />




