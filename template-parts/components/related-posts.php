<ul class="c-related-pages">
	<?php // Insert menu items through WP admin
		wp_nav_menu(
			array(
				'theme_location' => 'featured-pages',
				'menu_class' => 'c-menu',
				'container' => '',
			)
		);
	?>
</ul>
