<?php
// Setup
const AVRORA_DEV_MODE = true;
//Includes
include get_theme_file_path("includes/enqueue.php");
include get_theme_file_path("includes/setup.php");
include get_theme_file_path("includes/widgets.php");
include get_theme_file_path("includes/avrora-nav-header-walker.php");
//Hooks
add_action('wp_enqueue_scripts', 'avrora_enqueue_scripts');
add_action('after_setup_theme', 'avrora_setup_theme');
add_action('widgets_init', 'avrora_widgets');