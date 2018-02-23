<?php
/**
 * meyerdepew functions and definitions
 *
 * @package meyerdepew
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'meyerdepew_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function meyerdepew_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on meyerdepew, use a find and replace
	 * to change 'meyerdepew' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'meyerdepew', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	
	add_action( 'init', 'my_custom_menus' );
	function my_custom_menus() {
	   register_nav_menus(
	        array(
	            'primary-menu' => __( 'Primary Menu' ),
	            'primary-mobile-menu' => __( 'Primary Mobile Menu' ),
	            'comfort-menu' => __( 'Comfort Menu' ),
	            'footer-menu' => __( 'Footer Menu' )
	        )
	    );
	}

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'meyerdepew_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // meyerdepew_setup
add_action( 'after_setup_theme', 'meyerdepew_setup' );



/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function meyerdepew_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'meyerdepew' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar(array(
	'name' => 'Live Chat',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));

	register_sidebar(array(
	'name' => 'Blog Nav',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
}
add_action( 'widgets_init', 'meyerdepew_widgets_init' );

add_filter('widget_text', 'do_shortcode');

/**
 * Enqueue scripts and styles.
 */
wp_deregister_script( 'jquery' );
$jquery_cdn = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
wp_enqueue_script( 'jquery', $jquery_cdn, array(), '20130115', true );


function meyerdepew_scripts() {
	wp_enqueue_style( 'meyerdepew-style', get_stylesheet_uri() ) ;
	
	wp_enqueue_script( 'meyerdepew-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'meyerdepew-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script(
        'scroll-top', get_template_directory_uri() . '/js/scroll.js', 
        array('jquery') 
    );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'meyerdepew_scripts' );




/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function cory_krumbz() {

        /*$thistitle = wp_title('>', false);

        $page = get_queried_object();

        $parentpages = get_the_title($page->post_parent);

        echo $parentpages ." ". $thistitle;*/

          $delimiter = ' > ';
          $currentBefore = '<span class="current">';
          $currentAfter = '</span>';
          echo '<a href="Home">Home</a> > ';
          if ( !is_home() && !is_front_page() || is_paged() ) {
            global $post;
            if ( is_page() && !$post->post_parent ) {
                echo $currentBefore;
                the_title();
                echo $currentAfter; }
            elseif ( is_page() && $post->post_parent ) {
              $parent_id  = $post->post_parent;
              $breadcrumbs = array();
              while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
              }
              $breadcrumbs = array_reverse($breadcrumbs);
              foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
              echo $currentBefore;
              the_title();
              echo $currentAfter;
            }
          }

  }
  
 add_filter('constant_contact_form_success', 'custom_constant_contact_success_message');
function custom_constant_contact_success_message($success = '') {
return '<div class="submitText"><p>Thank you!</p></p><a href="http://www.meyer-depew.com/wp-content/uploads/2013/11/Coupon1.png" target="_blank">Click here to receive your coupon.</a></p></div>';
}


// contact form 7 redirect fix

add_action('wpcf7_mail_sent', 'ip_wpcf7_mail_sent');
function ip_wpcf7_mail_sent($wpcf7)
{
	$on_sent_ok = $wpcf7->additional_setting('ip_on_sent_ok', false);

	if (is_array($on_sent_ok) && count($on_sent_ok) > 0)
	{
		wp_redirect(trim($on_sent_ok[0]));
		exit;
	}
}
