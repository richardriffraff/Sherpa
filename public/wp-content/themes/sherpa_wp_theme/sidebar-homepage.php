

	<nav class="nav2 nOffset1 clearfix">
		<h2 class="title creighton">Latest Blog Posts</h2>
		<ul>
		
	<?php $myposts	= get_posts('numberposts=3');  /* print_r($myposts); */    ?>
	<?php foreach ($myposts as $mypost) { ?>			
			<li>
				<a href="<?= $mypost->guid ?>" title="View: <?= $mypost->post_excerpt ?>">
					<small><?= $mypost->post_date ?></small>
					<?= $mypost->post_excerpt ?>					
				</a>
			</li>
		<!-- END: Item -->
	<?php } ?>
	
		</ul>		
		<a href="<?php bloginfo('rss_url'); ?>" title="Subscribe: <?php bloginfo('name'); ?>" class="rss">RSS</a>
		<a href="<?php bloginfo('url') ?>/blog" class="btn btn1" title="View: All Blog Posts"><span>View All Posts</span><i></i></a>
	</nav>

	<div class="hr clearfix"><hr /></div>
	
<!-- END: Blog Posts -->

	<nav class="nav2 nOffset2 clearfix">
		<h2 class="title creighton">Latest Tweets</h2>
		<ul>
			<li>
				<a href="#" title="View: [TITLE]" rel="nofollow">
					<small>posted by Sherpa 3 minutes ago...</small>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim...							
				</a>
			</li>
		<!-- END: Item -->
			<li>
				<a href="#" title="View: [TITLE]"  rel="nofollow">
					<small>posted by Sherpa 3 minutes ago...</small>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim...								
				</a>
			</li>
		<!-- END: Item -->				
		</ul>
		<a href="#" title="Follow SHERPA Business Consultancy on Twitter" class="tw">Twitter</a>
		<a href="#" class="btn btn1" title="View: All Blog Posts"><span>Follow Us...</span><i></i></a>
	</nav>
	
<!-- END WP, sidebar-homepage.php -->