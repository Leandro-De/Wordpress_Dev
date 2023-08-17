<?php
    // El loop permite navegar a traves de las paginas consultadon la BD.
    while(have_posts()): the_post(); 
    the_title('<h1 class="text-primary text-center ">','</h1>');
    the_post_thumbnail();
    ?>

    <div class="meta-info">
        <p class="meta">
            <span>Por: </span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                <?php echo get_the_author_meta('display_name'); ?>
            </a>
        </p>
        <p class="meta">
            <span>Fecha: </span>
            <?php the_time(get_option('date_format')); ?>
        </p>
    </div>
    <?php
    the_content();
    endwhile;
