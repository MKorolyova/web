<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_mytheme_styles() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . "/reset.css" );
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
   wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'add_mytheme_styles', 25);

function add_mytheme_scripts() {

    wp_enqueue_script( 'goalScript', get_template_directory_uri() . '/goalScript.js' );
    wp_enqueue_script( 'registration', get_template_directory_uri() . '/registration.js');
}
add_action( 'wp_enqueue_scripts', 'add_mytheme_scripts' );


function register_custom_widget_area() {
    register_sidebar(
    array(
    'id' => 'footer-widget-area',
    'name' => esc_html__( 'footer', 'theme-domain' ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
    ));

    register_sidebar(
        array(
        'id' => 'new-widget-area',
        'name' => esc_html__( 'test', 'theme-domain' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ));
}

add_action( 'widgets_init', 'register_custom_widget_area' );