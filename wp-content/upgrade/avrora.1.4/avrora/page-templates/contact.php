<?php
/**
 * Template Name: Contact
 *
 * @package Avrora
 */
get_header(); ?>

    <?php get_header(); ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="content inside">
            <div class="wrap">
                <div class="contacts-box">
                    <h1><?php the_title(); ?></h1>

                    <div class="left">
                        <?php the_content(); ?>
                    </div>
                    <div class="rights">
                        <?php dynamic_sidebar('contact'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <?php get_footer(); ?>