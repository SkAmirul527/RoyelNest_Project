<?php

function mytheme_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,        // Set your desired height
        'width'       => 400,        // Set your desired width
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'mytheme_custom_logo_setup');

// create menu locations in wp admin area 
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' =>('Header Menu'),
            'footer-menu' =>('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');


// coustom page type rooms
function create_rooms_post_type() {
    register_post_type('room',
        array(
            'labels' => array(
                'name' => __('Rooms'),
                'singular_name' => __('Room')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'room'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'create_rooms_post_type');
// Enable Featured Image support
add_theme_support('post-thumbnails');

// custom page for gallery
function create_gallery_post_type() {
    register_post_type('gallery',
        array(
            'labels' => array(
                'name' => __('Gallery'),
                'singular_name' => __('Gallery')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'create_gallery_post_type');
?>


