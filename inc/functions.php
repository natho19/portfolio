<?php

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Disable admin bar for all users
add_filter('show_admin_bar', '__return_false');

// Image path
define('IMG_URL', get_template_directory_uri() . '/assets/img');

// Theme support
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_setup');

// Change labels and enable has_archive for post
add_action('init', function() {
    $post_type = 'post';
    $post_type_object = get_post_type_object($post_type);

    // Change labels
    $labels = $post_type_object->labels;
    $labels->name = 'Projets';
    $labels->singular_name = 'Projet';

    // Enable has_archive
    $post_type_object->has_archive = 'true';
    register_post_type($post_type, $post_type_object);
});

// Get archive title without prefix
function my_theme_archive_title($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_post_type_archive()) {
        $title = 'Tous mes projets';
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'my_theme_archive_title');

// Disable paragraph to input in wpcf7
add_filter('wpcf7_autop_or_not', '__return_false');

// Mailtrap for wpcf7
function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '0c024a42f5cc91';
    $phpmailer->Password = '8fee38663d3fc1';
}
add_action('phpmailer_init', 'mailtrap');