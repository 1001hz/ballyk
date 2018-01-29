<?php

add_action( 'init', 'bk_hole' );
function bk_hole() {
    $labels = array(
        'name' => _x('Hole', 'post type general name'),
        'singular_name' => _x('Hole', 'post type singular name'),
        'add_new' => _x('Add a Hole', 'page'),
        'add_new_item' => __('Add a Hole'),
        'edit_item' => __('Edit'),
        'new_item' => __('New Hole'),
        'view_item' => __('View Hole'),
        'search_items' => __('Search hole'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,

        'menu_position' => 5,
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-admin-links',
        'supports' => array('title')
    );

    register_post_type('bk_hole', $args);
}

?>