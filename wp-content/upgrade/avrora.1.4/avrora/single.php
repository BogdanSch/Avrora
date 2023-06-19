<?php
/**
 * The template for displaying single post
 *
 * @package Avrora
 */
get_header(); ?>
<section class="content inside">
    <div class="wrap">
        <div class="left-part">
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="thumbs">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php } ?>


                    <div class="page-title"><h1><?php the_title(); ?></h1></div>
                    <p class="meta">
                        <span class="left"><strong><?php _e('Date: ', 'avrora'); ?></strong> <?php the_time(get_option('date_format')); ?></span>
                        <span class="left"><strong><?php _e('Posted by: ', 'avrora'); ?></strong> <?php echo get_the_author(); ?></span>
                        <span class="left tags"<strong><?php _e('In: ', 'avrora'); ?></strong> <?php the_category(', ') ?></span>
                    </p>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; // end of the loop. ?>

            <p><?php posts_nav_link(); ?></p>
            <?php avrora_paginate_page(); ?>
            <?php comments_template(); ?>
        </div>
        <div class="right-part">
            <?php dynamic_sidebar( 'blog' ); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
