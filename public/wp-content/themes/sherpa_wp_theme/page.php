<?php get_header(); ?>

<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
<body>
	
	<?php get_sidebar('head'); ?>
	
<!-- END: LAYOUT (Main Nav + Search Form) -->
		
	<div id="template" class="three1 clearfix">
		<div id="clm1">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>			
			
			<article class="article1">
				
				<h1>
					<span class="creighton title"><?php the_title() ?></span> 
				</h1>
				
				<?php the_content('') ?>
				
				<?php get_sidebar('share') ?>
				
				<?php get_sidebar('casestudies') ?>
				
			</article>
			
		<?php endwhile; ?>	
	<?php endif; ?>
			
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
<!-- END WP, Index.php -->	

<?php get_footer(); ?>