<?php
/**
 * Hull functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hull
 * @since 1.0
 *
 */

// 1. Setup the theme and variables
require_once( get_template_directory() . '/includes/functions-setup.php' );

// 2. Enqueue scripts and styles
require_once( get_template_directory() . '/includes/functions-enqueue-scripts.php' );

// 3. Customize the WordPress admin
require_once( get_template_directory() . '/includes/functions-admin.php' );

// 4. Custom functions for the content
require_once( get_template_directory() . '/includes/functions-content.php' );