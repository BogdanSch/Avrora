<?php
function avrora_customize_header_register($wp_customize)
{
    $wp_customize->add_section(
        'hero_section',
        [
            'title' => __('Hero Section', 'avrora'),
            'priority' => 30,
            'active_callback' => '__return_true',
            'description' => __('Edit the Hero Section content', 'avrora'),
            'add_edit_link' => true,
        ]
    );

    $wp_customize->add_setting(
        'hero_title',
        [
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]
    );
    $wp_customize->add_control(
        'hero_title',
        [
            'label' => __('Hero Title', 'avrora'),
            'section' => 'hero_section',
            'type' => 'text',
        ]
    );

    $wp_customize->add_setting(
        'hero_description',
        [
            'default' => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        ]
    );
    $wp_customize->add_control(
        'hero_description',
        [
            'label' => __('Hero Description', 'avrora'),
            'section' => 'hero_section',
            'type' => 'textarea',
        ]
    );

    $wp_customize->add_setting(
        'hero_button_text',
        [
            'default' => 'Post vacancy',
            'sanitize_callback' => 'sanitize_text_field',
        ]
    );
    $wp_customize->add_control(
        'hero_button_text',
        [
            'label' => __('Button Text', 'avrora'),
            'section' => 'hero_section',
            'type' => 'text',
        ]
    );
    $wp_customize->add_setting(
        'hero_button_link',
        [
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]
    );
    $wp_customize->add_control(
        'hero_button_link',
        [
            'label' => __('Button Link', 'avrora'),
            'section' => 'hero_section',
            'type' => 'text',
        ]
    );

    $wp_customize->add_setting(
        'hero_image',
        [
            'default' => get_template_directory_uri() . '/assets/dist/assets/images/svg/hero-img.svg',
            'sanitize_callback' => 'esc_url_raw',
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_image',
            [
                'label' => __('Hero Image', 'avrora'),
                'section' => 'hero_section',
                'settings' => 'hero_image',
            ]
        )
    );
}