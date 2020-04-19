<?php
/**
 * Bulmapress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bulmapress
 */


require get_template_directory() . '/functions/bulmapress_navwalker.php';
require get_template_directory() . '/functions/bulmapress_helpers.php';
require get_template_directory() . '/functions/bulmapress_custom_query.php';

if ( ! function_exists( 'bulmapress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bulmapress_setup() {
	require get_template_directory() . '/functions/base.php';
	require get_template_directory() . '/functions/post-thumbnails.php';
	require get_template_directory() . '/functions/navigation.php';
	require get_template_directory() . '/functions/content.php';
	require get_template_directory() . '/functions/pagination.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search.php';
	require get_template_directory() . '/functions/scripts-styles.php';
}
endif;

add_theme_support( 'custom-header' );

function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}

add_action( 'after_setup_theme', 'bulmapress_setup', 'themename_custom_header_setup' );

require get_template_directory() . '/functions/template-tags.php';
require get_template_directory() . '/functions/extras.php';
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/jetpack.php';
