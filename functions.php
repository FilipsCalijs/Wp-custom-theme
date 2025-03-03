<?php

function followfilip_register_styles() {
    $version = wp_get_theme()->( "Version");
    // Enqueue main theme stylesheet
    wp_enqueue_style('followfilip-style', get_template_directory_uri() . "/style.css", array(), $version, "all");

    // Enqueue Bootstrap
    wp_enqueue_style('followfilip-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");

    // Enqueue Font Awesome
    wp_enqueue_style('followfilip-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action('wp_enqueue_scripts', 'followfilip_register_styles');

?>
