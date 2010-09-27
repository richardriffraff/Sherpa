	<header class="clearfix">
		
		<nav id="nSkip">
			<ul>
				<li><a href="#nMain" title="Skip To: Main Navigation">Main Navigation</a></li>
				<li><a href="#template" title="Skip To: Content">Content</a></li>
				<li><a href="#nQuickLinks" title="Skip To: Quick Links">Quick Link Navigation</a></li>
				<li><a href="#nLegal" title="Skip To: Legal Navigation">Legal Navigation</a></li>
			</ul>
		</nav>
		
		<a href="/" title="View: SHERPA Homepage" id="logo">
			<img src="<?php bloginfo('template_url'); ?>/img/header/logo.png" width="177" height="48" alt="Sherpa Logo" />
		</a>
		
		<address id="contactInfo">
			<span class="phoneUs">Call us now</span> <span class="phone">0191 211 1920</span><br />
			<span class="emailUs">or email</span> <a href="mailto:info@sherpabusinessconsultancy.com" class="email" title="Email <?php bloginfo('name')?>">info@sherpabusinessconsultancy.com</a>
		</address>
		
	<!-- END: Contact Details -->		

	</header>
	
<!-- END LAYOUT (Header) [] -->

	<div id="mainBar" class="clearfix">
		
		<nav id="nMain">
			<ul class="variable_black clearfix" id="linkMain">
		
		<?php 
			$solutions_name	= 'solutions'; // The name for the Solutions menu item
			$main_menu_items 	= get_pages('parent=0&sort_column=menu_order&exclude=252,256'); // All the main menu items
			
			foreach ($main_menu_items as $item) { ?>
				
				<li>
<?php 		if (get_post()->ID == $item->ID) {
					// Item is active (currently being viewed)
?>
					<strong><a href="<?= $item->guid; ?>" title="View: <?= $item->post_title ?>" id="<?= $item->post_name ?>"><?= $item->post_title ?></a></strong>
<?php 		} else { 
					// Item is not active (not being viewed)
?>
					<a href="<?= $item->guid; ?>" title="View: Solutions <?= $item->post_title ?>" id="<?= $item->post_name ?>"><?= $item->post_title ?></a>
<?php 		}
				if ($solutions_name == $item->post_name) {
					// Item is solutions
					$items_children = get_pages('child_of='.get_post()->ID.'&parent='.get_post()->ID);
?>
					<ul id="navSub" class="hide">
<?php 			foreach ($items_children as $child_item) { ?>
						<li><a href="<?= $child_item->guid; ?>" title="View: <?= $child_item->post_title ?>"><?= $child_item->post_title ?></a></li>
<?php 			} ?>
					</ul>
<?php 		} ?>	
				</li>
									
				
<?php		}	?>
		
			</ul>
		</nav>

	</div>
	<div class="clear"></div>
	
<!-- END: LAYOUT (Main Nav + Search Form) -->
<!-- END: WP, sidebar-head.php -->