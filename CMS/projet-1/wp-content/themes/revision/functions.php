<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 12/10/2017
 * Time: 19:52
 */


register_nav_menu(
    array(
        'main-menu'=> 'Description du menu',
        'footer-menu' => 'Description du menu footer'
    )



);

function wp_base_theme_theme_setup(){

    /*
     * Ajout du champs "Image à la Une" dans les articles
     */
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_base_theme_theme_setup' );



function wp_base_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'bloc_footer_1', 'tetranslate' ),
        'id'            => 'bloc_footer_1',
        'description'   => __( 'bloc footer avec contact', 'tetranslate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wp_base_theme_widgets_init' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

add_action( 'after_setup_theme', 'pdw_theme_setup' );

function pdw_theme_setup(){
    load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
}