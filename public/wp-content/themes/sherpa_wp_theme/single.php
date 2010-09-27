<?php
/*
Template Name: Blog List Page
*/
?>
<?php get_header(); ?>
<?php get_sidebar('head'); ?>	

<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
<!-- START WP, blog-list.php -->
		
	<div id="template" class="three1 clearfix">
		<div id="clm1">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>			
			
			<article class="article1">
				
				<h1>
					<small class="date">Posted <?php the_time('l, F jS, Y') ?></small> 
					<span class="creighton title"><?php the_title() ?></span> 
				</h1>
				
				<?php the_content('') ?>
				
				<footer class="footerShare clearfix">
					<dl>
						<dt>Share this:</dt>
						<dd>
							<ul>
								<li><a href="#" title="Share This On Facebook" class="fb">Facebook</a></li>
								<li><a href="#" title="Tweet This on Twitter" class="tw">Twitter</a></li>
							</ul>
						</dd>
					</dl>
				</footer>
				
				<small id="post">This entry was posted on <?php the_time('l, F jS, Y') ?> and is filled under <?php the_category(', ') ?>.  You can follow any response to this entry through the <a href="<?php bloginfo('rss_url'); ?>" title="Subscribe: <?php bloginfo('name'); ?> RSS Feed">RSS 2.0 feed</a>.  You can leave a response or trackback from your own site</small>
				
				<?php  comments_template(); ?>
				
			</article>
			
		<?php endwhile; ?>	
	<?php endif; ?>
			
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
				