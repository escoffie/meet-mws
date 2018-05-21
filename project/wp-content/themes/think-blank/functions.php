<?php

# Think Blank Theme

$theme = wp_get_theme('think');
$think_version = $theme['Version'];

# Setup
function think_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'think_setup');

# Styles and other assets

function think_styles() {

    // Register Styles
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
    wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Satisfy', array(), '1.0.2');
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize', 'fontawesome'), '0.1');
    
    // Load styles
    wp_enqueue_style('normalize');
    wp_enqueue_style('google_fonts');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');

    // Register JS
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    
    // Load JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'think_styles');

# Menus

function think_menus() {
    register_nav_menus( array(
        'header-menu' => __('Header menu', 'think'),
        'social-menu' => __('Social menu', 'think'),
        'footer-menu' => __('Footer menu', 'think'),
    ) );
}

add_action('init', 'think_menus');

# Widgets

function think_widgets_init() {
    register_sidebar( 
        array (
            'name' => __( 'Sidebar Widget Area', 'think' ),
            'id' => 'primary-widget-area',
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget' => "</li>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array (
            'name' => __( 'Frontpage Widget Area', 'think' ),
            'id' => 'front-widget-area',
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget' => "</li>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'think_widgets_init' );