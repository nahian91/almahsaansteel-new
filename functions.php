<?php
// Theme Setup
function almahsaansteel_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'almahsaansteel'),
        'footer' => __('Footer Menu', 'almahsaansteel'),
    ));
}
add_action('after_setup_theme', 'almahsaansteel_setup');

// Enqueue Styles and Scripts
function almahsaansteel_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0');
    wp_enqueue_style('style-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0');


    wp_enqueue_script('isotope-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
    
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'almahsaansteel_enqueue_assets');
?>
