	<nav class="nav2 nOffset2 clearfix">
		<h2 class="title creighton">Latest Tweets</h2>
		<ul id="twitter_update_list">
		
		</ul>
		<a href="http://www.twitter.com/we_are_sherpa" rel="nofollow" title="Follow SHERPA Business Consultancy on Twitter" class="tw">Twitter</a>
		<a href="http://www.twitter.com/we_are_sherpa" class="btn btn1" title="View: All Blog Posts"><span>Follow Us...</span><i></i></a>
	</nav>
	
	<div class="hr clearfix"><hr /></div>
	
<!-- END: Twitter -->

	<nav class="nav2 nOffset1 clearfix">
		<h2 class="title creighton">Latest Blog Posts</h2>
		<ul>
		
	<?php $myposts	= get_posts('numberposts=3&order=DESC&orderby=date'); ?>
	<?php foreach ($myposts as $mypost) { ?>			
			<li>
				<a href="<?= $mypost->guid ?>" title="View: <?= $mypost->post_title ?>">
					<small><?= date('j M Y', strtotime($mypost->post_date)) ?></small>
					<?= $mypost->post_excerpt ?>					
				</a>
			</li>
		<!-- END: Item -->
	<?php } ?>
	
		</ul>		
		<a href="<?php bloginfo('rss_url'); ?>" title="Subscribe: <?php bloginfo('name'); ?>" class="rss">RSS</a>
		<a href="<?php bloginfo('url') ?>/blog" class="btn btn1" title="View: All Blog Posts"><span>View All Posts</span><i></i></a>
	</nav>
	
<!-- END: Blog Posts -->
	
	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.twitter.js"></script>
	<script>
		$(document).ready(function() {
			$("#twitter_update_list").getTwitter({
				userName: "we_are_sherpa",
				numTweets: 6,
				loaderText: "Loading tweets...",
				slideIn: false,
				showHeading: false
			});
		});
	</script>
	
	
<!-- END WP, sidebar-homepage.php -->