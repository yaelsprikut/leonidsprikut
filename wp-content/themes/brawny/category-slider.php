<?php
/**
 * The template for displaying category-slider
 *
 * display slider
 *
 * @package Brawny
 */


      	$output = '';
      	$output .= '<div class="flex-container">';
		$output .= '<div class="flexslider">';
		$output .= '<ul class="slides">';
		if ( brawny_slide_exists() ) {
			for( $slide_count = 1 ;  $slide_count < 6; $slide_count++ ) {

				if ( get_theme_mod( 'image_upload-' . $slide_count ) ) {
					$output .= '<li>';
					$slide_image = get_theme_mod( 'image_upload-' . $slide_count );
					$output .= '<div class="flex-image"><img src="' . esc_url( $slide_image ) . '" alt="" ></div>';
				}


				if ( get_theme_mod( 'flexcaption-' . $slide_count ) ) {
					$slide_description =  get_theme_mod( 'flexcaption-' . $slide_count );
					$output .= '<div class="flex-caption">' . $slide_description . '</div>';
				}

				$output .= '</li>';

			}
		}
		else {
			$output .= '<li>';
			$slide_image = BRAWNY_PARENT_URL .'/images/woodwinds.jpg';
			$output .= '<div class="flex-image"><img src="' . esc_url( $slide_image ) . '" alt="" ></div>';
			$slide_description = sprintf( __('<h1>Welcome to the Sprikut Conservatory of Music!</h1><p style="padding-left:6em; padding-right:6em;font-size:1.1em;text-shadow:1px 1px 1px #282828;"><i>As a teacher my job is to create a safe and dynamic learning environment where students’ hard work and willingness to study is supported and appreciated.</i> <br/><br/><span style="float:right">– Leonid Sprikut</span><</p>', 'brawny'),  admin_url('customize.php') );
			$output .= '<div class="flex-caption">' . $slide_description . '</div>';
			$output .= '</li>';
		}

		$output .= '</ul>';
		$output .= '</div><!-- .flexslider -->';
		$output .= '</div><!-- .flex-container -->';

		echo $output;
