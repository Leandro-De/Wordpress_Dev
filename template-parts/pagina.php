<?php
    // El loop permite navegar a traves de las paginas consultadon la BD.
    while(have_posts()): the_post(); 
    the_title('<h1 class="text-primary text-center ">','</h1>');
    the_post_thumbnail();
    the_content();
    endwhile;
