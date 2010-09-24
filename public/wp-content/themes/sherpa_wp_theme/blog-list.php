<?php
/*
Template Name: Blog List Page
*/
?>
<?php get_header(); ?>

<!-- WP, START TEMPLATE: blog-list.php -->
<body>
	
	<?php get_sidebar('head'); ?>	
<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
<!-- START WP, blog-list.php -->
		
	<div id="template" class="three1 clearfix">
		<div id="clm1">
			
			<article class="article2">
				<h1 class="hide"><?php bloginfo('name')?> Posts</h1>
			
			<?php $myposts	= get_posts();  /* print_r($myposts); */  ?>
			<?php foreach ($myposts as $mypost) { ?>
				
				<section class="item">
					<a href="<?= $mypost->guid ?>" title="View: <?= $mypost->post_title ?>">
						<h2>
							<span class="creighton title"><?= $mypost->post_title ?></span> 
						</h2>

						<p><?= $mypost->post_excerpt ?></p>
						
					</a>
				</section>
				
			<?php } ?>

		
			</article>
				
		</div>
		
	<!-- END: Clm1 -->
	
		<div id="clm2">	
			<div class="contentv2">
				
				<?php get_sidebar('blog'); ?>			
			
			</div>
			<div class="clm2Bottom"></div>
		</div>

<!-- END: Clm2 -->					
			
	</div>
		
<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- END WP, Blog List.php -->	

<?php get_footer(); ?>