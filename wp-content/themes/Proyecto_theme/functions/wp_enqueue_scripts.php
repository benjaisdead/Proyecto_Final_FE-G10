<?php

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_scripts() {

	global $theme_options;
	$theme_data = wp_get_theme();
	$deps = null;

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );


	/* Check jQuery Support */
	if ( $theme_options['jQuery'] || $theme_options['woocommerce'] || $theme_options['slider']['flexslider'] || $theme_options['slider']['flickity'] ) {

		wp_register_script('jquery', get_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.3.1', true);
		wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
		$deps = array('jquery-migrate');

	}


	/* Register Scripts */

	wp_register_script( 'flickity', get_theme_file_uri('/assets/js/lib/flickity.pkgd.js'), array('jquery-migrate'), '2.1.0', true );
	wp_register_script( 'flexslider', get_theme_file_uri('/assets/js/lib/jquery.flexslider.js'), array('jquery-migrate'), null, true );

	wp_register_script( 'progressbar', get_theme_file_uri('/assets/js/lib/jquery.lineProgressbar.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'counterup', get_theme_file_uri('/assets/js/lib/jquery.countupcircle.min.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'index-functions', get_theme_file_uri('assets/js/index-functions.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'portfolio-functions', get_theme_file_uri('assets/js/portfolio-functions.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'contact-functions', get_theme_file_uri('assets/js/contact-functions.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'bxslider', get_theme_file_uri('/assets/js/lib/jquery.bxslider.js'), $echo, null, true );
	wp_register_script( 'leaflet', get_theme_file_uri('/assets/js/lib/leaflet.js'), $echo, null, true );



	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_script( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_script( 'flickity' );
	}

	wp_enqueue_script( 'progressbar' );
	wp_enqueue_script( 'counterup' );
	wp_enqueue_script( 'index-functions' );
	wp_enqueue_script( 'portfolio-functions' );
	wp_enqueue_script( 'contact-functions' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'bxslider' );
	wp_enqueue_script( 'leaflet' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
