<!DOCTYPE HTML> 
<html lang=en>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" name="viewport" content="<?php bloginfo('html_type'); ?>, charset=<?php bloginfo('charset'); ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="javascripts/bootstrap.js"></script>
	<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(); ?> :<?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body>
<div id="container">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">

