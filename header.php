<?php
/**
 * The header for the theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hull
 * @since 1.0
 * @version 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php _e( 'Home', 'hwp' ); ?> <span class="sr-only"><?php _e( '(current)', 'hwp' ); ?></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php _e( 'Link', 'hwp' ); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"><?php _e( 'Disabled', 'hwp' ); ?></a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="<?php _e( 'Search', 'hwp' ); ?>" aria-label="<?php _e( 'Search', 'hwp' ); ?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php _e( 'Search', 'hwp' ); ?></button>
            </form>
        </div>
    </nav>
