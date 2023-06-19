<?php

if (!function_exists('optionsframework_init')) {
    define('OPTIONS_FRAMEWORK_DIRECTORY', esc_url(get_template_directory_uri() . '/inc/'));
    require(get_template_directory() . '/inc/options-framework.php');
}

if (!function_exists('avrora_setup')) :
    function avrora_setup()
    {
        if ( is_page_template( 'page.php' ) || is_attachment()) {
            global $content_width;
            $content_width = 940;
        }
        register_nav_menu('primary', __('Top Menu', "avrora"));
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-background');
        $custom_header_support = array(
            'default-text-color' => '000',
            'flex-height' => true,
        );
        set_post_thumbnail_size(150, 150, true);
        add_image_size('small-home', 282, 187);

    }
endif;
add_action('after_setup_theme', 'avrora_setup');

if ( ! function_exists( 'avrora_paginate_page' ) ) :
    function avrora_paginate_page() {
        wp_link_pages( array( 'before' => '<div class="pagination">', 'after' => '</div><div class="clear"></div>', 'link_before' => '<span class="current_pag">','link_after' => '</span>' ) );
    }
endif;

function avrora_load_fonts()
{
    wp_register_style('oswald', '//fonts.googleapis.com/css?family=Oswald:300,400,700');
    wp_enqueue_style('oswald');

    wp_register_style('lato', '//fonts.googleapis.com/css?family=Oswaldo');
    wp_enqueue_style('lato');
}

add_action('wp_print_styles', 'avrora_load_fonts');

if (!function_exists('avrora_of_register_js')) :
    function avrora_of_register_js()
    {
        wp_enqueue_script('support', esc_url(get_template_directory_uri() . '/js/support.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('jquery.flexslider', esc_url(get_template_directory_uri() . '/js/jquery.flexslider.js'), array('jquery'), '1.0', true);
        wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
        wp_enqueue_style('flexslider.css', get_stylesheet_directory_uri() . '/flexslider.css');
        wp_enqueue_style('mediaqueries.css', get_stylesheet_directory_uri() . '/mediaqueries.css');
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
endif;
add_action('wp_enqueue_scripts', 'avrora_of_register_js');

function avrora_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed())
        return $title;

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Page %s', 'avrora'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'avrora_wp_title', 10, 2);

if (!function_exists('avrora_widgets_init')) :
    function avrora_widgets_init()
    {
        register_sidebar(array(
            'name' => __('Blog', 'avrora'),
            'id' => 'blog',
            'description' => __('Blog widget area', 'avrora'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3><div class="boxtwosep"></div>',
        ));

        register_sidebar(array(
            'name' => __('Contact', 'avrora'),
            'id' => 'contact',
            'description' => __('Contact widget area', 'avrora'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3><div class="boxtwosep"></div>',
        ));

        register_sidebar(array(
            'name' => __('Page', 'avrora'),
            'id' => 'page',
            'description' => __('Page widget area', 'avrora'),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'name' => __('Footer', 'avrora'),
            'id' => 'footer',
            'description' => __('Footer widget area', 'avrora'),
            'before_widget' => '<div class="box one">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
    }
endif;
add_action('widgets_init', 'avrora_widgets_init');

if (!function_exists('avrora_credits')) :
    function avrora_credits()
    {
        $text = 'Theme created by <a href="' . esc_url('http://wpmodern.com/') . '">WPModern</a>. Powered by <a href="' . esc_url('http://wordpress.org/') . '">WordPress.org</a>';
        echo apply_filters('avrora_credits_text', $text);
    }
endif;
add_action('avrora_display_credits', 'avrora_credits');

if (!function_exists('avrora_content_nav')) :
    function avrora_content_nav($html_id)
    {
        global $wp_query;

        $html_id = esc_attr($html_id);

        if ($wp_query->max_num_pages > 1) : ?>
            <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
                <div
                    class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'avrora')); ?></div>
                <div
                    class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'avrora')); ?></div>
            </nav><!-- #<?php echo $html_id; ?> .navigation -->
        <?php endif;
    }
endif;
?>
