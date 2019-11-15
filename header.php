<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- tells the device to use its native size -->
    <title><?php bloginfo('name') ?></title>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <header class="main-header">
        <div class="header-top-menu">
             <!-- <div> -->
                <h1 class="site-name">
                    <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                </h1>
            <!-- </div> -->
            <!-- <div class="mobile-menu-button"> -->
                <a href="javascript:void(0);" tabindex="0" class="mobile-menu-button">Menu</a>
            <!-- </div> -->
        </div>

        <div>
            <nav class="header-nav display-none">
                <?php wp_nav_menu(array( 'theme_location'=> 'HeaderMenuLocation',
                'menu_class' => 'flex'
                ));
                ?>
            </nav>
        </div>

    </header>