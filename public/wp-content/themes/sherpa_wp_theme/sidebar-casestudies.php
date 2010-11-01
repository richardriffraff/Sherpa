<aside class="aside1">
	<h2 class="title creighton">Featured Case Studies</h2>
	
<?php	
	$case_studies 	= get_pages('child_of=58');			// All The Case Study Pages.
	$meta  			= get_post_custom(get_post()->ID);	// The META information for the page we are looking at.
	$case_study_1	= $meta['Case Study 1'][0];   		// The page name for the first selected case study (if selected at all).
	$case_study_2	= $meta['Case Study 2'][0];			// The page name for the second selected case study (if selected at all).
	$matched_case_studies_no = 0;

	foreach($case_studies as $case_study) {				// Loop through the case Studies.
		$this_page_name = $case_study->post_name;			// The page name of the case study we are looping through this time.
		if ($case_study_1 == $this_page_name || $case_study_2 == $this_page_name) {		
																		// The page name matches 'case study 1' or 'case study 2' in meta.	
			$matched_case_studies_no++;						// Increment so we only add a maximumn of 2.
?>
	
	<a href="<?php bloginfo('url'); ?>/?page_id=<?= $case_study->ID ?>" class="box b1 aOffset2" title="View: <?= $case_study->post_title ?>">
		<h3 class="title creighton"><?= $case_study->post_title ?></h3>
		<p><?= (get_post_meta($case_study->ID, 'promo description', true)) ?></p>
		<span class="b1Bottom">
			<span class="btn btn1">
				<span>View Case Study</span>
				<i></i>
			</span>
		</span>
	</a>
<?php 
		}
	}
	
	if ($matched_case_studies_no == 0) {					// Admin didnt specify any case studies.  Add the first 2 we can find.
		foreach($case_studies as $case_study) {			// Loop Through All the case studies.			
			if ($matched_case_studies_no < 2) {				// Increment so we only add a maximumn of 2.
?>			
	<a href="<?php bloginfo('url'); ?>/?page_id=<?= $case_study->ID ?>" class="box b1 aOffset2" title="View: <?= $case_study->post_title ?>">
		<h3 class="title creighton"><?= $case_study->post_title ?></h3>
		<p><?= (get_post_meta($case_study->ID, 'promo description', true)) ?></p>
		<span class="b1Bottom">
			<span class="btn btn1">
				<span>View Case Study</span>
				<i></i>
			</span>
		</span>
	</a>
<?php	
		$matched_case_studies_no++;
		}
	}
}
?>

</aside>