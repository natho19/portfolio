<?php

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Image path
define('TR_IMG_URL', get_template_directory_uri() . '/assets/img');