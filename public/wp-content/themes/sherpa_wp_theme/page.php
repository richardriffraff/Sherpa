<?php get_header(); ?>
<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
<body>
	
	<?php get_sidebar('head'); ?>
	
<!-- START WP, page.php -->		
		
	<div id="template" class="three1 clearfix">
		<div id="clm1">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>			
			
			<article class="article1">
				
				<?php
					$this_post		= get_post();	
					$parent_id 		= $this_post->post_parent;
					$ids_to_match	= array(116, 113, 109, 60);
					
					if (in_array($parent_id, $ids_to_match)) {
						$parent_post	= get_post($parent_id);
						?>
						
						<a href="<?= bloginfo('url'); ?>/?page_id=<?= $parent_post->ID; ?>" title="View: <?= $parent_post->post_title; ?>" id="back"><?= $parent_post->post_title; ?></a>
						
						<?php 
					}
				?>
				
				<h1>
					<span class="creighton title"><?php the_title() ?></span> 
				</h1>
				
				<?php the_content(''); ?>

				<?php
					if (get_post()->ID != 182) {
						get_sidebar('share');
						get_sidebar('casestudies'); 
					}
					
				?>

				
			</article>
			
		<?php endwhile; ?>	
	<?php endif; ?>
			
		</div>
		
	<!-- END: Clm1 -->

		<div id="clm2">	
			<div class="contentv2">

				<?php get_sidebar('services'); ?>
				<?php get_sidebar('products') ?>

			</div>
			<div class="clm2Bottom"></div>
		</div>

<!-- END: Clm2 -->					

	</div>

<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- END WP, Index.php -->	

<?php get_footer(); ?>