<?php
    // El loop permite navegar a traves de las paginas consultadon la BD.
    while(have_posts()): the_post(); 
    the_title('<h1 class="text-primary text-center ">','</h1>');
    the_post_thumbnail();
    
        $hora_inicio = get_field('hora_inicio');
        $hora_fin = get_field('hora_fin');
            ?>
        <p class="informacion-clase">
            <?php the_field('dias_clase'); ?> - 
            <?php echo $hora_inicio . " a " . $hora_fin; ?>
        </p>

        <?php
    the_content();
    endwhile;
