<?php get_header(); ?>
    
    <h1>Mi intento de blog  </h1>

<?php

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <h3>Creado por <?php the_author() ?> el <?php the_date()?></h3>
<?php
        the_excerpt();
  }
} else{
    echo "si ves esto, no he tenido la motivación de hacerlo";
}

?>

<?php
        get_footer();
    ?>