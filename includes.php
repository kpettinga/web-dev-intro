<?php
/*
 * Includes
 */

function home_url( $path = '' ) {
	$home = 'http://' . $_SERVER['HTTP_HOST'] . '/web-dev-intro';
	if ( ! $path )
		return $home . '/';
	else
		return $home . $path;
}

function menu_class( $slug ) {
	if ( strpos( SLUG, $slug ) > -1 ) {
		return 'active';
	}
}
















?>