<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @subpackage Avrora
 * @since Avrora 1.0
 */
$site_url = get_site_url();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BoonJobs</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<main class="main">
		<header class="header">
			<div class="container">
				<div class="wrapper flex">
					<?php if (has_custom_logo()) { ?>
						<a href="<?php _e($site_url) ?>" class="logo">
							<?php the_custom_logo(); ?>
						</a>
					<?php } ?>
					<nav class="flex">
						<?php
						if (has_nav_menu('primary')) {
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'depth' => 2,
									'container' => false,
									'menu_class' => 'header-menu flex',
									'fallback_cb' => false,
									'walker' => new Avrora_Nav_Header_Walker(),
								)
							);
						}
						?>
						<?php if (!is_user_logged_in()) { ?>
							<ul class="header-autorize flex">
								<li><a href="<?php _e(wp_login_url()); ?>">Sign in</a></li>
								<li><a href="<?php _e(wp_registration_url()); ?>">Sign up</a></li>
							</ul>
						<?php } ?>
					</nav>
					<a href="#" class="button-burger">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div>
		</header>
		<?php if (is_front_page()) { ?>
			<section class="hero">
				<div class="container">
					<div class="wrapper flex">
						<div class="column flex">
							<h1>
								<?php echo get_theme_mod('hero_title', 'Find the employee you need right now'); ?>
							</h1>
							<p>
								<?php echo get_theme_mod('hero_description', 'Elementum magna ac tempor, facilisis tristique mauris. Et penatibus sit sed in ante in ultrices. Senectus aliquam dictum eleifend mi pharetra morbi.'); ?>
							</p>
							<a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#')); ?>"
								class="button button-primary">
								<?php echo esc_html(get_theme_mod('hero_button_text', 'Post vacancy')); ?>
							</a>
						</div>
						<div class="column flex">
							<img src="<?php echo esc_url(get_theme_mod('hero_image', get_template_directory_uri() . '/assets/dist/assets/images/svg/hero-img.svg')); ?>"
								alt="hero-img">
						</div>
					</div>
				</div>
			</section>
		<?php } ?>