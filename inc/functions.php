<?php

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Image path
define('TR_IMG_URL', get_template_directory_uri() . '/assets/img');

// Theme support
function fe_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'fe_setup');

// Enable has_archive for post
add_action('init', function() {
    $post_type = 'post';
    $post_type_object = get_post_type_object($post_type);
    $post_type_object->has_archive = 'true';
    register_post_type($post_type, $post_type_object);
});