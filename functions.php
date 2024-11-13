<?php
function files()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('animationBackground', get_theme_file_uri('/js/animationBackground.js'), array(), NULL, true);
}
add_action('wp_enqueue_scripts', 'files');

// if (! has_filter('wp_nav_menu', 'do_shortcode')) {
//     add_filter('wp_nav_menu', 'shortcode_unatop');
//     add_filter('wp_nav_menu', 'do_shortcode', 11);
// }

function do_shortcode_in_menu($items, $args)
{
    foreach ($items as $item) {
        // Applique le shortcode à chaque élément de menu
        $item->title = do_shortcode($item->title);
    }
    return $items;
}

add_filter('wp_nav_menu_objects', 'do_shortcode_in_menu', 10, 2);

// function scriptJsCours()
// {
//     wp_enqueue_script('cours', get_template_directory_uri() . '/js/cours.js', array('jquery'), null, true);
// }

// add_action('wp_enqueue_scripts', 'scriptJsCours');
