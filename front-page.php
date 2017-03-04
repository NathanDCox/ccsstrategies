
<?php
/**
 * The front page file.
 *
 *
 * @package ccs
 */



	get_header(); ?>

	<div class="slider-area full">
		<div class="main-page">

			<div class="cycle-slideshow" 
				 data-cycle-fx="scrollHorz" 
				 data-cycle-timeout="5000"
				 data-cycle-slides="> div"
				 >
					<div class="slide1 slide">
						<h1>Expertise</h1>
						<h4>CCS Strategies specializes in websites for political candidates, small businesses, and non-profits, so we can build a specialized site that fits your organization.</h4>
						<div class="button">
							<a href="/services">Learn More</a>
						</div>
					</div>
					<div class="slide2 slide">
						<h1>Quality</h1>
						<h4>Each site is fully responsive to ensure that your web presence looks great no matter what device your visitors use to view it.</h4>
						<div class="button">
							<a href="/services">Learn More</a>
						</div>
					</div>
					<div class="slide3 slide">
						<h1>Affordability</h1>
						<h4>A great website doesn't have to cost a fortune! We work within your budget to build a high quality site without breaking the bank.</h4>
						<div class="button">
							<a href="/services">Learn More</a>
						</div>
					</div>

			</div>
		</div>
	</div>

	<div class="nav-area full">
		<div class="main-page">
			<ul>
				<li><a href="/political"><i class="fa fa-mobile"></i>Political Campaigns</a></li>
				<li><a href="/business"><i class="fa fa-mobile"></i>Small Businesses</a></li>
				<li><a href="/social"><i class="fa fa-mobile"></i>Social Media</a></li>
				<li><a href="/strategy"><i class="fa fa-mobile"></i>Strategy</a></li>
			</ul>

		</div>
	</div>



	<div class="column-area full">
		<div class="main-page">
				<div class="column left-col">
					<h2>Custom Design</h2>
					<p>Your site will be built from the ground up to meet your specific needs. The design process finds the right look and 
					functionality for your organization and builds the site that fits your needs.  No templates or stock sites here!</p>
				</div>
				<div class="column mid-col">
					<h2>Mobile Ready</h2>
					<p>Almost everyone surfs the web on mobile devices these days. Many visitors view the web solely on their mobile device.
					 Our sites are fully responsive, and built with mobile in mind, so your site looks great and functions the same no matter how it is viewed.</p>
				</div>
				<div class="column right-col">
					<h2>Customer Support</h2>
					<p>CCS Strategies won't just build you a site, we will make sure you get the most out of it. Our sites are Wordpress based,
					the most popular and easy to use content management system in the world. Training, support, and maintenance are included with each site.</p>
				</div>
		</div>
	</div>

	
	<div class="contact-area full">
		<div class="main-page">
		<h1>Contact CCS Strategies</h1>
		<p>Take the first step toward your awesome new site!  Request a quote today!</p>
			<?php echo do_shortcode('[ninja_forms id=1]'); ?>
		</div>
	</div>


	<?php get_footer(); ?>
