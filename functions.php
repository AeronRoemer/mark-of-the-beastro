<?php
//Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'video'] );
add_theme_support( 'html5' ); 
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
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
?>