<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Register Custom Post Types
 */
function islandwizards_register_post_types() {
    $custompost_labels = array(
                            'name'               => _x( 'Custom Post', 'custom_post', 'islandwizards' ),
                            'singular_name'      => _x( 'Custom Post', 'custom_post', 'islandwizards' ),
                            'menu_name'          => _x( 'Custom Post', 'custom_post', 'islandwizards' ),
                            'name_admin_bar'     => _x( 'Custom Post', 'custom_post', 'islandwizards' ),
                            'add_new'            => _x( 'Add New', 'custom_post', 'islandwizards' ),
                            'add_new_item'       => __( 'Add New Custom Post', 'islandwizards' ),
                            'new_item'           => __( 'New Custom Post', 'islandwizards' ),
                            'edit_item'          => __( 'Edit Custom Post', 'islandwizards' ),
                            'view_item'          => __( 'View Custom Post', 'islandwizards' ),
                            'all_items'          => __( 'All Custom Post', 'islandwizards' ),
                            'search_items'       => __( 'Search Custom Post', 'islandwizards' ),
                            'parent_item_colon'  => __( 'Parent Custom Post:', 'islandwizards' ),
                            'not_found'          => __( 'No Custom Post Found.', 'islandwizards' ),
                            'not_found_in_trash' => __( 'No Custom Post Found In Trash.', 'islandwizards' ),
                        );

    $custompost_args = array(
                            'labels'             => $custompost_labels,
                            'public'             => true,
                            'publicly_queryable' => true,
                            'show_ui'            => true,
                            'show_in_menu'       => true,
                            'query_var'          => true,
                            'rewrite'            => array( 'slug'=> 'custompost', 'with_front' => false ),
                            'capability_type'    => 'post',
                            'has_archive'        => false,
                            'hierarchical'       => false,
                            'menu_position'      => null,
                            'menu_icon'          => 'dashicons-pressthis',
                            'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
                        );

    register_post_type( ISLANDWIZARDS_CUSTOM_POST_POST_TYPE, $custompost_args );
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
                    'name'              => _x( 'Categories', 'taxonomy general name', 'islandwizards'),
                    'singular_name'     => _x( 'Category', 'taxonomy singular name','islandwizards' ),
                    'search_items'      => __( 'Search Categories','islandwizards' ),
                    'all_items'         => __( 'All Categories','islandwizards' ),
                    'parent_item'       => __( 'Parent Category','islandwizards' ),
                    'parent_item_colon' => __( 'Parent Category:','islandwizards' ),
                    'edit_item'         => __( 'Edit Category' ,'islandwizards'), 
                    'update_item'       => __( 'Update Category' ,'islandwizards'),
                    'add_new_item'      => __( 'Add New Category' ,'islandwizards'),
                    'new_item_name'     => __( 'New Category Name' ,'islandwizards'),
                    'menu_name'         => __( 'Categories' ,'islandwizards')
                );

    $args = array(
                    'hierarchical'      => true,
                    'labels'            => $labels,
                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
                    'rewrite'           => array( 'slug'=> 'custom_tax' )
                );
	
    register_taxonomy( ISLANDWIZARDS_CUSTOM_POST_POST_TAX, ISLANDWIZARDS_CUSTOM_POST_POST_TYPE, $args );
    //flush rewrite rules
    flush_rewrite_rules();
}
//add action to create custom post type
add_action( 'init', 'islandwizards_register_post_types' );