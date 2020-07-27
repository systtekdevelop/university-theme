<?php
/**
 * University Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage University_Theme
 * @since University Theme 1.0
 *
 **/

define( 'University_Theme_Version', '1.0.0' );
define( 'University_Theme_Settings', 'university_settings' );
define( 'University_Theme_Dir', trailingslashit( get_template_directory() ) );
define( 'University_Theme_Uri', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function university_theme_version() {
    $theme_version = '1.0.0';
    $university_theme_version = $theme_version;
    return $university_theme_version;
}


/** Initialize Menus */
function university_menus() {
    register_nav_menus(array(
        'header-menu-location' => __( 'Header Menu', 'university'),
        'footer-menu-location' => __( 'Footer Menu', 'university')
    ));
}
add_action( 'init', 'university_menus' );


// Import Bootstrap
function BootstrapCss() {
    $style = 'bootstrap';
    $url = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css';
    $integrity = 'sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk';
    $crossorigen = 'anonymous';
    
    if ( wp_style_is( $style, 'enqueued' ) ) {
        wp_deregister_style( $style );
        wp_register_style( $style, $url, array(), '4.5.0', true );
    } else {
        wp_register_style( $style, $url, array(), '4.5.0', true );
    }
    wp_enqueue_style( $style );
    wp_style_add_data( $style, $integrity, $crossorigen );
    
}


function jqueryJS() {
    $script = 'jquery';
    $url = 'https://code.jquery.com/jquery-3.5.1.slim.min.js';
    $integrity = 'sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj';
    $crossorigen = 'anonymous';
    $version = '3.5.1';

    if ( wp_script_is( $script, 'enqueued' ) ) {
        wp_deregister_script( $script );
        wp_register_script( $script, $url, array($deps), $version, true );
    } else {
        wp_register_script( $script, $url, array($deps), $version, true );
    }
    wp_enqueue_script( $script );
    wp_script_add_data( $script, $integrity, $crossorigen );
}

function PopperJS() {
    $script = 'popper';
    $url = 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js';
    $integrity = 'sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo';
    $crossorigen = 'anonymous';
    $deps = 'jquery';
    $version = '1.16.0';

    if ( wp_script_is( $script, 'enqueued' ) ) {
        wp_deregister_script( $script );
        wp_register_script( $script, $url, array($deps), $version, true );
    } else {
        wp_register_script( $script, $url, array($deps), $version, true );
    }
    wp_enqueue_script( $script );
    wp_script_add_data( $script, $integrity, $crossorigen );
}

function BootstrapJS() {
    $script = 'bootstrap';
    $url = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js';
    $integrity = 'sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI';
    $crossorigen = 'anonymous';
    $deps = 'jquery';
    $version = '4.5.0';

    if ( wp_script_is( $script, 'enqueued' ) ) {
        wp_deregister_script( $script );
        wp_register_script( $script, $url, array($deps), $version, true );
    } else {
        wp_register_script( $script, $url, array($deps), $version, true );
    }
    wp_enqueue_script( $script );
    wp_script_add_data( $script, $integrity, $crossorigen );
}


// Styles & Scripts

function university_styles() {
    BootstrapCss();
    /** Font Awesome  */
    wp_enqueue_style( 'fontawesome5', get_template_directory_uri(). '/css/icons/all.min.css' , false, '5.14.0' );
    /** Google Fonts */
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    /** Theme Styles */
    wp_enqueue_style( 'university', get_template_directory_uri(). '/style.css', false, '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'university_styles', 5 );

function university_scripts() {
    jqueryJS();

    PopperJS();

    BootstrapJS();

    if (strstr($_SERVER['SERVER_NAME'], 'university.local')) {
        wp_enqueue_script('university', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }

    
}
add_action( 'wp_enqueue_scripts', 'university_scripts', 10 );
