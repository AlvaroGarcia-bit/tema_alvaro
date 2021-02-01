<?php
get_header();
?>
    
    <h1>Una entrada </h1>

    <h1><?php the_title();?></h1>
    <br/>
    <br/>
    Este es el contenido:
    <br/>
    <?php the_content(); ?>

    <?php
        get_footer();
    ?>