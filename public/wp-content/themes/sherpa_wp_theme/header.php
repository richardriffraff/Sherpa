<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

	<link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php bloginfo('template_url'); ?>/css/layout.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php bloginfo('template_url'); ?>/css/typography.css" rel="stylesheet" type="text/css" media="screen" />
	<!--[if lte IE 7]><link href="<?php bloginfo('template_url'); ?>/css/fix_ie7.css" rel="stylesheet" type="text/css" media="screen"/><![endif]-->
	<!--[if lt IE 7]><link href="<?php bloginfo('template_url'); ?>/css/fix_ie6.css" rel="stylesheet" type="text/css" media="screen"/><![endif]-->
	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery14.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/cufon.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/variable_black_400.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/creighton_400.js"></script>
	
	<script>
	// SHOULD REMAIN IN HEAD
		Cufon.replace('.variable_black', {fontFamily: 'Variable Black', hover : true, separate : 'none'});
		Cufon.replace('.creighton', {fontFamily: 'Creighton', separate : 'none'});
	</script>
	
	<!--[if IE]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<title><?php bloginfo('name')?> <?php wp_title('&laquo', true, 'right'); ?></title>
	
	<?php wp_head() ?>
	
	<script type="text/javascript" src="http://dnn506yrbagrg.cloudfront.net/pages/scripts/0011/1361.js"></script>
</head>
<!-- END: WP, header.php -->