<?php
/**
 * Front-end hardening: no XML-RPC, no username enumeration.
 *
 * @package AMP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// The site does not use XML-RPC (no Jetpack, no mobile app publishing).
add_filter( 'xmlrpc_enabled', '__return_false' );

function amp_security_remove_pingback_header( $headers ) {
	unset( $headers['X-Pingback'] );
	return $headers;
}
add_filter( 'wp_headers', 'amp_security_remove_pingback_header' );

// Hide user lists from logged-out visitors (/wp-json/wp/v2/users).
function amp_security_restrict_user_endpoints( $endpoints ) {
	if ( ! is_user_logged_in() ) {
		unset( $endpoints['/wp/v2/users'] );
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}
	return $endpoints;
}
add_filter( 'rest_endpoints', 'amp_security_restrict_user_endpoints' );

// Author archives are not used; /?author=1 would otherwise leak the username.
function amp_security_block_author_enumeration() {
	if ( ! is_user_logged_in() && ( is_author() || isset( $_GET['author'] ) ) ) {
		wp_safe_redirect( home_url( '/' ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'amp_security_block_author_enumeration' );
