<?php
/**
 *
 * ADMIN PAGES
 *
 * @package Hull
 * @since 1.0
 *
 * This file handles the admin area and functions.
 *
 */

function hwp_add_admin_pages() {
    // Theme Options
    add_menu_page(
        hwp_NAME,
        hwp_NAME,
        'manage_options',
        'hwp_options',
        'hwp_add_theme_options_page',
        'dashicons-sos',
        3
    );

    // Theme Options (bis)
    add_submenu_page(
        'hwp_options', // parent slug
        'Bootstrap Base Theme', // page title
        __( 'Theme Options', 'hwp' ), // menu title
        'manage_options', //capability,
        'hwp_options' // menu slug
    );
}
add_action( 'admin_menu', 'hwp_add_admin_pages' );

function hwp_add_theme_options_page() {
    echo '<strong style="color:red;">TO DO</strong><br>Here come the theme options...';
}