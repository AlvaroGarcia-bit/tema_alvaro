<?php
function garciagarcia(){
    wp_enqueue_style('mi-css', get_stylesheet_uri(), array(), '1.0.0');

    if ( is_page('contacto') ) {
        wp_enqueue_style( 'contacto', get_theme_file_uri('/css/page-contacto-styles.css'), array(), '1.0.0');
    }
}

add_action( 'wp_enqueue_scripts', 'garciagarcia');

?>