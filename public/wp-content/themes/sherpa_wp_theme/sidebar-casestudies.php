<aside class="aside1">
	<h2 class="title creighton">Featured Case Studies</h2>
	
<?php
	$case_studies = get_pages('child_of=58');
	$i = 0;
	foreach($case_studies as $case_study) {
		if ($i > 1) break;
?>
	
	<a href="<?= $case_study->guid ?>" class="box b1 aOffset2" title="View: <?= $case_study->post_title ?>">
		<h3 class="title creighton"><?= $case_study->post_title ?></h3>
		<p><?= (get_post_meta($case_study->ID, 'excerpt', true)) ?></p>
		<span class="b1Bottom">
			<span class="btn btn1">
				<span>View Case Study</span>
				<i></i>
			</span>
		</span>
	</a>
<?php 
	$i++;
} ?>

</aside>