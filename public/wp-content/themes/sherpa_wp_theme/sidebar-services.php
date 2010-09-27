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
<div class="hr"><hr /></div>

<!-- END WP, sidebar-services.php -->