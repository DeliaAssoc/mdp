<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		        		<a href="<?php bloginfo( 'url' ); ?>">Home</a> >
		    		</div>
		    	</div>
			</nav>

			<div class="container page">
				<div class="row">
					<div class="col-md-7 col-sm-12">

						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );
								?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

							<?php else : ?>

								<?php get_template_part( 'content', 'none' ); ?>

							<?php endif; ?>

					</div>
					<div class="blog-nav col-md-4 col-md-offset-1 col-sm-12">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Nav') ) : ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</main>
	</div>


<?php get_footer(); ?>
