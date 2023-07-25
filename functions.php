<?php

function gympage_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gympage')
    ));
}

add_action('init', 'gympage_menus');

function gympage_scripts_styles(){
    // Definir que hoja de estilo cargar primero
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gympage_scripts_styles');