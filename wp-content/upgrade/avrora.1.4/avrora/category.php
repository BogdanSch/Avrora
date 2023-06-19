<?php
/**
 * The template for displaying Category
 *
 *
 * @package Avrora
 */
get_header(); ?>

    <section class="content inside">
        <div class="wrap">
            <div class="left-part">
                <h1><?php printf( __( 'Category Archives: %s', 'avrora' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'posts'); ?>
                <?php endwhile; // end of the loop. ?>
                <?php avrora_content_nav('nav-below'); ?>
            </div>
            <div class="right-part">
                <?php dynamic_sidebar('page'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>