<?php
/*
Template Name: Landing Page Type 1
*/
?>
<?php get_header(); ?>

<!-- WP, START TEMPLATE: homepage.php -->
<body class="body2">
	
	<?php get_sidebar('head'); ?>
	
<!-- END: LAYOUT (Main Nav + Search Form) -->
<!-- START LAYOUT (ID: Template) [All Content always sits inside the template] -->
		
	<div id="template" class="three1 three1v2 clearfix">
		<div id="clm1">
			
			<section class="section1">
				<?php
					$content	= get_post()->post_content;
					$meta  	= get_post_custom(get_post()->ID);
					$title 	= $meta['Title'][0];				
				?>
				
				
				<img src="<?php bloginfo('template_url'); ?>/img/content/section/section1Man2.png" alt="Business Consultancy with SHERPA" class="s1Img">
				<h1 class="title creighton"><?= $title ?></h1>
				<p><?= $content ?></p>
				<a href="#" class="btn btn3" title="View: How SHERPA helps busines' grow"><span>View Case Studies</span><i></i></a>
			</section>
			
		<!-- END: Promo -->
		
			<nav class="nav4 nOffset3">
				<h2 class="title creighton">Our Services</h2>
				<ul>
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->								
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->								
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->
					<li>
						<a href="#" title="View: SHERPA's [SERVICE] Service">
							<h3 class="subTitle">Getting Started</h3>
							<p>Feasibility, concept development and shaping your offering</p>
						</a>
					</li>
				<!-- END: Item -->																	
				</ul>
			</nav>
			
		<!-- END The NAV -->
			
			<?php get_sidebar('casestudies') ?>
				
		</div>
		
	<!-- END: Clm1 -->
	
		<div id="clm2">	
			<div class="contentv2">
				
				<?php get_sidebar('landing1') ?>			
			
			</div>
			<div class="clm2Bottom"></div>
		</div>

<!-- END: Clm2 -->					
			
	</div>
		
<!-- END LAYOUT (ID: Template) [All Content Must have ended by here] -->
<!-- END WP, Index.php -->	

<?php get_footer(); ?>