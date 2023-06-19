<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Avrora
 */

get_header(); ?>

    <section class="content inside error404 no-results not-found">
        <div class="wrap">
            <h1><?php _e( 'Not found', 'avrora' ); ?></h1>
            <p><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'avrora' ); ?></p>
        </div>
    </section>

<?php get_footer(); ?>