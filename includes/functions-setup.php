<?php
/**
 *
 * THEME SETUP
 *
 * @package Hull
 * @since 1.0
 *
 */

$theme = wp_get_theme();

define( 'HWP_VERSION', $theme->get( 'Version' ), true );
define( 'HWP_NAME', $theme->get( 'Name' ), true );


/* Supports */
add_theme_support( 'post-thumbnails' );