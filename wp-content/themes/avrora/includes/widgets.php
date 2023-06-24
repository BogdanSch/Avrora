<?php
function avrora_widgets()
{
    register_sidebar([
        'name' => __('avrora footer sidebar', 'avrora'),
        'id' => 'avrora_footer_sidebar',
        'description' => __('avrora second Sidebar for creditionals, links etc.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ]);
}