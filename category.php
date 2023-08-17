<?php
get_header();
?>
<main class="seccion container">
    <?php  
        $categoria = get_queried_object();
    ?>
    <h2 class="text-primary text-center">Categoria: <?php echo $categoria->name; ?></h2>
    <ul class="listado-grid">
         <?php
        // El loop permite navegar a traves de las paginas consultadon la BD.
        while (have_posts()) : the_post();
            get_template_part('template-parts/blog');
        endwhile;
        ?>
    </ul>
</main>
</body>

</html>