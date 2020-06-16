<?php

/**
 * Plugin Name:       Single Post CTA
 * Plugin URI:        https://github.com/LinkedInLearning/wordpress-action-filter-hooks-2825710
 * Description:       Adds sidebar (widget area) to single posts
 * Version:           0.1
 * Author:            Carrie Dils
 * Author URI:        https://carriedils.com
 * License:           GPL v2+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       spc
 */

// If this file is called directly, abort
if ( !defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Load stylesheet
 */
function spc_load_stylesheet() {
	if ( is_single() ) {
		wp_enqueue_style( 'spc_stylesheet', plugin_dir_url(__FILE__) .'spc-styles.css' );
	}
}

// Hook stylesheet
add_action( 'wp_enqueue_scripts', 'spc_load_stylesheet' );





