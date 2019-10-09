<?php

function link_css_files(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'link_css_files');

function theme_features()
{
    register_nav_menu('HeaderMenuLocation', ('Header Menu Location'));
    register_nav_menu('FooterLocationOne', ('Footer Menu Location'));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');