<?php get_header(); ?>
<section class="content">
    <div class="container">
        <div class="wrapper">
            <?php
            if (is_home() && !is_front_page()) {
                while (have_posts()) {
                    the_post();
                    the_title('<h2>', '</h2>');
                    the_content();
                }
            } else {
                the_post();
                the_content();
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>