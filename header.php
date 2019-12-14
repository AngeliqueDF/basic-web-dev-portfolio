<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- tells the device to use its native size -->

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <header class="main-header">
        <h1 class="site-name">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <!-- <a href="javascript:void(0);" tabindex="0" class="mobile-menu-button">Menu</a> -->
        <button class="hamburger hamburger--slider mobile-menu-button" type="button">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
        </button>
        <nav class="header-nav display-none">
            <?php wp_nav_menu(array( 'theme_location'=> 'HeaderMenuLocation'));
            ?>
        </nav>
    </header>