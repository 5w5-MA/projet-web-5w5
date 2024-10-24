<?php
function files()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'files');

// function scriptJsCours()
// {
//     wp_enqueue_script('cours', get_template_directory_uri() . '/js/cours.js', array('jquery'), null, true);
// }

// add_action('wp_enqueue_scripts', 'scriptJsCours');
