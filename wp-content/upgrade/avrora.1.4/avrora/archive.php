<?php
/**
 * The template for displaying Archive
 *
 *
 * @package avrora
 */
get_header(); ?>

    <section class="content inside">
        <div class="wrap">
            <div class="left-part">
                <h1><?php
                    if (is_day()) :
                        printf(__('Daily Archives: %s', 'avrora'), '<span>' . get_the_date() . '</span>');
                    elseif (is_month()) :
                        printf(__('Monthly Archives: %s', 'avrora'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'avrora')) . '</span>');
                    elseif (is_year()) :
                        printf(__('Yearly Archives: %s', 'avrora'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'avrora')) . '</span>');
                    else :
                        _e('Archives', 'avrora');
                    endif;
                    ?>
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