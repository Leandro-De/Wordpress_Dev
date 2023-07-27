<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container barra-navegacion">
            <div class="logo">
                <!--funcion que llama a las imagenes de forma dinamica-->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
            </div>
            <!-- Crear menu dinamico -->
            <?php 
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </header>