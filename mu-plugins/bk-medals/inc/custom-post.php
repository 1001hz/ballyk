<?php

add_action( 'init', 'bk_medals' );
function bk_medals() {
    $labels = array(
        'name' => _x('Medals', 'post type general name'),
        'singular_name' => _x('Medal', 'post type singular name'),
        'add_new' => _x('Add a monthly medal', 'page'),
        'add_new_item' => __('Add a monthly medal'),
        'edit_item' => __('Edit'),
        'new_item' => __('New monthly medals'),
        'view_item' => __('View monthly medals'),
        'search_items' => __('Search medals'),
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

    register_post_type('bk_medals', $args);
}

?>