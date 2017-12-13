<?php

//instanciation des menus

register_nav_menus(array(
    'menu_haut' => __('Menu primaire', 'menu-primaire'),
    'menu_bas' => __('Menu footer', 'menu-footer'),
    'menu_cote' => __('Menu categories', 'menu-categorie')
));



//Ajout du champs "Image à la Une" dans les articles


function wp_base_theme_theme_setup(){

    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_base_theme_theme_setup' );


//Ajout des widget

function wp_base_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'bloc_footer_1', 'wp-theme-base-translate' ),
        'id'            => 'bloc_footer_1',
        'description'   => __( 'bloc footer avec contact', 'wp-theme-base-translate' ),
    ) );
}

//Ajout des 'options custom field'

add_action( 'widgets_init', 'wp_base_theme_widgets_init' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
}

//Instanciation des traductions

add_action( 'after_setup_theme', 'pdw_theme_setup' );

function pdw_theme_setup(){
    load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
}

