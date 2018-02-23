<?php
/*
Template Name: Towns Template
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	
			<div class="banner-bg container-fluid" 
			
				style="background-image: url('<?php bloginfo('template_url'); ?>/images/banner/towns.png'), -webkit-gradient(linear, left top, left bottom, color-stop(0, #3A7CBE), color-stop(100, #1B328A));

				background-image: url('<?php bloginfo('template_url'); ?>/images/banner/towns.png'), -webkit-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);
				
				background-image: url('<?php bloginfo('template_url'); ?>/images/banner/towns.png'), -moz-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/towns.png'), -ms-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/towns.png'), -o-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

	    		background-image: url('<?php bloginfo('template_url'); ?>/images/banner/towns.png'), linear-gradient(to bottom, #3A7CBE 0%, #1B328A 100%);" >
				
				<div class="banner container">
					<div class="row">
						<div class="col-md-12"></div>
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
						<h2 class="towns-heading">Heating & Cooling Services in <?php the_title(); ?>, New Jersey</h2>

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
