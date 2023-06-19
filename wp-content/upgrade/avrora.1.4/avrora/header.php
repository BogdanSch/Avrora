<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <section class="content">
 *
 * @package Avrora

 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( of_get_option('fav_icon') ) { ?>
        <link rel="shortcut icon" href="<?php echo of_get_option('fav_icon'); ?>">
    <?php } ?>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="social">
    <div class="wrap">
        <ul class="contact-us">
            <?php if ( of_get_option('tell') ) { ?><li><span class="phone"><?php echo of_get_option('tell'); ?></span></li><?php } ?>
            <?php if ( of_get_option('email') ) { ?><li><a href="mailto:<?php echo of_get_option('email'); ?>" class="mail"><?php echo of_get_option('email'); ?></a></li><?php } ?>
        </ul>
        <div class="search-field"> <?php get_search_form(); ?></div>
        <div class="soc-cover">
            <?php if ( of_get_option('soc4') ) { ?><a href="<?php echo of_get_option('soc4'); ?>" target="_blank" class="soc linkedin">Linkedin</a><?php } ?>
            <?php if ( of_get_option('soc3') ) { ?><a href="<?php echo of_get_option('soc3'); ?>" target="_blank" class="soc google">Google+</a><?php } ?>
            <?php if ( of_get_option('soc2') ) { ?><a href="<?php echo of_get_option('soc2'); ?>" target="_blank" class="soc twitter">Twitter</a><?php } ?>
            <?php if ( of_get_option('soc1') ) { ?><a href="<?php echo of_get_option('soc1'); ?>" target="_blank" class="soc facebook">Facebook</a><?php } ?>
        </div>

    </div>
</div>
<header class="header">
    <div class="wrap">
        <div class="header-wrap">
            <?php if ( of_get_option('logo_image') ) { ?>
                <a  href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo of_get_option('logo_image'); ?>" /></a>
            <?php } else {  ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><h1><span class="logo-name"><?php bloginfo('name'); ?></span><span class="logo-desc"><?php bloginfo('description'); ?></span></h1></a>
            <?php } ?>

            <?php
            $avrora_args = array(
                'theme_location'  => 'primary',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => 'main-menu',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'            => ''
            );
            wp_nav_menu( $avrora_args );
            ?>
        </div>
    </div>
</header>
