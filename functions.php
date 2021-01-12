<?php

//////////////////////////////////////////////
//Load Stylesheets
//////////////////////////////////////////////

function load_css(){

    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', array(), 1, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css');

//////////////////////////////////////////////
//Load Javascript
//////////////////////////////////////////////

function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'load_js');

//////////////////////////////////////////////
//Theme Options
//////////////////////////////////////////////

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

//////////////////////////////////////////////
//Menus
//////////////////////////////////////////////

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'subpage-top-menu' => 'Subpage Top Menu Location'
    )
);

//////////////////////////////////////////////
//Custom Image Sizes
//////////////////////////////////////////////

add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
add_image_size('front-small', 300, 300, true);
add_image_size('banner-fullwidth', 9999, 9999, false);

//////////////////////////////////////////////
//Register Sidebars
//////////////////////////////////////////////

function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');