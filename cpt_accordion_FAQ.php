<?php

function custom_accordion()
{
    $labels = array(
        'name' => __('FAQ'),
        'singular_name' => __('Question'),
        'add_new' => __('New Question'),
        'add_new_item' => __('Add New Question'),
        'edit_item' => __('Edit Question'),
        'new_item' => __('New Question'),
        'view_item' => __('View Question'),
        'search_items' => __('Search Question'),
        'not_found' => __('No Question Found'),
        'not_found_in_trash' => __('No Question found in Trash'),
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-search',
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title'),
    );

    register_post_type('FAQ', $args);
}

add_action('init', 'custom_accordion');

