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

</head>
<body>
	
	<header class="clearfix">
		
		<nav id="nSkip">
			<ul>
				<li><a href="#nMain" title="Skip To: Main Navigation">Main Navigation</a></li>
				<li><a href="#template" title="Skip To: Content">Content</a></li>
				<li><a href="#nQuickLinks" title="Skip To: Quick Links">Quick Link Navigation</a></li>
				<li><a href="#nLegal" title="Skip To: Legal Navigation">Legal Navigation</a></li>
			</ul>
		</nav>
		
		<a href="/" title="View: SHERPA Homepage" id="logo">
			<img src="<?php bloginfo('template_url'); ?>/img/header/logo.png" width="177" height="48" alt="Sherpa Logo" />
		</a>
		
		<address id="contactInfo">
			<span class="phoneUs">Call us now</span> <span class="phone">0191 211 1920</span><br />
			<span class="emailUs">or email</span> <a href="mailto:info@sherpabusinessconsultancy.com" class="email" title="Email <?php bloginfo('name')?>">info@sherpabusinessconsultancy.com</a>
		</address>
		
	<!-- END: Contact Details -->		

	</header>
	
<!-- END LAYOUT (Header) [] -->

	<div id="mainBar" class="clearfix">

		<nav id="nMain">
			<ul class="variable_black clearfix">
				<li>
					<a href="<?php get_option('home'); ?>" title="View: <?php bloginfo('name'); ?> Homepage">Home</a>
				</li>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav>

	</div>
	<div class="clear"></div>
	
<!-- END: LAYOUT (Main Nav + Search Form) -->	
<!-- END: WP, header.php -->