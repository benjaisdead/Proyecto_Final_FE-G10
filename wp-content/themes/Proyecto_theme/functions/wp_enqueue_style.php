<?php

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.3
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();


	/* Register Styles */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.css'), null, '5.2.0', 'screen' );

		wp_register_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.css'), null, null, 'screen' );
		wp_register_style( 'flaticon', get_theme_file_uri( '/assets/css/flaticon.css'), null, null, 'screen' );
		wp_register_style( 'progressbar', get_theme_file_uri( '/assets/css/jquery.lineProgressbar.css'), null, null, 'screen' );
		wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,900', null, null, 'screen' );
		wp_register_style( 'main_styles', get_theme_file_uri( '/assets/css/styles.css'), null, null, 'screen' );
		wp_register_style( 'bxslider', get_theme_file_uri( '/assets/css/jquery.bxslider.css'), null, null, 'screen' );
		wp_register_style( 'leaflet', get_theme_file_uri( '/assets/css/leaflet.css'), null, null, 'screen' );

	/* Enqueue Styles */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	if ( $theme_options['fontawesome'] ) {
		wp_enqueue_style( 'fontawesome' );
	}

	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'flaticon' );
	wp_enqueue_style( 'progressbar' );
	wp_enqueue_style( 'fonts' );
	wp_enqueue_style( 'main_styles' );
	wp_enqueue_style( 'bxslider' );
	wp_enqueue_style( 'leaflet' );
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
