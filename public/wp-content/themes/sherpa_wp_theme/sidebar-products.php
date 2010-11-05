<!-- START, WP: Sidebar-products.php -->

<?php
	$promos	= get_pages('include=252, 256');
	$i = 0;
	foreach($promos as $promo) {
		if (get_post()->ID != $promo->ID) {
?>

<a href="<?php bloginfo('url'); ?>/?page_id=<?= $promo->ID ?>" class="box bOffset1 <? if ($i == 0) {?> b3<?php } else { ?> b2<? } ?>" title="View: <?= $promo->post_title ?>">
	<h4 class="title creighton"><?= $promo->post_title ?></h4>
	<p><?= (get_post_meta($promo->ID, 'excerpt', true)) ?></p>
	<span class="btn btn2">
		<span>Find Out More</span>
		<i></i>
	</span>
</a>
<div class="hr"><hr /></div>

<?php
		}
		$i++;
	} 
?>