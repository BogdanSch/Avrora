<?php
/**
 * The template for displaying all pages.
 *
 * @package Avrora
 */
get_header(); ?>

    <section class="content inside post-cont">
        <div class="wrap">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', 'page'); ?>
            <?php endwhile; // end of the loop. ?>
            <?php comments_template(); ?>
        </div>
    </section>

<?php get_footer(); ?>
