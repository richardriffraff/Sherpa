<?php
/*
Template Name: Sherpa Homepage
*/
?>
<?php get_header(); ?>

<!-- WP, START TEMPLATE: homepage.php -->
<body class="body2">
	
	<?php get_sidebar('head'); ?>
	
<!-- END: LAYOUT (Main Nav + Search Form) -->
<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
		
	<div id="template" class="three1 three1v2 clearfix">
		<div id="clm1">

			<section class="section1">
				<?php
					$content	= get_post(the_ID())->post_content;
					$meta  	= get_post_custom(get_post(the_ID())->ID);
					$title 	= $meta['Title'][0];
					$image	= $meta['image'][0];
								
				?>
				
				<img src="<?php bloginfo('template_url'); ?>/img/content/section/<?= $image ?>" alt="Business Consultancy with SHERPA" class="s1Img">
				<h1 class="title creighton"><?= $title ?></h1>
				<p><?= $content ?></p>
				<a href="<?php bloginfo('url') ?>/case-studies" class="btn btn3" title="View: How SHERPA helps busines' grow"><span>View Case Studies</span><i></i></a>
			</section>

		<!-- END: The Promo -->

			<section class="section2">
				<h2 class="title creighton">Start Up Business</h2>
				<ul class="clearfix">
					<li>Plan Your Business</li>
					<li>Improve Your Sales</li>
					<li>Find Startup Funding</li>
					<li>Making it Happen</li>
				</ul>
				<a href="<?php bloginfo('url') ?>/solutions/for-startups" class="btn btn1" title="View: Consultancy for Start up Businesses"><span>Find Out More</span><i></i></a>				
			</section>

		<!-- END: Service -->

			<section class="section2">
				<h2 class="title creighton">For Growing Businesses</h2>
				<ul class="clearfix">
					<li>Business Assessment</li>
					<li>Raising Finance</li>
					<li>Grow Your Business</li>
					<li>Improve Sales &amp; Profit</li>
				</ul>
				<a href="<?php bloginfo('url') ?>/solutions/for-growing-businesses" class="btn btn1" title="View: Consultancy for Early Stage Businesses"><span>Find Out More</span><i></i></a>				
			</section>

		<!-- END: Service -->

			<section class="section2">
				<h2 class="title creighton">Established SMEs</h2>
				<ul class="clearfix">
					<li>Financial Support</li>
					<li>Organisation Structure</li>
					<li>Making Tough Decisions</li>
					<li>Take Control</li>
				</ul>
				<a href="<?php bloginfo('url') ?>/solutions/for-established-smes" class="btn btn1" title="View: Consultancy Established SME's"><span>Find Out More</span><i></i></a>				
			</section>	

			<div class="clear"></div>

		<!-- END Services -->

			<blockquote class="blockQuote bQuote1">
				<p>Something nice someone said about your service, particularly with regard to benefits and transparent, risk-free nature of the service</p>
				<cite>Mr George Stephenson, The Rocket</cite>
			</blockquote>
					
		</div>
		
	<!-- END: Clm1 -->

		<div id="clm2">	
			<div class="contentv2">

				<?php get_sidebar('homepage'); ?>	

			</div>
			<div class="clm2Bottom"></div>
		</div>

<!-- END: Clm2 -->					

	</div>

<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- END WP, Index.php -->	

<script>
	var section_name = "catalysing-business-growth";
</script>

<?php get_footer(); ?>
