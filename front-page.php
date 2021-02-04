<?php
get_header();
?>

<?php the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<h3><?php the_content();?></h3>

<a href="blog">Little Boy</a>

<?php
    get_footer();
?>