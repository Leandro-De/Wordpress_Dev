<?php

function gympage_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gympage')
    ));
}

add_action('init', 'gympage_menus');