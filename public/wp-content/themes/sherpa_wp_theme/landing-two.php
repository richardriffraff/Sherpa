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
					$title 	= get_post()->post_title;				
				?>
				
				
				<img src="<?php bloginfo('template_url'); ?>/img/content/section/section1Man2.png" alt="Business Consultancy Services with SHERPA" class="s1Img">
				<h1 class="title creighton"><?= $title ?></h1>
				<p><?= $content ?></p>
			</section>
			
			
			<nav class="nav6 nOffset4">
				<ul class="clearfix">
				<?php
						$this_page_id			= get_post()->ID;
						$this_child_pages 	= get_pages('child_of='.$this_page_id.'&parent='.$this_page_id);										
						foreach($this_child_pages as $child_page) {
				?>
					<li>
						<section class="section3">
							<h2 class="title creighton"><?= $child_page->post_title ?></h2>
							<p><?= (get_post_meta($child_page->ID, 'excerpt', true)) ?></p>
							<a href="<?= $child_page->guid ?>" class="icon1" title="View: <?= $child_page->post_title ?>">Find Out More</a>
						</section>
					</li>	
				<?php } ?>																			
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