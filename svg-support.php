<?php
/*
Plugin Name: WP Swift: SVG Support
Plugin URI: https://github.com/wp-swift-wordpress-plugins/wp-swift-svg-support
Description: Add Scaleable Vector Graphics (SVG) Upload Support into WordPress.
Version: 1
Author: Gary Swift
Author URI: https://github.com/wp-swift-wordpress-plugins
License: MIT
*/

// Add Scaleable Vector Graphics (SVG) Upload Support into WordPress
function add_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'add_mime_types' );
