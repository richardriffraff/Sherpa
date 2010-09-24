<?php
/*
Template Name: Landing Page Type 2
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
					$content	= get_post()->post_content;
					$meta  	= get_post_custom(get_post()->ID);
					$title 	= $meta['Title'][0];				
				?>
				
				
				<img src="<?php bloginfo('template_url'); ?>/img/content/section/section1Man2.png" alt="Business Consultancy Services with SHERPA" class="s1Img">
				<h1 class="title creighton"><?= $title ?></h1>
				<p><?= $content ?></p>
			</section>
			
			
			<nav class="nav6 nOffset4">
				<ul class="clearfix">
					<li>
						<section class="section3">
							<h2 class="title creighton">Objective Assessment</h2>
							<p>The best way to avoid a problem is to see it coming...</p>
							<a href="#" class="icon1" title="Find Out About Objective Assesment">Find Out More</a>
						</section>
					</li>
				<!-- END ITEM -->
					<li>
						<section class="section3">
							<h2 class="title creighton">Objective Assessment</h2>
							<p>The best way to avoid a problem is to see it coming...</p>
							<a href="#" class="icon1" title="Find Out About Objective Assesment">Find Out More</a>
						</section>
					</li>
				<!-- END ITEM -->					
					<li>
						<section class="section3">
							<h2 class="title creighton">Objective Assessment</h2>
							<p>The best way to avoid a problem is to see it coming...</p>
							<a href="#" class="icon1" title="Find Out About Objective Assesment">Find Out More</a>
						</section>
					</li>
				<!-- END ITEM -->
					<li>
						<section class="section3">
							<h2 class="title creighton">Objective Assessment</h2>
							<p>The best way to avoid a problem is to see it coming...</p>
							<a href="#" class="icon1" title="Find Out About Objective Assesment">Find Out More</a>
						</section>
					</li>
				<!-- END ITEM -->
					<li>
						<section class="section3">
							<h2 class="title creighton">Objective Assessment</h2>
							<p>The best way to avoid a problem is to see it coming...</p>
							<a href="#" class="icon1" title="Find Out About Objective Assesment">Find Out More</a>
						</section>
					</li>
				<!-- END ITEM -->
					<li>
						<section class="section3">
							<h2 class="title creighton">Objective Assessment</h2>
							<p>The best way to avoid a problem is to see it coming...</p>
							<a href="#" class="icon1" title="Find Out About Objective Assesment">Find Out More</a>
						</section>
					</li>
				<!-- END ITEM -->																	
				</ul>
			</nav>
			
		</div>
		
	<!-- END: Clm1 -->

		<div id="clm2">
			<div class="contentv2">

				<?php get_sidebar('services') ?>

			</div>
			<div class="clm2Bottom"></div>
		</div>

	<!-- END: Clm2 -->
	
	</div>
	
<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- START LAYOUT (ID: Footer) [Copyright + Global Nav] -->

<?php get_footer(); ?>	