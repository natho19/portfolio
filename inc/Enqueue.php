<?php

function tr_load_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-mobile', get_template_directory_uri() . '/assets/js/jquery.mobile.custom.min.js', array('jquery'), '', true);
    wp_enqueue_script('tera-slider', get_template_directory_uri() . '/assets/js/tera-slider.min.js', array('jquery'), '', true);
    wp_enqueue_script('tera-lightbox', get_template_directory_uri() . '/assets/js/tera-lightbox.min.js', array('jquery'), '', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-placeholder', get_template_directory_uri() . '/assets/js/jquery.placeholder.min.js', array('jquery'), '', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('functions', get_template_directory_uri() . '/assets/js/functions.min.js', array('jquery'), '', true);
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.min.js', true);
    wp_enqueue_script('respond', get_template_directory_uri() . '/assets/js/respond.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'tr_load_scripts');