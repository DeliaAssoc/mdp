<?php
/*
Template Name: Milti-Module
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="banner-bg container-fluid" 
			
            style="background-image: url('<?php bloginfo('template_url'); ?>/images/banner/about.png'), -webkit-gradient(linear, left top, left bottom, color-stop(0, #3A7CBE), color-stop(100, #1B328A));

            background-image: url('<?php bloginfo('template_url'); ?>/images/banner/about.png'), -webkit-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);
            
            background-image: url('<?php bloginfo('template_url'); ?>/images/banner/about.png'), -moz-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

            background-image: url('<?php bloginfo('template_url'); ?>/images/banner/about.png'), -ms-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

            background-image: url('<?php bloginfo('template_url'); ?>/images/banner/about.png'), -o-linear-gradient(top, #3A7CBE 0%, #1B328A 100%);

            background-image: url('<?php bloginfo('template_url'); ?>/images/banner/about.png'), linear-gradient(to bottom, #3A7CBE 0%, #1B328A 100%);" >
            
            <div class="banner container">
                <div class="row">
                    <div class="col-md-12"><h1><?php the_title(); ?></h1></div>
                </div>
            </div>

        </div>


        <!-- <nav class="breadcrumbs container">
            <div class="row">
                <div class="col-xs-12">
                    <?php cory_krumbz(); ?>
                </div>
            </div>
        </nav> -->



            <?php if ( have_rows( 'module' ) ) : ?>
                <?php while ( have_rows( 'module' ) ) : the_row(); ?>

                    <?php if ( get_row_layout() == 'full_width' ) : ?>

                        <section class="multi-module full-width <?php the_sub_field( 'module_color' ); ?>">
                            <div class="container">

                                <div class="row">
                                    <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                        <div class="col-12 col-md-12">
                                            <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                        </div>
                                    <?php endif; ?>
                                </div><!-- .row -->

                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <?php the_sub_field( 'module_full_content' ); ?>
                                    </div>
                                </div><!-- .row -->

                            </div>
                        </section><!-- .multi-module .full-width -->

                    <?php elseif ( get_row_layout() == 'fifty_fifty' ) : ?>

                        <section class="multi-module fifty-fifty <?php the_sub_field( 'module_color' ); ?>">
                            <div class="container">

                                <div class="row">
                                    <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                        <div class="col-12">
                                            <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                        </div>
                                    <?php endif; ?>
                                </div><!-- .row -->

                                <div class="row">
                                    <div class="col-12 col-md-6"><?php the_sub_field( 'module_left_content_area' ); ?></div>
                                    <div class="col-12 col-md-6"><?php the_sub_field( 'module_left_content_area' ); ?></div>
                                </div><!-- .row -->

                            </div>
                        </section><!-- .multi-module .fifty-fifty -->

                    <?php elseif ( get_row_layout() == 'one_third_two_thirds' ) : ?>

                        <section class="multi-module one-two <?php the_sub_field( 'module_color' ); ?>">
                            <div class="container">

                                <div class="row">
                                    <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                        <div class="col-12">
                                            <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                        </div>
                                    <?php endif; ?>
                                </div><!-- .row -->

                                <div class="row">
                                    <div class="col-12 col-md-4"><?php the_sub_field( 'module_left_content_area' ); ?></div>
                                    <div class="col-12 col-md-8"><?php the_sub_field( 'module_right_content_area' ); ?></div>
                                </div><!-- .row -->

                            </div><!-- .container -->
                        </section><!-- .multi-module one-two -->

                    <?php elseif ( get_row_layout() == 'three_columns' ) : ?>

                        <section class="multi-module three-col <?php the_sub_field( 'module_color' ); ?>">
                            <div class="container">

                                <div class="row">
                                    <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                        <div class="col-12">
                                            <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                        </div>
                                    <?php endif; ?>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-12 col-md-4"><?php the_sub_field( 'module_left_content_area' ); ?></div>
                                    <div class="col-12 col-md-4"><?php the_sub_field( 'module_center_content_area' ); ?></div>
                                    <div class="col-12 col-md-4"><?php the_sub_field( 'module_right_content_area' ); ?></div>
                                </div>

                            </div><!-- .container -->

                        </section><!-- .multi-module .three-col -->

                    <?php elseif ( get_row_layout() == 'two_thirds_one_third' ) : ?>

                        <section class="multi-module two-one <?php the_sub_field( 'module_color' ); ?>">
                            <div class="container">

                                <div class="row">
                                    <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                        <div class="col-12">
                                            <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                        </div>
                                    <?php endif; ?>
                                </div><!-- .row -->

                                <div class="row">
                                    <div class="col-12 col-md-8"><?php the_sub_field( 'module_left_content_area' ); ?></div>
                                    <div class="col-12 col-md-4"><?php the_sub_field( 'module_right_content_area' ); ?></div>
                                </div><!-- .row -->

                            </div><!-- .container -->
                        </section><!-- .multi-module two-one -->

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

		</main>
	</div>


<?php get_footer(); ?>
