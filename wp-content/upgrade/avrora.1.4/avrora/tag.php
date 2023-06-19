<?php
/**
 * The template for displaying tag
 *
 *
 * @package Avrora
 */
get_header(); ?>

    <section class="content inside">
        <div class="wrap">
            <div class="left-part">
                <h1><?php printf( __( 'Tag Archives: %s', 'avrora' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
                </h1>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'posts'); ?>
                <?php endwhile; // end of the loop. ?>
                <?php avrora_content_nav('nav-below'); ?>
            </div>
            <div class="right-part">
                <?php dynamic_sidebar('blog'); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>