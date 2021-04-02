<?php
// Setup
define('DEV_MODE', true);

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/nav-walker.php'));

// Hooks
add_action('wp_enqueue_scripts', 'wws_enqueue');
add_action('after_setup_theme', 'setup_theme');

// Shortcodes
