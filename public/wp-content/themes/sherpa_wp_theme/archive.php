<?php get_header(); ?>

<!-- WP, START TEMPLATE: archive.php -->
<body>
	
	<?php get_sidebar('head'); ?>	
<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
<!-- START WP, archive.php -->
		
	<div id="template" class="three1 clearfix">
		<div id="clm1">
			
			<article class="article2">
		<?php if (is_category()) { ?>
				<h1 class="creighton hide">Everything Posted in <?php single_cat_title() ?></h1>
				<p class="intro">Here is everything that's been posted in <?php single_cat_title() ?>...</p>
		<?php } elseif (is_month()) { ?>
				<h1 class="creighton hide">Everything Posted in <?php the_time('F, Y') ?></h1>
				<p class="intro">Here is everything that was posted in <?php the_time('F, Y') ?>...</p>
		<?php } ?>
				
			
		<?php if (have_posts()) : ?>		
			<?php while (have_posts()) : the_post(); ?>
			
				<section class="item">
					<a href="<?php the_permalink() ?>" title="View: <?php the_title() ?>">
						<h2>
							<small class="date">Posted <?php the_time('l, F jS, Y') ?></small>
							<span class="creighton title"><?php the_title() ?></span> 
						</h2>
						
						<p><?= the_excerpt(); ?></p>
						
					</a>
					<ul class="meta">
						<li class="first"><small>Posted in</small> <?php the_category(', ') ?></li>
						<li><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></li>
					</ul>
				</section>
				
			<!-- END: Item -->
			<?php endwhile ; ?>		
		<?php else : ?>
				
				<section class="item ">
					<h2><span class="creighton title">Nothing Found</span></h2>
					<p>Sorry, but you are looking for something that isn't here</p>
				</section>			
			
		<?php endif ;?>
		
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
<!-- END WP, Index.php -->	

<?php get_footer(); ?>