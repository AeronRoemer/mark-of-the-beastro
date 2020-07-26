<?php
// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

//Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video'] );
add_theme_support( 'html5' ); 
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'starter-content' );

//Load in CSS
function wphierarchy_enqueue_styles(){
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' ); //time() prevents site from being cached, usefule for development, 'all' loads all devices and conditions
}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles'); //adds custom function to actions

//Register Menu Locations
register_nav_menus( [ 
    'main-menu' => esc_html__( 'Main Menu', 'beastro' ),
 ] );
// Setup Widget Areas
function beastro_widgets_init() {
    register_sidebar( [
        'name'          => esc_html__('Main Sidebar', 'beastro'),
        'id'            => 'main-sidebar',
        'description'   => esc_html__('Add widgets for main sidebar here', 'beastro'),
        'before_widget' => '<section class="widget main-widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title>',
        'after_title'   => '</h2>'
        ] );
        register_sidebar( [
            'name'          => esc_html__('Page Sidebar', 'beastro'),
            'id'            => 'page-sidebar',
            'description'   => esc_html__('Add widgets for page sidebar here', 'beastro'),
            'before_widget' => '<section class="widget page-widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title>',
            'after_title'   => '</h2>'
            ] );
}
add_action( 'widgets_init', 'beastro_widgets_init');

?>