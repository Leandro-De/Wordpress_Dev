<?php
    get_header();
?>
    <main>
        <?php
        // El loop permite navegar a traves de las paginas consultadon la BD.
            while(have_posts()): the_post(); 
                the_title();
                the_content();
            endwhile;
        ?>
    </main>
</body>
</html>
