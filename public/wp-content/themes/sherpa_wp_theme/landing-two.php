<?php
/*
Template Name: Landing Page Type 2
*/
?>
<?php get_header(); ?>

<!-- WP, START TEMPLATE: landing-two.php -->
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
					$title 	= get_post(the_ID())->post_title;	
					$image	= $meta['image'][0];			
				?>
				
				
				<img src="<?php bloginfo('template_url'); ?>/img/content/section/<?= $image ?>" alt="<?= $title ?> Image" class="s1Img">
				<h1 class="title creighton"><?= $title ?></h1>
				<p><?= $content ?></p>
			</section>
			
			
			<nav class="nav6 nOffset4">
				<ul class="clearfix">
				<?php
						$this_page_id			= get_post(the_ID())->ID;
						$this_child_pages 	= get_pages('child_of='.$this_page_id.'&parent='.$this_page_id.'&sort_column=menu_order');									
						foreach($this_child_pages as $child_page) {
				?>
					<li>
						<section class="section3">
							<h2 class="title creighton"><?= $child_page->post_title ?></h2>
							<p><?= (get_post_meta($child_page->ID, 'excerpt', true)) ?></p>
							<a href="<?= bloginfo('url') ?>/?page_id=<?= $child_page->ID ?>" class="icon1" title="View: <?= $child_page->post_title ?>">Find Out More</a>
						</section>
					</li>	
				<?php } ?>																			
				</ul>
			</nav>
			
		<!-- END: The Nav -->
		
			<?php get_sidebar('casestudies') ?>
			
			
		</div>
		
	<!-- END: Clm1 -->

		<div id="clm2">
			<div class="contentv2">

				<?php
					$promos	= get_pages('include=252, 256');
					$i = 0;
					foreach($promos as $promo) {
						if ($i != 0) {
				?>
					<div class="hr"><hr /></div>
				<?php 
					} 
				?>

				<a href="<?php bloginfo('url'); ?>/?page_id=<?= $promo->ID ?>" class="box bOffset1 <? if ($i == 0) {?> b2<?php } else { ?> b3<? } ?>" title="View: <?= $promo->post_title ?>">
					<h4 class="title creighton"><?= $promo->post_title ?></h4>
					<p><?= (get_post_meta($promo->ID, 'excerpt', true)) ?></p>
					<span class="btn btn2">
						<span>Find Out More</span>
						<i></i>
					</span>
				</a>

				<?php 
						$i++;
					} 
				?>
				
				<blockquote class="blockQuote bQuote2 bQOffset1">
					<p>Something nice someone said about your service, particularly with regard to benefits and transparent, risk-free nature of the service</p>
					<cite>Mr George Stephenson, The Rocket</cite>
				</blockquote>

			</div>
			<div class="clm2Bottom"></div>
		</div>

	<!-- END: Clm2 -->
	
	</div>
	
	
<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- START LAYOUT (ID: Footer) [Copyright + Global Nav] -->

<?php get_footer(); ?>	