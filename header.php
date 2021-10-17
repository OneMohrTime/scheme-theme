<?php
/**
 * The header for the Highstarter theme
 *
 * This is the template that displays all of the <header> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Highstarter
 *
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>

<html <?php language_attributes();?> class="-no-js -is-loading">
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<?php // TODO: move to funtions.php ?>
	<!-- Webfonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open(); ?>
	<div id="container" class="o-container -<?php if (is_single()): ?>single<?php else : ?>default<?php endif; ?>">

		<header id="header" class="o-header">

			<a class="c-skip-link" href="#a11y"><?php _e( 'Open Skip Nav', 'highstarter'); ?></a>

			<div class="c-skip-nav" id="a11y">
				<a class="c-skip-link" href="#content"><?php _e( 'Skip to content', 'highstarter'); ?></a>
				<a class="c-skip-link" href="#footer"><?php _e( 'Skip to footer', 'highstarter'); ?></a>
			</div>

			<button class="o-header__hamburger c-button -toggle" id="menu_toggle" type="button">
				<span class="menu-label">Menu</span>
				<span class="menu-grid open"></span>
			</button>

			<figure id="logo" class="c-logo -branding">
				<?php highstarter_the_custom_logo(); ?>
			</figure>

			<?php get_template_part('template-parts/header/navigation');?>
			<?php //get_template_part('template-parts/header/site-branding');?>

			<?php
			$isDarkMode = get_theme_mod('enable_dark_mode', 1);
			if ($isDarkMode) : ?>
			<button class="wpnm-button">
				Mode
				<div class="wpnm-button-inner-left"></div>
				<div class="wpnm-button-inner"></div>
			</button>
			<?php endif; ?>
		</header>

		<main class="o-main">
