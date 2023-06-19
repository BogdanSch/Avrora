<?php
/**
 * The template used for displaying page content in front-page.php,page.php,single.php
 *
 * @package Avrora
 */
?>

<?php if (has_post_thumbnail()) { ?>
    <div class="thumbs">
        <?php the_post_thumbnail('full'); ?>
    </div>
<?php } ?>


    <div class="page-title"><h1><?php the_title(); ?></h1></div>

    <?php the_content(); ?>
