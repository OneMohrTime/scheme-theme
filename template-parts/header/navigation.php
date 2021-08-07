<?php
/**
 * Template part for displaying the primary navigation menu.
 *
 * @package Highstarter
 *
 * @since 1.0
 * @version 1.0
 * @copyright  Copyright (c) 2020, Atanas Yonkov
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<div class="c-navigation -primary">

	<button class="c-navigation__toggle" id="menu-toggle" role="button" tabindex="0">
		<span></span>
		<span></span>
		<span></span>
	</button>

	<nav class="c-navigation__menu" id="site-navigation">

	<?php // Insert menu items through WP admin
		wp_nav_menu(
			array(
				'theme_location' => 'main-nav',
				'menu_class' => 'c-menu',
				'container' => '',
			)
		);
	?>
	</nav>

</div>
