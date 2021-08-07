<?php
acf_add_options_page(array(
	'page_title'	=> 'Pyramid Scheme: Page Settings',
	'menu_title' 	=> 'Global Settings',
	'menu_slug' 	=> 'tyrannosaurus-settings',
	'capability'	=> 'edit_posts',
	'redirect'		=> false
));

acf_add_options_sub_page(array(
	'page_title'	=> 'Pyramid Scheme: Weekly Specials',
	'menu_title' 	=> 'Weekly Specials',
	'parent_slug'	=> 'tyrannosaurus-settings',
));

acf_add_options_sub_page(array(
	'page_title'	=> 'Pyramid Scheme: Footer',
	'menu_title' 	=> 'Footer',
	'parent_slug'	=> 'tyrannosaurus-settings',
));