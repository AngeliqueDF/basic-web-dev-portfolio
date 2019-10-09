<?php

function link_css_files(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'link_css_files');

function theme_features()
{
    register_nav_menu('HeaderMenuLocation', ('Header Menu Location'));
    // add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');

add_action('after_setup_theme', 'wpse_theme_setup');
function wpse_theme_setup()
{
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');
}