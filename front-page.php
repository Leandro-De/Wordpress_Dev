<?php
    get_header();
?>
    <section class="bienvenida seccion container text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_bienvenida'); ?>
        </h2>
        <p>
            <?php the_field('texto_bienvenida'); ?>
        </p>
    </section>

    <section class="areas">
        <div class="area">
            <?php 
                $area1 = get_field('area_1');
            ?>
            <img src="<?php echo $area1['imagen']['sizes']['medium_large'] ?>" alt="img area">
            <p><?php echo $area1['texto']; ?></p>
        </div>

        <div class="area">
            <?php 
                $area2 = get_field('area_2');
            ?>
            <img src="<?php echo $area2['imagen']['sizes']['medium_large'] ?>" alt="img area">
            <p><?php echo $area2['texto']; ?></p>
        </div>

        <div class="area">
            <?php 
                $area3 = get_field('area_3');
            ?>
            <img src="<?php echo $area3['imagen']['sizes']['medium_large'] ?>" alt="img area">
            <p><?php echo $area3['texto']; ?></p>
        </div>

        <div class="area">
            <?php 
                $area4 = get_field('area_4');
            ?>
            <img src="<?php echo $area4['imagen']['sizes']['medium_large'] ?>" alt="img area">
            <p><?php echo $area4['texto']; ?></p>
        </div>
    </section>

    <main class="container seccion">       
    </main>
<?php
    get_footer();
?>

