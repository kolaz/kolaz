<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package unite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function kolaz_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'type' => 'click', 
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'kolaz_jetpack_setup' );
