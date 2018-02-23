<?php
/**
 * The template for displaying all single posts.
 *
 * @package meyerdepew
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="banner-bg container-fluid" 
			
				style="background-image: url('<?php bloginfo('template_url'); ?>/images/banner/blog.png'), -webkit-gradient(linear, left top, left bottom, color-stop(0, #3A7CBE), color-stop(100, #1B328A));

				background-image: url('<?php bloginfo('template_url'); ?>/images/banner/blog.png'), -webkit-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);
				
				background-image: url('<?php bloginfo('template_url'); ?>/images/banner/blog.png'), -moz-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/blog.png'), -ms-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/blog.png'), -o-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/blog.png'), linear-gradient(to bottom, #3A7CBE 0%, #1B328A 100%);" >
				
				<div class="banner container">
					<div class="row">
						<div class="col-md-12"><h1>Blog</h1></div>
					</div>
				</div>

			</div>


			<nav class="breadcrumbs container">
				<div class="row">
					<div class="col-xs-12">
		        		<a href="<?php bloginfo( 'url' ); ?>">Home</a> > <a href="/meyerdepew/blog/">Blog</a>
		    		</div>
		    	</div>
			</nav>

			<div class="container page">
				<div class="row">
					<div class="col-md-7 col-sm-12">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'single' ); ?>

						<?php the_post_navigation(); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

					</div>
					<div class="col-md-4 col-md-offset-1 col-sm-12">
						<div class="yelp-reviews">
							<script>(function() { var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("meyer-and-depew-co-inc-kenilworth","200","WHT","n","y","0");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})();</script>

							<div id='yelpwidget' style="color: black;font-size: 12px;"></div>
						</div>

						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
