<?php
function files()
{
    wp_enqueue_script('burgerScript', get_theme_file_uri('/js/burger.js'),array(),NULL,true);
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'files');


function ajout_au_theme(){
    add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'custom-logo');
    add_theme_support( 'menus' );
}
add_action('after_setup_theme','ajout_au_theme');