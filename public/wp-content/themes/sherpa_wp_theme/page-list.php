<?php
/*
Template Name: Page List Page
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
				<h1 class="hide"></h1>
			
			<?php 
					$this_page_id		= get_post(the_id())->ID;
					$this_child_pages = get_pages('child_of='.$this_page_id.'&parent='.$this_page_id);									
					foreach($this_child_pages as $child_page) {
			?>				
				<section class="item">
					<a href="<?= $child_page->guid ?>" title="View: <?= $child_page->post_title ?>">
						<h2>
							<span class="creighton title"><?= $child_page->post_title ?></span> 
						</h2>
						<p><?= (get_post_meta($child_page->ID, 'excerpt', true)) ?></p>	
					</a>
				</section>
				
			<?php } ?>

		
			</article>
				
		</div>
		
	<!-- END: Clm1 -->
	
		<div id="clm2">	
			<div class="contentv2">
				
				<?php get_sidebar('services'); ?>			
			
			</div>
			<div class="clm2Bottom"></div>
		</div>

<!-- END: Clm2 -->					
			
	</div>
		
<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- END WP, Blog List.php -->	

<?php get_footer(); ?>