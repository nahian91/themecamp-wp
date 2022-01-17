<?php

function buson_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('slider', 'services'));

}
add_action('after_setup_theme', 'buson_setup');

function buson_assets() {

    // CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/assets/css/slicknav.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main', get_stylesheet_uri() );

    // JS
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'buson_assets');


// Register Custom Post

function buson_cpt() {

    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Slider', 'buson' ),
        'new_item'              => __( 'New Slider', 'buson' ),
        'edit_item'             => __( 'Edit Slider', 'buson' ),
        'view_item'             => __( 'View Slider', 'buson' ),
        'all_items'             => __( 'All Slider', 'buson' ),
        'search_items'          => __( 'Search Slider', 'buson' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'buson' ),
        'not_found'             => __( 'No sliders found.', 'buson' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'buson' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );
    register_post_type( 'slider', $args );

    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Service', 'buson' ),
        'new_item'              => __( 'New Service', 'buson' ),
        'edit_item'             => __( 'Edit Service', 'buson' ),
        'view_item'             => __( 'View Service', 'buson' ),
        'all_items'             => __( 'All Service', 'buson' ),
        'search_items'          => __( 'Search Service', 'buson' ),
        'parent_item_colon'     => __( 'Parent Service:', 'buson' ),
        'not_found'             => __( 'No Service found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Service found in Trash.', 'buson' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor'),
    );
    register_post_type( 'services', $args );
}
add_action('init', 'buson_cpt');