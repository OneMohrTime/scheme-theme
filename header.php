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

<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open(); ?>
	<div id="container" class="o-site -<?php if (is_single()): ?>single<?php else : ?>default<?php endif; ?>">

		<header id="header" class="o-site__header">

			<a class="c-skip-link" href="#content"><?php _e( 'Skip to content', 'highstarter'); ?></a>

			<button class="c-button -toggle" id="menu_toggle" type="button">
				<span class="menu-grid open"></span>
			</button>

			<figure id="logo" class="c-logo -branding">
				<a href="{{ site.link }}" class="c-logo__link">
					<?php highstarter_the_custom_logo(); ?>
				</a>
			</figure>

			<?php get_template_part('template-parts/header/navigation');?>
			<?php //get_template_part('template-parts/header/site-branding');?>
		</header>

		<main class="o-main">
