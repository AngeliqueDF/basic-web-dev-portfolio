<?php

function add_theme_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('hamburgers.min', get_theme_file_uri( '/css/hamburgers.min.css' ));
    wp_enqueue_style('montserrat-fonts',  get_theme_file_uri( '/css/fonts/stylesheet.css' ) );
}
add_action('wp_enqueue_scripts', 'add_theme_styles');


function add_theme_scripts(){
    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'));
}
add_action('wp_footer', 'add_theme_scripts');

//  add breadcrumbs
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo 'Accueil';
        // bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(', ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/

if ( ! function_exists( 'basic_web_dev_portfolio_setup' ) ) :
    
	function basic_web_dev_portfolio_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
        }
    endif;
add_action( 'after_setup_theme', 'basic_web_dev_portfolio_setup' );

register_nav_menus(
    array(
    'HeaderMenuLocation' => __( 'Primary Menu' ),
    )
);