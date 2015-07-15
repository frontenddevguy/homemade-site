<?php

add_action( 'wp_enqueue_scripts', 'hm_enqueue_styles', 12 );

function hm_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/css/style.css',
        array('main-style')
    );
}


add_action( 'wp_footer', 'wpse26822_script_fix' );
function wpse26822_script_fix()
{
    wp_dequeue_script( 'parent_theme_script_handle' );
    wp_enqueue_script( 'child_theme_script_handle', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ) );
}

add_theme_support('avia_template_builder_custom_css');

//set builder mode to debug
add_action('avia_builder_mode', "builder_set_debug");
function builder_set_debug()
{
	return "debug";
}