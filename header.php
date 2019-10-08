<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- tells the device to use its native size -->
    <title><?php bloginfo('name') ?></title>

    <?php wp_head(); ?>
</head>


<body>

    <header>
        <h1 id="header">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>

        <nav class="header-nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'HeaderMenuLocation'
            ));
            ?>
        </nav>
    </header>