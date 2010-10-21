<?php
/*
Template Name: Landing Page Type 1
*/
?>
<?php get_header(); ?>

<!-- WP, START TEMPLATE: landing-one.php -->
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
				
				
				<img src="<?php bloginfo('template_url'); ?>/img/content/section/<?= $image ?>" alt="<?= $title ?> image" class="s1Img">
				<h1 class="title creighton"><?= $title ?></h1>
				<p><?= $content ?></p>
			</section>
			
		<!-- END: Promo -->
		
			<nav class="nav4 nOffset3">
				
				<h2 class="title creighton"><?= (get_post_meta(get_post(the_ID())->ID, 'Title', true)) ?></h2>
				<ul>
					<?php
							$this_page_id			= get_post(the_ID())->ID;
							$this_child_pages 	= get_pages('child_of='.$this_page_id.'&parent='.$this_page_id);									
							foreach($this_child_pages as $child_page) {
					?>
					<li>
						<a href="<?= bloginfo('url') ?>/?page_id=<?= $child_page->ID ?>" title="View: <?= $child_page->post_title ?>">
							<h3 class="subTitle"><?= $child_page->post_title ?></h3>
							<p><?= get_post_meta($child_page->ID, 'excerpt', true) ?></p>
						</a>
					</li>
				<?php } ?>																						
				</ul>
			</nav>
			
			<div class="clear"></div>
			
		<!-- END The NAV -->
			
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

				<?= $offsetClass;  ?>

				<a href="<?php bloginfo('url'); ?>/<?= $promo->post_name ?>" class="box b2 bOffset1" title="View: <?= $promo->post_title ?>">
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
				
				<?php get_sidebar('landing1') ?>	
				
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
<!-- END WP, Index.php -->	

<?php get_footer(); ?>