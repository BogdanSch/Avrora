<?php
/**
 * Template Name: Left Sidebar
 *
 * Description: Page with left sidebar
 *
 * @package Avrora

 */

get_header(); ?>

    <section class="content inside">
        <div class="wrap">
            <?php while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                } ?>
                <div class="left-part rights">
                    <?php get_template_part('content', 'sidebars'); ?>
                    <?php comments_template(); ?>
                </div>
                <div class="right-part lefts post-cont">
                    <?php if (is_active_sidebar('page')) {
                        dynamic_sidebar('page');
                    } else {
                        ?>
                        <section class="widget">
                            <h3 class="widget-title"><?php _e( 'Pages Widget', "avrora" ); ?></h3>
                            <p><?php _e( 'Replace this widget content by going to <strong>Appearance -> Widgets</strong> and dragging
                        widgets into Page.', "avrora" ); ?></p>
                        </section>
                        <section class="widget">
                            <h3 class="widget-title"><?php _e( 'Pages', "avrora" ); ?></h3>
                            <ul><?php wp_list_pages('title_li=&depth=1'); ?></ul>
                        </section>
                        <section class="widget">
                            <h3 class="widget-title"><?php _e( 'Recent Posts', "avrora" ); ?></h3>
                            <ul>
                                <?php wp_get_archives('type=postbypost&limit=7'); ?>
                            </ul>
                        </section>
                        <section class="widget">
                            <h3 class="widget-title"><?php _e( 'Tag Cloud', "avrora" ); ?></h3>
                            <div class="tagcloud">
                                <?php wp_tag_cloud('number=10&'); ?>
                            </div>
                        </section>
                    <?php } ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </section>

<?php get_footer(); ?>