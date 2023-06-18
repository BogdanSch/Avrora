<?php
function avrora_enqueue_scripts()
{
    $version = AVRORA_DEV_MODE ? time() : false;
    $url = get_theme_file_uri();

    //Fonts
    wp_register_style("avrora_notosans_bold", $url."/assets/dist/fonts/NotoSans-Bold.woff2", [], $version);
    wp_register_style("avrora_notosans_regular", $url."/assets/dist/fonts/NotoSans-Regular.woff2", [], $version);
    wp_register_style("avrora_sourcesanspro_bold", $url."/assets/dist/fonts/SourceSansPro-Bold.woff2", [], $version);
    wp_register_style("avrora_sourcesanspro_regular", $url."/assets/dist/fonts/SourceSansPro-Regular.woff2", [], $version);
    //Styles
    wp_register_style("avrora_main_css", $url."/assets/dist/css/style.css", [], $version);
    //Scripts
    wp_register_script("avrora_main_js", $url."/assets/dist/js/script.js", [], $version);
    wp_register_script("avrora_nice_select", $url."/assets/dist/js/nice-select.min.js", [], $version);
    wp_register_script("avrora_magnific_popup", $url."/assets/dist/js/magnific-popup.min.js", [], $version);
    //Apply
    wp_enqueue_style("avrora_notosans_bold");
    wp_enqueue_style("avrora_notosans_regular");
    wp_enqueue_style("avrora_sourcesanspro_bold");
    wp_enqueue_style("avrora_sourcesanspro_regular");
    wp_enqueue_style("avrora_main_css");
    wp_enqueue_script("avrora_main_js");
    wp_enqueue_script("avrora_nice_select");
    wp_enqueue_script("avrora_magnific_popup");
}