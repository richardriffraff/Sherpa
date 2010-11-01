<!-- START WP, sidebar-blog.php -->

	<nav class="nav5">
		<h2 class="title creighton">Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	
		<a href="<?php bloginfo('rss_url'); ?>" title="Subscribe: <?php bloginfo('name'); ?>" class="rss">RSS</a>
	</nav>

	<div class="hr"><hr /></div>

	<nav class="nav5">
		<h2 class='title creighton'>Categories</h2>
		<ul>
			<?php wp_list_categories("&title_li="); ?>
		</ul>
	</nav>

	<div class="hr"><hr /></div>

	<nav class="nav5">
		<h2 class="title creighton">Meta</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
		</ul>
	</nav>