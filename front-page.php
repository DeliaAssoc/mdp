<?php

/**

 * The template for displaying front page.

 *

 * This is the template that displays front page.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package meyerdepew

 */



get_header(); ?>



<div id="front-slider" class="container-fluid">

	<div class="container-slider">

		<div class="row">

			<div class="slider-wrapper">

				<?php 

    				echo do_shortcode("[metaslider id=119]"); 

				?>

			</div>

		</div>

	</div>



</div>





<div id="truck-banner" class="test container-fluid">

	<div class="bubbles">

		<div class="container">

			<div class="row">

				<div class="col-xs-12 col-sm-6"><p class="truck-text">The dependable and affordable NJ company for all your heating, ventilation, generator and air conditioning (HVAC) needs.</p></div>

				<div class="col-xs-12 col-sm-6"><img class="truck-img img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/images/front-page/truck.png" alt="Meyer Depew Truck"></div>

			</div>

		</div>	

	</div>

</div>



<div id="sign-up" class="container">

	<div class="row">

		<div class="col-xs-4 col-sm-4 col-md-3">

			<div id="money"><h1>Save $25</h1></div>

		</div>

		<div class="col-xs-8 col-sm-8 col-md-3">

			<div id="join-email"><p>Join our email list to receive $25 off your next service</p></div>

		</div>

		

		<div id="sign-up-form" class="col-xs-12 col-sm-12 col-md-6"><?php /*?><?php echo do_shortcode( '[contact-form-7 id="25" title="Sign Up Now"]' ); ?><?php */?><?php echo do_shortcode('[contact-form-7 id="25" title="Sign Up Now"]'); ?></div>

	</div>

</div>



<div id="father-son" class="container-fluid">

	<div class="container">

		<div class="row">

			<div class="col-md-5 father-son-img"><p id="robert" class="names">Robert J. Ring<br> 1938-2011</p><p id="bobby" class="names">Bobby Ring</p><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/front-page/father-son.png" alt="Robert and Bobby"></div>

			<div class="col-md-7 father-son-info">

				<h3>Heating, Air Conditioning and HVAC service throughout Central and Northern New Jersey.</h3>

				<p>When you need a fully licensed NJ HVAC contractor for your home or business, depend on Meyer & Depew to exceed your expectations. Whether you’re looking for heating installation or maintenance, furnace repair, air conditioning service or need to replace an old boiler, we’re ready to help. We sell, install, maintain, inspect and tune major models of heating, ventilation, air conditioning, and refrigeration systems including Energy Star® boilers, furnaces, and Carrier® AC units that can save you up to 30% on energy costs.</p>

				<p class="strong">Robert C. Ring, Master HVACR Contractor NJ License #19HC00048500</p>



			</div>

		</div>

	</div>

</div>



<div id="affiliations" class="container-fluid">

	<div class="container">

		<div class="row">

			<div class="col-md-12"><h2>Affiliations</h2></div>

		</div>

		<div class="row">

			<div class="col-md-6 col-sm-6 col-xs-12"><img id="img-affiliate-left" class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/images/front-page/affiliates-left.jpg" alt="affiliates left"></div>

			<div class="col-md-6 col-sm-6 col-xs-12"><div class="img-responsive center-block"><img id="img-affiliate-right" class="" src="<?php bloginfo('template_directory'); ?>/images/front-page/affiliates-right.jpg" alt="affiliates right"><a href="https://www.bbb.org/new-jersey/business-reviews/heating-and-air-conditioning/meyer-depew-co-inc-in-kenilworth-nj-16004701/#sealclick" target="_blank" rel="nofollow"><img class="bbb" src="http://seal-newjersey.bbb.org/seals/blue-seal-293-61-bbb-16004701.png" style="border: 0;" alt="Meyer & Depew Co., Inc. BBB Business Review" /></a></div></div>

		</div>

	</div>

</div>









<?php get_footer(); ?>

