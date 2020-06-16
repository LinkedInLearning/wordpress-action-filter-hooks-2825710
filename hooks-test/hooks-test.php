<?php
/**
* Plugin Name: Hooks Test
*
*/

// Adds a welcome message
function hello_world() {
	if ( is_admin() ) {
		echo "Howdy Admin!";
	} else {
		echo "Hello World!";
	}
}
// Example of using add_action
add_action( 'login_header', 'hello_world' );

add_action( 'admin_notices', 'hello_world' );


// Modify URL on login screen
function change_headerurl( $url ) {
	$url = "https://carriedils.com";
	return $url;
}
// Example of using add_filter
add_filter( 'login_headerurl', 'change_headerurl' );
