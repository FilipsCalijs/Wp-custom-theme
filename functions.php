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

function followfilip_register_scripts() {
    $version = wp_get_theme()->( "Version");
    // Enqueue main theme stylesheet
    wp_enqueue_style('followfilip-style', get_template_directory_uri() . "/style.css", array(), $version, "all");

    // Enqueue Bootstrap
    wp_enqueue_style('followfilip-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");

    // Enqueue Font Awesome
    wp_enqueue_style('followfilip-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action('wp_enqueue_scripts', 'followfilip_register_scripts');

function followfilip_register_scripts() {
    wp_enqueue_scripts('followfilip-bootstrap', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.2.1", true);
    wp_enqueue_scripts('followfilip-bootstrap', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "3.2.1", true);
    wp_enqueue_scripts('followfilip-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "3.2.1", true);
    wp_enqueue_scripts('followfilip-bootstrap', get_template_directory_uri()."/assets/js/main.js", array(), "3.2.1", true);
}

add_action('wp_enqueue_scripts', 'followfilip_register_scripts');

?>
