<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package meyerdepew
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> id="top">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-3761159-10', 'auto');
  ga('send', 'pageview');
 
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header one-edge-shadow" role="banner">

		<div id="header-background" class="container-fluid one-edge-shadow-after">

			<div class="container">
				<div class="row mobile-service">
					<div class="col-xs-12">
						<ul>
							<li id="header-phone"><img src="<?php bloginfo('template_directory'); ?>/images/header/phone-red.svg" alt="phone">
							</li>
							<li>24 Hour Service: <a style="color:#a40632;text-decoration:none;" href="tel:8002464342">800.246.4342</a></li>
						</ul>
					</div>
				</div>

				<div class="row nav-logo-wrapper">
					<div class="col-xs-8 .col-xs-offset-4 col-sm-12 col-md-4">
						<div class="site-branding">
							<a href="<?php bloginfo( 'url' ); ?>">
		            			<img class="header-logo img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/images/header/logo.jpg" alt="logo">
		            			<p class="slogan">Generations of Comfort - Generations of Trust</p>
		         			</a>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8">
						
						<div class="nav-numb-chat">
							<ul>
								<li id="header-phone-desktop"><img src="<?php bloginfo('template_directory'); ?>/images/header/phone-red.svg" alt="phone"></li>
								
								<li id="mobile">24 Hour Service: <a style="color:#a40632;padding:initial;text-decoration:none;" href="tel:8002464342">800.246.4342</a></li>

								<li>
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Live Chat') ) : ?>
									<?php endif; ?>
								</li>
								<li><div class="main-button chat-button"><a href="/schedule-an-appointment/">Schedule Appointment</a></div></li>
							</ul>
						</div>
						
						
					</div>
					
					<div id="nav-wrapper" class="col-md-12">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>

						</nav><!-- #site-navigation -->
					</div>
	
					<div id="nav-wrapper-mobile" class="col-md-12">
					<nav id="site-navigation-mobile" class="main-navigation-mobile" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary-mobile-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>

				</div>

			


				<div class="row mobile-chat">
					<hr>
					<div class="col-xs-12 button-top">
						<a href="/schedule-an-appointment/"><div id="schedule" class="main-button chat-button-mobile">Schedule an Appointment</div></a>
					</div>
				</div>
			</div>

		</div>

	</header><!-- #masthead -->
	



	<div id="content" class="site-content">
