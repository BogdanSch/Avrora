<?php
function avrora_customize_footer_register($wp_customize) {
    $wp_customize->add_section('avrora_footer_section', array(
        'title' => __('Footer', 'avrora'),
        'priority' => 150,
    ));
    // Add the setting for the copyright text
    $wp_customize->add_setting('avrora_copyright_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add the control for the copyright text
    $wp_customize->add_control('avrora_copyright_text', array(
        'type' => 'text',
        'section' => 'avrora_footer_section',
        'label' => __('Copyright Text', 'avrora'),
    ));
}