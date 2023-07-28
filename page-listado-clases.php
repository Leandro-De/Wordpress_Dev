<?php
    /*
    * Template Name: Listado de clases
    */
    get_header();
?>

<main class="container seccion">
        <ul class="listado-grid">
            <?php
                $args = array(
                    'post_type' => 'gympage_clases'
                );

                $clases = new WP_Query($args);
                // Iterar sobre los resultados de las clases para mostrar en el front
                while($clases -> have_posts()){
                    $clases -> the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                    </li>
                <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    </main>
<?php
    get_footer();
?>

