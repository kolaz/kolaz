<?php
/**
 * Created by PhpStorm.
 * User: Raisul
 * Date: 01-Sep-17
 * Time: 4:46 PM
 */

function kolaz_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'kolaz_assets' );