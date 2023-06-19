<?php
/**
 * The template used for displaying posts
 * @package Avrora
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="post-info">
        <span class="month"><?php the_time('M') ?></span>
        <span class="day"><?php the_time('j') ?></span>
        <span class="year"><?php the_time('Y') ?></span>
    </div>
    <div class="post-right">
        <h2 class="post-titles"><a href="<?php the_permalink() ?>"><?php if (get_the_title($post->ID)) {
                    the_title();
                } else {
                    the_time(get_option('date_format'));
                } ?></a></h2>

        <div class="share_block">
            <span><?php _e('Categories:', 'avrora'); ?></span> <?php the_category(', '); ?>&nbsp; | &nbsp;
            <?php echo get_the_tag_list('<span>Tags: </span>', ', '); ?>
        </div>
        <?php if (has_post_thumbnail() && !post_password_required()) : ?>
            <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>

        <?php the_excerpt(); ?>
        <div class="meta_bar clearfix">
            <div class="more_block">
                <a class="read-more" href="<?php the_permalink() ?>"><?php _e('Read More &raquo;', 'avrora'); ?></a>
            </div>

        </div>

    </div>
</article>