<!-- START LAYOUT (ID: Footer) [Copyright + Global Nav] -->

	<footer id="fPage">
		
		<nav id="nQuickLinks" class="clearfix">
			<dl>
				<dt class="creighton">Sales</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/services/commercialisation" title="View: Link Title">Commercialisation</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/sales-development" title="View: Link Title">Sales strategy</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/sales-development" title="View: Link Title">Sales tools and techniques</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/sales-development" title="View: Link Title">Action planning </a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt class="creighton">Finance</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/services/investment-venture-capital" title="View: Link Title">Raising finance and venture capital</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/finance-management" title="View: Link Title">Gain financial control</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/finance-management" title="View: Link Title">Interim finance director</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/investment-venture-capital" title="View: Link Title">Become investor ready</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt class="creighton">People</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/services/mentoring-coaching" title="View: Link Title">Business coaches and mentors</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/leadership-management" title="View: Link Title">Leadership and management</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/organisational-development" title="View: Link Title">Build a winning team</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/organisational-development" title="View: Link Title">Organisation development</a></li>
					</ul>
				</dd>
			</dl>
			<dl class="last">
				<dt class="creighton">Strategy</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/services/strategic-review" title="View: Link Title">Strategic review</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/strategic-review" title="View: Link Title">Business consultancy</a></li>
						<li><a href="<?php bloginfo('url'); ?>/services/non-executive-directors" title="View: Link Title">Non executive directors</a></li>
						<li><a href="<?php bloginfo('url'); ?>/solutions/for-growing-businesses/growthstrategy" title="View: Link Title">Growth strategy</a></li>
					</ul>
				</dd>
			</dl>
		</nav>
		
		<nav id="nLegal">
			<span>&copy; copyright <a href="/" title="View: SHERPA Homepage">SHERPA 2010</a>. All Rights Reserved</span>
			<a href="#" title="View: SHERPA Business Consultancy Privacy Policy"  rel="nofollow">Privacy Policy</a>
			<a class="last" href="#" title="View: SHERPA Business Consultancy Terms of Use" rel="nofollow">Terms of Use</a>
		</nav>

	</footer>
	
	<?php wp_footer(); ?>
		
	<script> 
		// SHOULD STAY HERE
		// Add Active to the main menu item
		
		
		if (section_name === "undefined") 
			// The Template Didn't set it, lets set it ourself
			section_name  = (window.location.pathname).split('/')[1].replace(' ', '-');

		var menu_id	 	= 'mainMenuItem-'+section_name;			
		$('#'+menu_id).addClass('active');		
		Cufon.now(); 
		ie7 = false; ie6 = false;
	</script>
	<!--[if lte IE 7]><script>ie7 = true;</script><![endif]-->
	<!--[if lt IE 7]><script> ie7 = false; ie6 	= true;</script><![endif]-->	
	<script src="<?php bloginfo('template_url'); ?>/js/application.js"></script>
	
</body>
</html>