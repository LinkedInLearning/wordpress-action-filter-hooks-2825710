<?php
/**
* Plugin Name: Hooks Test
*
*/

function hello_world() {
	echo "Hello World!";
}

add_action( 'login_header', 'hello_world' );
