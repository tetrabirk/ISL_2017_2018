<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 12/10/2017
 * Time: 19:52
 */

function wp_base_theme_theme_setup(){

    /*
     * Ajout du champs "Image à la Une" dans les articles
     */
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_base_theme_theme_setup' );

register_nav_menu(
  array(
      'main-menu'=> 'Description du menu',
      'footer-menu' => 'Description du menu footer'
  )
);