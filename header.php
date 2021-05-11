<!doctype html>
<html>

    <head>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
    </head>
       
    <body>
        <?php wp_nav_menu ( array('theme_location' => 'menu_principal')); ?>