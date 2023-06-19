<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Avrora
 */
?>
<footer class="footer">
    <div class="bottom">
        <div class="wrap">
            <?php if (is_active_sidebar('footer')) {
                dynamic_sidebar('footer');
            } else {
                ?>
                <div class="box one">
                    <h4><?php _e( 'Footer Widget', "avrora" ); ?></h4>
                    <p><?php _e( 'Replace this widget content by going to <span style="float: none">Appearance -> Widgets</span> and dragging
                        widgets into Footer.', "avrora" ); ?></p>
                </div>
                <div class="box one">
                    <h4><?php _e( 'Pages', "avrora" ); ?></h4>
                    <ul><?php wp_list_pages('title_li=&depth=1'); ?></ul>
                </div>
                <div class="box one">
                    <h4><?php _e( 'Recent Posts', "avrora" ); ?></h4>
                    <ul>
                        <?php wp_get_archives('type=postbypost&limit=7'); ?>
                    </ul>
                </div>
                <div class="box one">
                    <h4><?php _e( 'Tag Cloud', "avrora" ); ?></h4>
                    <div class="tagcloud">
                        <?php wp_tag_cloud('number=10&'); ?>
                    </div>
                    <h4><?php _e( 'Categories', "avrora" ); ?></h4>
                    <ul>
                        <?php wp_list_categories('title_li=&number=5'); ?>
                    </ul>
                </div>
            <?php } ?>
            <p class="cred"><?php do_action('avrora_display_credits'); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>     