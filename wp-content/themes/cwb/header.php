<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cwb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/inc/images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/inc/images/apple-touch-icon.png" />

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc/scripts/lightslider/src/css/lightslider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?=1.00" />

	<!--fonts-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc/fonts/font-awesome/css/font-awesome.min.css" />


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="main-wrapper">
		<div id="header-wrapper">
			<div class="page-width">
				<a href="#" id="main-logo"><img src="<?php the_field('site_logo', 'option'); ?>" alt="" width="" height="" /></a>
				<div class="menu-holder">
					<a href="#" id="menu-button">MENU</a>
					<div id="menu-wrapper">
						<ul class="main-menu left-menu">
							<?php
							if (have_rows('menu_left_side', 'option')) :
								while (have_rows('menu_left_side', 'option')) : the_row();
							?>
									<li><a href="<?php the_sub_field('link', 'option'); ?>"><?php the_sub_field('menu_item', 'option'); ?></a></li>
							<?php
								endwhile;
							endif;
							?>
							<!-- <li><a href="#">DRINKS</a></li>
							<li><a href="#">FOOD</a></li> -->
						</ul>
						<ul class="main-menu right-menu">
							<?php
							if (have_rows('menu_right_side', 'option')) :
								while (have_rows('menu_right_side', 'option')) : the_row();
							?>
									<li><a href="<?php the_sub_field('link', 'option'); ?>"><?php the_sub_field('menu_item', 'option'); ?></a></li>
							<?php
								endwhile;
							endif;
							?>
							<!-- <li><a href="#">MERCH</a></li>
							<li><a href="#"> CONTACT US</a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<!-- <nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'cwb'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav> -->
			<!-- #site-navigation -->
		</div><!--header wrapper end-->