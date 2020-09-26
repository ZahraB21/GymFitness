<?php

// Link to queries files
require get_template_directory() . '/inc/queries.php';

// Add Menu
function gymfitness_menus()
{
    // WordPress Function
    register_nav_menus(array(
        'main_menu' => 'Main Menu'
    ));
}

// Hook for Menus
add_action('init', 'gymfitness_menus');

// Add styles
function gymfitness_scripts()
{
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '');

    // Google fonts
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    // SlickNav css
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    // Main Styles
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.1');

    // JQuery 
    wp_enqueue_script('jquery');

    // SlickNav js
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}

// Hook the scripts 
add_action('init', 'gymfitness_scripts');

// Support basic setup features
function gymfitness_setup()
{
    // Register new image sizeSlug
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    // Add featured images
    add_theme_support('post-thumbnails');
}

add_action('init', 'gymfitness_setup');

// Add the widgets section
function gymfitness_sidebars()
{
    register_sidebar(array(
        'name'  => 'Sidebars',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    // register_sidebar(array(
    //     'name'  => 'Sidebars',
    //     'id' => 'sidebar2',
    //     'before_widget' => '<div class="widget">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h3>',
    //     'after_title' => '</h3>',
    // ));
}

// Hook the widgets into wordpress
add_action('widgets_init', 'gymfitness_sidebars');