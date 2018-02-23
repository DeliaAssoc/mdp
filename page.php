<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package meyerdepew
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="banner-bg container-fluid" 
			
				style="background-image: url('<?php bloginfo('template_url'); ?>/images/banner/residential.png'), -webkit-gradient(linear, left top, left bottom, color-stop(0, #3A7CBE), color-stop(100, #1B328A));

				background-image: url('<?php bloginfo('template_url'); ?>/images/banner/residential.png'), -webkit-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);
				
				background-image: url('<?php bloginfo('template_url'); ?>/images/banner/residential.png'), -moz-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/residential.png'), -ms-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/residential.png'), -o-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/residential.png'), linear-gradient(to bottom, #3A7CBE 0%, #1B328A 100%);" >
				
				<div class="banner container">
					<div class="row">
						<div class="col-md-12"><?php the_title("<h1>","</h1>"); ?></div>
					</div>
				</div>

			</div>


			<nav class="breadcrumbs container">
				<div class="row">
					<div class="col-xs-12">
		        		<?php cory_krumbz(); ?>
		    		</div>
		    	</div>
			</nav>

			<div class="container page">
				<div class="row">
					<div class="col-md-7 col-sm-12">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'page' ); ?>


						<?php endwhile; // end of the loop. ?>

					</div>
					<div class="col-md-4 col-md-offset-1 col-sm-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main>
	</div>


<?php get_footer(); ?>
