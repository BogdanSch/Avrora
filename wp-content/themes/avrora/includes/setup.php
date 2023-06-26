<?php
function avrora_setup_theme()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Primary Menu', 'avrora'));
    add_theme_support('custom-logo', [
        'flex-height' => true,
        'flex-width' => true,
    ]);
}