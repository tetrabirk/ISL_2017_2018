<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/styles/layout.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/styles/birk.css" type="text/css">
    <!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri() ?>/scripts/html5shiv.js"></script><![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper row1">
    <header id="header" class="clear">
        <div id="hgroup">
            <h1><a href="<?php echo get_home_url()?>"><?php _e('Revisions WP', 'wp-theme-base-translate'); ?></a></h1>
            <h2><?php _e('Parce que réviser c\' est bien', 'wp-theme-base-translate'); ?></h2>
            <p><?php the_field('emailtest2', 'option'); ?></p>
        </div>
        <div id="menutop">
                <?php
                $args = array(
                    'menu' => 'menu_haut',
                    'container' => 'ul',
                );
                wp_nav_menu($args);
                ?>
        </div>
    </header>
</div>