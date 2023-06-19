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
						<!-- <ul class="header-menu flex">
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Companies</a></li>
							<li><a href="#">Post a Job</a></li>
						</ul> -->
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

						<ul class="header-autorize flex">
							<li><a href="#">Sign in</a></li>
							<li><a href="#">Sign up</a></li>
						</ul>
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
							<h1>Find the employee you need right now</h1>
							<p>Elementum magna ac tempor, facilisis tristique mauris. Et penatibus sit sed in ante in
								ultrices. Senectus aliquam dictum eleifend mi pharetra morbi.</p>
							<a href="#" class="button button-primary">Post vacancy</a>
						</div>
						<div class="column flex">
							<img src="<?php bloginfo('template_directory') ?>/assets/dist/assets/images/svg/hero-img.svg"
								alt="hero-img">
						</div>
					</div>
				</div>
			</section>
		<?php } ?>