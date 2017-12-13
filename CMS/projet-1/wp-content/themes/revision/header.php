<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Basic 89</title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/styles/layout.css" type="text/css">
    <!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri() ?>/scripts/html5shiv.js"></script><![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper row1">
    <header id="header" class="clear">
        <div id="hgroup">
            <h1><a href="#"><?php _e('Revisions WP', 'wp-theme-base-translate'); ?></a></h1>
            <h2><?php _e('Parce que réviser c\' est bien', 'wp-theme-base-translate'); ?></h2>
        </div>
        <nav>
                <?php
                $args = array(
                    'menu' => 'menu_haut',
                    'container' => 'ul',
                    'menu_class' => 'nav navbar-nav',
                );
                wp_nav_menu($args);
                ?>
        </nav>
    </header>
</div>