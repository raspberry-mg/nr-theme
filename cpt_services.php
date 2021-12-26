<?php
/**
 * Register a Custom post type
 * services
 */

add_action( 'init', 'custom_services' );

function custom_services() {
$labels = array(
'name' => __( 'Services' ),
'singular_name' => __( 'Service' ),
'add_new' => __( 'New Service' ),
'add_new_item' => __( 'Add New Service' ),
'edit_item' => __( 'Edit Service' ),
'new_item' => __( 'New Service' ),
'view_item' => __( 'View Service' ),
'search_items' => __( 'Search Service' ),
'not_found' =>  __( 'No Service Found' ),
'not_found_in_trash' => __( 'No Service found in Trash' ),
);
$args = array(
'labels' => $labels,
'menu_icon'	     => 'dashicons-insert',
'has_archive' => true,
'public' => true,
'hierarchical' => false,
'menu_position' => 5,
'supports' => array('title','editor','thumbnail', 'excerpt'),
);

register_post_type( 'services', $args );
}



