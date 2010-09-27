<nav class="nav3 nOffset1 clearfix">
	<h3 class="title creighton">Services</h3>
	<ul>
<?php
	$services = get_pages('child_of=60');
	$i = 0;
	foreach($services as $service) {
		if ($i > 4) break;
?>	
		<li><a href="<?= $service->guid  ?>" title="View: <?= $service->post_title ?>"><?= $service->post_title ?></a></li>
<?php 
	$i++;
} ?>
	</ul>
</nav>

<?php
	$promos	= get_pages('include=252, 256');
	foreach($promos as $promo) {
?>

<div class="hr"><hr /></div>
<a href="<?php bloginfo('url'); ?>/<?= $promo->post_name ?>" class="box b2 aOffset1" title="View: <?= $promo->post_title ?>">
	<h4 class="title creighton"><?= $promo->post_title ?></h4>
	<p><?= (get_post_meta($promo->ID, 'excerpt', true)) ?></p>
	<span class="btn btn2">
		<span>Find Out More</span>
		<i></i>
	</span>
</a>

<?php } ?>

<!-- END WP, sidebar-services.php -->