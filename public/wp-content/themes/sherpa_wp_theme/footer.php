<!-- START LAYOUT (ID: Footer) [Copyright + Global Nav] -->

	<footer id="fPage">
		
		<nav id="nQuickLinks" class="clearfix">
			<dl>
				<dt class="creighton">Links title One</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
						<li><a href="#" title="View: Link Title">Tempor incididunt ut labore</a></li>
						<li><a href="#" title="View: Link Title">Ut enim ad minim veniam</a></li>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt class="creighton">Links title One</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
						<li><a href="#" title="View: Link Title">Tempor incididunt ut labore</a></li>
						<li><a href="#" title="View: Link Title">Ut enim ad minim veniam</a></li>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt class="creighton">Links title One</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
						<li><a href="#" title="View: Link Title">Tempor incididunt ut labore</a></li>
						<li><a href="#" title="View: Link Title">Ut enim ad minim veniam</a></li>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
					</ul>
				</dd>
			</dl>
			<dl class="last">
				<dt class="creighton">Links title One</dt>
				<dd class="clearfix">
					<ul>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
						<li><a href="#" title="View: Link Title">Tempor incididunt ut labore</a></li>
						<li><a href="#" title="View: Link Title">Ut enim ad minim veniam</a></li>
						<li><a href="#" title="View: Link Title">Lorem Ipsum dollar ait amet</a></li>
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
		var section_name  = (window.location.pathname).replace('/wordpress/', '').split('/')[0].replace('-', ' ');	
		var menu_id	 = 'mainMenuItem-'+section_name;		
		$('#'+menu_id).addClass('active');
		
		Cufon.now(); 
		ie7 = false; ie6 = false;
	</script>
	<!--[if lte IE 7]><script>ie7 = true;</script><![endif]-->
	<!--[if lt IE 7]><script> ie7 = false; ie6 	= true;</script><![endif]-->	
	<script src="<?php bloginfo('template_url'); ?>/js/application.js"></script>
	
</body>
</html>