<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM</title>
</head>
<body>
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