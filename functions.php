<?php
function tah_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
    wp_enqueue_style('slick-slider', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'tah_styles');

function tah_scripts()
{
    wp_enqueue_script('main-jquery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', '', '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', '', '', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'tah_scripts');

add_theme_support('post-thumbnails');


register_nav_menus(array(
    'main' => __('Top header menu'),
    'mobile' => __("Mobile menu")
));

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
    if ( 'mobile' === $args->theme_location ) {
        $classes = [ 'mobile-nav__item' ];
    } else {
        $classes = [];
    }

    return $classes;
}

function tah_islands()
{
    $labels = array(
        'name' => _x('Islands', 'post type general name'),
        'singular_name' => _x('Island', 'post type singular name'),
        'add_new' => _x('Add New Island', 'book'),
        'add_new_item' => __('Add New Island'),
        'edit_item' => __('Edit Island'),
        'new_item' => __('New Island'),
        'all_items' => __('All Islands'),
        'view_item' => __('View Island'),
        'search_items' => __('Search Island'),
        'not_found' => __('No islands found'),
        'not_found_in_trash' => __('No islands found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Islands'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Islands',
        'rewrite' => array('slug' => 'islands'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions'),
        'menu_icon' => 'dashicons-palmtree',
        'has_archive' => false,
    );
    register_post_type('tah_islands', $args);
}

add_action('init', 'tah_islands');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

add_image_size('bg', 1440, 650, true);
add_image_size('card', 285, 170, true);
add_image_size('logo', 191, 52, true);

