<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
 * Custom Theme Options
 */
if( function_exists('acf_add_options_page') ) {
    // Island Wizards General Settings
    $general_settings   = array(
                                'page_title' 	=> __( 'Island Wizards Settings', 'islandwizards' ),
                                'menu_title'	=> __( 'Island Wizards Settings', 'islandwizards' ),
                                'menu_slug' 	=> 'islandwizards-general-settings',
                                'capability'	=> 'edit_posts',
                                'redirect'      => false,
                                'icon_url'      => 'dashicons-admin-customizer'
                            );
    acf_add_options_page( $general_settings );
}