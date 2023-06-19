<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

    // This gets the theme name from the stylesheet
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/", "_", strtolower($themename) );

    $optionsframework_settings = get_option( 'optionsframework' );
    $optionsframework_settings['id'] = $themename;
    update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {


    // Pull all the categories into an array
    $options_categories = array();
    $options_categories_obj = get_categories();
    foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
    }
    // Pull all tags into an array
    $options_tags = array();
    $options_tags_obj = get_tags();
    foreach ( $options_tags_obj as $tag ) {
        $options_tags[$tag->term_id] = $tag->name;
    }
    // Pull all the pages into an array
    $options_pages = array();
    $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
    $options_pages[''] = 'Select a page:';
    foreach ($options_pages_obj as $page) {
        $options_pages[$page->ID] = $page->post_title;
    }
    // If using image radio buttons, define a directory path
    $imagepath =  get_template_directory_uri() . '/inc/images/';
    $set_year = date('Y');
    $options = array();


    /* General Settings */

    $options[] = array(
        'name' => __('General Settings', 'options_framework_theme'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Header Logo Image', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'logo_image',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Favicon', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'fav_icon',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Tell. Number', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'tell',
        'type' => 'text');

    $options[] = array(
        'name' => __('Email', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'email',
        'type' => 'text');

    $options[] = array(
        'name' => __('Facebook', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'soc1',
        'type' => 'text');

    $options[] = array(
        'name' => __('Twitter', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'soc2',
        'type' => 'text');

    $options[] = array(
        'name' => __('Google', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'soc3',
        'type' => 'text');

    $options[] = array(
        'name' => __('Linkedin', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'soc4',
        'type' => 'text');

    $options[] = array(
        'name' => __('Home Page', 'options_framework_theme'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Slide 1', 'options_framework_theme'),
        'desc' => __('Recommended image sizes 940X400', 'options_framework_theme'),
        'id' => 'slide1',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Slide 2', 'options_framework_theme'),
        'desc' => __('Recommended image sizes 940X400', 'options_framework_theme'),
        'id' => 'slide2',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Slide 3', 'options_framework_theme'),
        'desc' => __('Recommended image sizes 940X400', 'options_framework_theme'),
        'id' => 'slide3',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Top Box 1 Image', 'options_framework_theme'),
        'desc' => __('Recommended image sizes 254X147', 'options_framework_theme'),
        'id' => 'top_box_1_image',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Top Box 1 Title', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_1_title',
        'type' => 'text');

    $options[] = array(
        'name' => __('Top Box 1 Link', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_1_link',
        'type' => 'text');

    $options[] = array(
        'name' => __('Top Box 1 Content', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_1_content',
        'type' => 'textarea');

    $options[] = array(
        'name' => __('Top Box 2 Image', 'options_framework_theme'),
        'desc' => __('Recommended image sizes 270X180', 'options_framework_theme'),
        'id' => 'top_box_2_image',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Top Box 2 Title', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_2_title',
        'type' => 'text');

    $options[] = array(
        'name' => __('Top Box 2 Link', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_2_link',
        'type' => 'text');

    $options[] = array(
        'name' => __('Top Box 2 Content', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_2_content',
        'type' => 'textarea');

    $options[] = array(
        'name' => __('Top Box 3 Image', 'options_framework_theme'),
        'desc' => __('Recommended image sizes 270X180', 'options_framework_theme'),
        'id' => 'top_box_3_image',
        'type' => 'upload');

    $options[] = array(
        'name' => __('Top Box 3 Title', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_3_title',
        'type' => 'text');

    $options[] = array(
        'name' => __('Top Box 3 Link', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_3_link',
        'type' => 'text');

    $options[] = array(
        'name' => __('Top Box 3 Content', 'options_framework_theme'),
        'desc' => __('', 'options_framework_theme'),
        'id' => 'top_box_3_content',
        'type' => 'textarea');

    $options[] = array(
        'name' => __('Show Home Page Content', 'options_framework_theme'),
        'desc' => __('Choose this option if you want to show  home page content', 'options_framework_theme'),
        'id' => 'home_content',
        'std' => '1',
        'type' => 'checkbox');

    $options[] = array(
        'name' => __('Show Latest Posts', 'options_framework_theme'),
        'desc' => __('Choose this option if you want to show latest posts on home page', 'options_framework_theme'),
        'id' => 'example_checkbox',
        'std' => '1',
        'type' => 'checkbox');




    return $options;
}