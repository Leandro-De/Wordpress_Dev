<?php

// includes
require get_template_directory().'/includes/widgets.php';

function gympage_setup(){
    // imagenes destacadas
    add_theme_support('post-thumbnails');

    // titulos para SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gympage_setup');

function gympage_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gympage')
    ));
}

add_action('init', 'gympage_menus');

function gympage_scripts_styles(){
    // Definir que hoja de estilo cargar primero
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(''), '2.11.4');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    // Archivos JS
    //wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.4', true);
}

add_action('wp_enqueue_scripts', 'gympage_scripts_styles');

// Definir Widgets
function gympage_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'gympage_widgets');