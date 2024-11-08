<?php

////////////////////// Pour ajouter des files ou des url /////////////////////
function files()
{
    wp_enqueue_script('burgerScript', get_theme_file_uri('/js/burger.js'),array(),NULL,true);
    wp_enqueue_script('coursScript',get_theme_file_uri('/js/cours.js'),array(),NULL,true);
    wp_enqueue_script('buttonCoursScript', get_theme_file_uri('/js/buttonCours.js'),array(),NULL,true );
    wp_enqueue_script('animationScrollVieEtudiante', get_theme_file_uri('js/animationScrollVieEtudiante.js'),array(),NULL, true);

    wp_enqueue_media('lato','//fonts.googleapis.com/css2?family=Lato');
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'files');


function ajout_au_theme(){
    add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'custom-logo');
    add_theme_support( 'menus' );
}
add_action('after_setup_theme','ajout_au_theme');



function features(){
    register_nav_menu('headerMenuLocation', 'header menu location');
    register_nav_menu('footerMenuLocation', 'footer menu location');
    add_theme_support('title-tag');



    add_image_size('imagesVieEtude', 1000,800,true);
}
add_action('after_setup_theme',  'features');