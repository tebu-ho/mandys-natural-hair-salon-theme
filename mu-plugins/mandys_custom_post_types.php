<?php

function mandys_custom_post_types()
{
    register_post_type('product', array(
        'public' => true,
        'labels' => array(
            'name'         => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item'    => 'Edit Product',
            'all_items'    => 'All Products',
            'singular'     => 'Product'
        ),
        'menu_icon' => 'dashicons-cart',
        'supports' => array(
            'thumbnail',
            'title'
        )
    )
);
    register_post_type('feature', array(
        'public' => true,
        'labels' => array(
            'name'         => 'Features',
            'add_new_item' => 'Add New Feature',
            'edit_item'    => 'Edit Feature',
            'all_items'    => 'All Features',
            'singular'     => 'Feature'
        ),
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array(
            'thumbnail',
            'title',
            'editor'
        )
    )
);
    register_post_type('team', array(
        'public' => true,
        'labels' => array(
            'name'         => 'Team',
            'add_new_item' => 'Add New Member',
            'edit_item'    => 'Edit Member',
            'all_items'    => 'All Members',
            'singular'     => 'Team'
        ),
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'thumbnail',
            'title',
            'editor'
        )
    )
);
    register_post_type('gallery', array(
        'public' => true,
        'labels' => array(
            'name'         => 'Gallery',
            'add_new_item' => 'Add New Item',
            'edit_item'    => 'Edit Member',
            'all_items'    => 'All Item',
            'singular'     => 'Gallery'
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array(
            'thumbnail',
            'title',
            'editor'
        )
    )
);
}


add_action('init', 'mandys_custom_post_types');