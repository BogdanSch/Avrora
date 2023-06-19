<?php
/**
 *
 * Description: Front Page Template
 *
 * @package Avrorat
 */

get_header();
if ( have_posts() ) :
    if ( 'page' == get_option( 'show_on_front' ) ) {
?>

    <section class="welcome-box">
        <div class="wrap">
            <div class="content">
                <div class="home-about-section">
                    <?php _e( '<h1 class="title">Hello we are happy to recommend you the <span>Avrora</span> wordpress theme</h1>
                    <p>Our theme is fully responsive and very easy to use</p>', "avrora" ); ?>
                </div>
                <?php if ((of_get_option('slide1') <> '')||(of_get_option('slide2') <> '')||(of_get_option('slide3') <> '')) { ?>
                    <div class="flexslider">
                        <ul class="slides">
                            <?php if (of_get_option('slide1') <> '') : ?>
                                <li>
                                    <img src="<?php echo of_get_option('slide1'); ?>" alt="" />
                                </li>
                            <?php endif; ?>
                            <?php if (of_get_option('slide2') <> '') : ?>
                                <li>
                                    <img src="<?php echo of_get_option('slide2'); ?>" alt="" />
                                </li>
                            <?php endif; ?>
                            <?php if (of_get_option('slide3') <> '') : ?>
                                <li>
                                    <img src="<?php echo of_get_option('slide3'); ?>" alt="" />
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" />
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg" />
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" />
                            </li>
                        </ul>
                    </div>
                <?php } ?>
                <?php if (of_get_option('home_content', 'no entry') == 1) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="home-all-content"><?php the_content(); ?></div>
                    <?php endwhile; // end of the loop. ?>
                <?php endif; ?>
                <?php get_template_part('content', 'home'); ?>
            </div>
        </div>
    </section>

    <?php } else { ?>
        <section class="content inside post-cont">
            <div class="wrap">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'posts'); ?>
                <?php endwhile; // end of the loop. ?>
                <?php comments_template(); ?>
            </div>
        </section>
    <?php }
endif;
get_footer(); ?>