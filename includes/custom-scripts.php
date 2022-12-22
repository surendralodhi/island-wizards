<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
 * Enqueue scripts and styles for the back end.
 */
function islandwizards_admin_scripts() {
    global $wp_version;
    // Load our admin stylesheet.
    wp_enqueue_style( 'islandwizards-admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    // Load our admin script.
    wp_enqueue_script( 'islandwizards-admin-script', get_template_directory_uri() . '/js/admin-script.js' );
    //localize admin script
    wp_localize_script( 'islandwizards-admin-script', 'ISLANDWIZARDSADMIN', array(
                                                                    'ajaxurl' => admin_url('admin-ajax.php', ( is_ssl() ? 'https' : 'http')),
                                                                ));
    wp_enqueue_media();
}
/*
 * Enqueue scripts and styles for the front end.
 */
function islandwizards_public_scripts() {
    
    // Load our bootstrap.min stylesheet.
    wp_enqueue_style( 'bootstrap.min-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), NULL );
    // Load our font-awesome.min stylesheet.
    wp_enqueue_style( 'font-awesome.min-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), NULL );
    // Load our slick stylesheet.
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/css/slick.css', array(), NULL );
    // Load our fancybox stylesheet.
    wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/css/fancybox.css', array(), NULL );
    // Load our main stylesheet.
    wp_enqueue_style( 'islandwizards-style', get_stylesheet_uri(), array(), NULL );
    // Load our public style stylesheet.
    wp_enqueue_style( 'islandwizards-public-style', get_template_directory_uri() . '/css/public-style.css', array(), NULL );
    
    // Load main jquery
    wp_enqueue_script( 'jquery', array(), NULL );
    // Load bootstrap.bundle.min script
    wp_enqueue_script( 'bootstrap.bundle.min-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), NULL );
    // Load slick.min script
    wp_enqueue_script( 'slick.min-script', get_template_directory_uri() . '/js/slick.min.js', array(), NULL );
    // Load fancybox script
    wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/js/fancybox.umd.js', array(), NULL );
    // Load public script
    wp_enqueue_script( 'islandwizards-public-script', get_template_directory_uri() . '/js/public-script.js', array(), NULL );
    //localize public script
    wp_localize_script( 'islandwizards-public-script', 'ISLANDWIZARDSPUBLIC', array(
                                                                    'ajaxurl' => admin_url('admin-ajax.php', ( is_ssl() ? 'https' : 'http')),
                                                                ));
}
/*
 * Enqueue scripts and styles for the admin login screen.
 */
function islandwizards_login_stylesheet() {
    wp_enqueue_style( 'islandwizards-login-style', get_stylesheet_directory_uri() . '/css/login-style.css' );
}
//add action to load scripts and styles for the back end
add_action( 'admin_enqueue_scripts', 'islandwizards_admin_scripts' );
//add action load scripts and styles for the front end
add_action( 'wp_enqueue_scripts', 'islandwizards_public_scripts' );
//add action load scripts and styles for admin login screen
add_action( 'login_enqueue_scripts', 'islandwizards_login_stylesheet' );