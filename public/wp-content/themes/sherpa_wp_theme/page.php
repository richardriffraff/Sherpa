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
				
				<aside class="aside1">
					<h3 class="title creighton">Featured Case Studies</h3>
					
					<a href="#" class="box b1 aOffset2" title="View: The SHERPA Case Study">
						<h4 class="title creighton">Case Study One</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
						<span class="b1Bottom">
							<span class="btn btn1">
								<span>View Case Study</span>
								<i></i>
							</span>
						</span>
					</a>
					
					<a href="#" class="box b1 aOffset3" title="View: The SHERPA Case Study">
						<h4 class="title creighton">Case Study One</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
						<span class="b1Bottom">
							<span class="btn btn1">
								<span>View Case Study</span>
								<i></i>
							</span>
						</span>
					</a>
				</aside>
				
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
