<?php

function change_login_destination( $redirect_url ) {
	$redirect_url = '/some-url';
	return $redirect_url;
}

add_filter( 'login_redirect', 'change_login_destination' );
