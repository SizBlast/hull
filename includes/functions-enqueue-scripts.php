<?php
/**
 *
 * ENQUEUE SCRIPTS & CSS
 *
 * @package Hull
 * @since 1.0
 *
 * This file handles the JS and CSS files.
 *
 */

function hwp_add_frontend_scripts() {
    // Add custom fonts, used in the main stylesheet.
    //wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

    // Normalize stylesheet.
    // wp_enqueue_style( 'normalize', get_theme_file_uri( '/assets/css/normalize.css' ), array(), '8.0.0' );
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', array(), '8.0.0' );

    // Font Awesome
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/css/all.min.css', array(), '5.2.0' );

    // Bootstrap stylesheet.
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3' );

    // Theme stylesheet.
    wp_enqueue_style( 'hull', get_stylesheet_directory_uri() . '/assets/css/main.css' );

    // Load the dark colorscheme.
    // if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
    // 	wp_enqueue_style( 'twentyseventeen-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'twentyseventeen-style' ), '1.0' );
    // }

    // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
    // if ( is_customize_preview() ) {
    // 	wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
    // 	wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
    // }

    // Load the Internet Explorer 8 specific stylesheet.
    // wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
    // wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

    // Load the html5 shiv.
    // wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
    // wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    //wp_enqueue_script( 'twentyseventeen-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

    // $twentyseventeen_l10n = array(
    // 	'quote'          => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
    // );

    // if ( has_nav_menu( 'top' ) ) {
    // 	wp_enqueue_script( 'twentyseventeen-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
    // 	$twentyseventeen_l10n['expand']         = __( 'Expand child menu', 'twentyseventeen' );
    // 	$twentyseventeen_l10n['collapse']       = __( 'Collapse child menu', 'twentyseventeen' );
    // 	$twentyseventeen_l10n['icon']           = twentyseventeen_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
    // }

    if ( !is_admin() ) {
        // Remove default jQuery
        wp_deregister_script( 'jquery' );
        // Add new jQuery
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true );
    }

    // Popper JS
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );

    // Bootstrap JS
    //wp_enqueue_script( 'boostrap-js', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ), '4.0.0', true );
    wp_enqueue_script( 'boostrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );

    // wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

    // wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

    // wp_localize_script( 'twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    // 	wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'hwp_add_frontend_scripts' );

function hwp_add_backend_scripts() {
    // Font Awesome
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/css/all.min.css', array(), '5.2.0' );

    // Theme Admin stylesheet.
    wp_enqueue_style( 'hull-admin', get_stylesheet_directory_uri() . '/assets/css/admin.css' );

    // Jquery UI
    wp_enqueue_script( 'jquery-ui-tabs' );
}
add_action( 'admin_enqueue_scripts', 'hwp_add_backend_scripts' );
