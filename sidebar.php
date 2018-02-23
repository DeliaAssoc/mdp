<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package meyerdepew
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<div class="side-contact">
			
			<?php
				if ( is_page( 129 ) || 129 == $post->post_parent ) {	//Heating//
				echo '<h3>Contact Our Heating Professionals</h3>';
				
				}elseif ( is_page( 133 ) || 133 == $post->post_parent) {	//Air Conditioning//	
	    		echo '<h3>Contact Our Air Conditioning Professionals</h3>';

	    		}elseif ( is_page( 135 ) || 135 == $post->post_parent) {	//Air Quality//	
	    		echo '<h3>Contact Our Air Quality and Comfort Professionals</h3>';

	    		}elseif ( is_page( 701 ) || 135 == $post->post_parent) {	//Schedule//	
	    		echo '';

	    		}elseif ( is_page( 1168 ) ) {	//Schedule//	
	    		echo '';

	    		}elseif ( is_page( 1185 ) ) {	//Schedule//	
	    		echo '';

				}else {
	  			echo '<h3>Request Additional Information</h3>';
				}
			?>
			
			<?php
			if ( is_page( 701 ) ) {    
			    // Exclude Schedule contact form
			   
			} elseif ( is_page( 1168 ) ) {    
				//Exclude Enrollment contact form
			} elseif ( is_page( 1185 ) ) {    
				//Exclude Enrollment contact form
			}else { 
			    echo do_shortcode( '[contact-form-7 id="257" title="Contact"]' );
			}	

			?>
	
	</div>
</div>
