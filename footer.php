<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package meyerdepew
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

					<?php 
				$bergencounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 26,
				'echo'         => 1,
				'sort_column'  => '');
				$unioncounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 72,
				'echo'         => 1,
				'sort_column'  => ''); 
				$hudsoncounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 52,
				'echo'         => 1,
				'sort_column'  => ''); 
				$middlesexcounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 84,
				'echo'         => 1,
				'sort_column'  => ''); 
				$somersetcounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 104,
				'echo'         => 1,
				'sort_column'  => ''); 
				$essexcounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 76,
				'echo'         => 1,
				'sort_column'  => ''); 
				$mercercounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 56,
				'echo'         => 1,
				'sort_column'  => ''); 
				$monmouthcounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 88,
				'echo'         => 1,
				'sort_column'  => ''); 
				$morriscounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 63,
				'echo'         => 1,
				'sort_column'  => ''); 
				$oceancounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 96,
				'echo'         => 1,
				'sort_column'  => ''); 
				$passaiccounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 68,
				'echo'         => 1,
				'sort_column'  => ''); 
				$hunterdoncounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 80,
				'echo'         => 1,
				'sort_column'  => '');
				$warrencounty = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => 108,
				'echo'         => 1,
				'sort_column'  => '');
			?>
		


		<div class="container">
			<div class="site-info">
				
			</div><!-- .site-info -->
		</div>
		<div id="territory-bg" class="container-fluid">
			<div id="territories" class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Providing Heating and AC Services including Furnace Repair to the following Central and Northern NJ areas:</h3>
					</div>
				</div>
				<div class="row">

					<!--Bergen / Hudson / Mercer -->
					
					<div id="territories-lg-order">
						<div class="col-sm-2">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/bergen-county/">Bergen County</a></li>
									<?php wp_list_pages($bergencounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/essex-county/">Essex County</a></li>
									<?php wp_list_pages($essexcounty)	?>
							</ul>
						</div>
						<div class="col-sm-2">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/hudson-county/">Hudson County</a></li>
									<?php wp_list_pages($hudsoncounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/hunterdon-county/">Hunterdon County</a></li>
									<?php wp_list_pages($hunterdoncounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/middlesex-county/">Middlesex County</a></li>
									<?php wp_list_pages($middlesexcounty)	?>
							</ul>
						</div>
						<div class="col-sm-2">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/mercer-county/">Mercer County</a></li>
									<?php wp_list_pages($mercercounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/monmouth-county/">Monmouth County</a></li>
									<?php wp_list_pages($monmouthcounty)	?>
							</ul>
						</div>


					

					<!--Morris / Passiac / Union -->
					

						<div class="col-sm-2">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/morris-county/">Morris County</a></li>
									<?php wp_list_pages($morriscounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/ocean-county/">Ocean County</a></li>
									<?php wp_list_pages($oceancounty)	?>
							</ul>
						</div>
						<div class="col-sm-2">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/passaic-county/">Passiac County</a></li>
									<?php wp_list_pages($passaiccounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/somerset-county/">Somerset County</a></li>
									<?php wp_list_pages($somersetcounty)	?>
							</ul>
						</div>
						<div class="col-sm-2">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/union-county/">Union County</a></li>
									<?php wp_list_pages($unioncounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/warren-county/">Warren County</a></li>
									<?php wp_list_pages($warrencounty)	?>
							</ul>
						</div>
					</div>

					<div id="territories-sm-order">

						<div class="col-xs-5 col-xs-offset-1">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/bergen-county/">Bergen County</a></li>
									<?php wp_list_pages($bergencounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/essex-county/">Essex County</a></li>
									<?php wp_list_pages($essexcounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/hudson-county/">Hudson County</a></li>
									<?php wp_list_pages($hudsoncounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/hunterdon-county/">Hunterdon County</a></li>
									<?php wp_list_pages($hunterdoncounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/middlesex-county/">Middlesex County</a></li>
									<?php wp_list_pages($middlesexcounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/mercer-county/">Mercer County</a></li>
									<?php wp_list_pages($mercercounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/monmouth-county/">Monmouth County</a></li>
									<?php wp_list_pages($monmouthcounty)	?>
							</ul>
						</div>


					<!--Morris / Passiac / Union -->
					

						<div class="col-xs-5">
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/morris-county/">Morris County</a></li>
									<?php wp_list_pages($morriscounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/ocean-county/">Ocean County</a></li>
									<?php wp_list_pages($oceancounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/passaic-county/">Passiac County</a></li>
									<?php wp_list_pages($passaiccounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/somerset-county/">Somerset County</a></li>
									<?php wp_list_pages($somersetcounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/union-county/">Union County</a></li>
									<?php wp_list_pages($unioncounty)	?>
							</ul>
							<ul class="territory">
								<li class="countyTitle"><a href="http://www.meyer-depew.com/warren-county/">Warren County</a></li>
									<?php wp_list_pages($warrencounty)	?>
							</ul>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>

		<div id="footer-info" class="container-fluid">
			<div class="container">
				<div class="row">
					<div id="footer-address" class="col-md-4 col-sm-4">
						<ul>
							<li class="footer-strong">Meyer & Depew Company</li>
							<li>309 Lafayette Avenue</li>
							<li>Kenilworth, NJ 07033</li>
							<li>Phone: 908.272.2100</li>
							<li>Fax: 908.272.0761</li>
						</ul>
						<ul id="social-desktop" class="social">
			         		<li><a href="https://www.facebook.com/meyeranddepew"><i class="fa fa-facebook"></i></a></li>
			         		<li><a href="http://twitter.com/meyeranddepew"><i class="fa fa-twitter"></i></a></li>
			         		<li><a href="https://www.linkedin.com/company/meyer-&-depew-co-inc"><i class="fa fa-linkedin"></i></a></li>
		         		</ul>
					</div>
					<div id="footer-office-hours" class="col-md-4 col-sm-4">
						<ul>
							<li class="footer-strong">Office Hours</li>
							<li>Mon-Fri - 7:00 AM to 9:00 PM </li>
							<li>Sat-Sun - 8:00 AM to 4:00 PM</li>
							<li>Fax: 908.272.0761</li>
							<li id="footer-phone"><img src="<?php bloginfo('template_directory'); ?>/images/footer/phone.svg" alt="phone"><span class="phone-service">24 Hour Service<br> 800.246.4342</span></li>
						</ul>
					</div>
					<div id="footer-nav" class="col-md-4 col-sm-4">
						<nav id="footer-navigation" class="footer-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="col-xs-12">
						<ul id="social-mobile" class="social">
			         		<li><a href="https://www.facebook.com/meyeranddepew"><i class="fa fa-facebook"></i></a></li>
			         		<li><a href="http://twitter.com/meyeranddepew"><i class="fa fa-twitter"></i></a></li>
			         		<li><a href="https://www.linkedin.com/company/meyer-&-depew-co-inc"><i class="fa fa-linkedin"></i></a></li>
		         		</ul>
		         	</div>
				</div>
				<div id="footer-bottom" class="row">
					<div id="footer-copyright" class="col-md-8"><p>&#169; <?php echo date('Y');?> Meyer & Depew. All rights reserved.  |   NJ Reg. No. 13VHO1053500</p></div>
					<div id="footer-design" class="col-md-4">
						<ul><li>NJ Web Design by</li> <li><img src="<?php bloginfo('template_directory'); ?>/images/footer/delia.png" alt="scroll"></li><li><a href="http://www.delianet.com/">delia associates</a></li></ul>
					</div>
				</div>
			</div>

				<a href="#top" class="scroll-to-top">
					<ul>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/footer/scroll.png" alt="scroll"></li>
						<li>Top</li>
					</ul>
				</a>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
window.addEventListener('load',function(){
if(jQuery('#wpcf7-f257-o1 .wpcf7-response-output.wpcf7-mail-sent-ok').is(":visible"))
{
    jQuery('body').append('<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1013733532/?label=tBIACNyCwgMQnLGx4wM&amp;guid=ON&amp;script=0"/>');
}
})
</script>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1013733532;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1013733532/?guid=ON&amp;script=0"/>
</div>
</noscript>
<script async src="https://i.simpli.fi/dpx.js?cid=116409&action=100&segment=meyeranddepew&m=1&sifi_tuid=67015"></script>
</body>
</html>
