<?php
	$promos	= get_pages('include=252, 256');
	$i = 0;
	foreach($promos as $promo) {
		if ($i != 0) {
?>
	<div class="hr"><hr /></div>
<?php 
	} 
?>

<?= $offsetClass;  ?>

<a href="<?php bloginfo('url'); ?>/<?= $promo->post_name ?>" class="box b2 aOffset1 <?php if ($i == 0) echo $offsetClass; ?>" title="View: <?= $promo->post_title ?>">
	<h4 class="title creighton"><?= $promo->post_title ?></h4>
	<p><?= (get_post_meta($promo->ID, 'excerpt', true)) ?></p>
	<span class="btn btn2">
		<span>Find Out More</span>
		<i></i>
	</span>
</a>

<?php 
		$i++;
	} 
?>