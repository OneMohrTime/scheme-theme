<?php
/**
 * The template for displaying a page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Highstarter
 *
 * @since 1.0
 * @version 1.0
 * @copyright  Copyright (c) 2020, Atanas Yonkov
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

get_header(); ?>

<div class="o-main__home" id="content">

	<figure class="o-main__logo -mobile-only">
		<?php highstarter_the_custom_logo(); ?>
	</figure>

	<header class="o-main__header">
		<h1 class="c-title">The Pyramid Scheme <span class="c-title--small">in Grand Rapids, MI</span></h1>
		<span class="c-tag">25 Pinball Machines</span>
		<span class="c-tag">Cheap drinks</span>
		<span class="c-tag">Great Jukebox</span>
	</header>

	<section class="c-featured">

		<h2 class="-is-hidden">Featured Events</h2>

		<div class="swiper" data-module-swiper>
			<div class="swiper-wrapper">

			<?php
			// Ensure the global $post variable is in scope
			global $post;

			// Grab today's date
			$today = date('Y-m-d H');

			// Retrieve the next 25 upcoming events
			$events = tribe_get_events( [
				'posts_per_page' => 4,
				'start_date'     => $today,
				'featured'       => true
			] );

			// Loop through the events: set up each one as
			// the current post then use template tags to
			// display the title and content
			foreach ( $events as $post ) {
				setup_postdata( $post );

				// This time, let's throw in an event-specific
				// template tag to show the date after the title!
				echo '<figure class="c-featured-event -' . $post->post_type . ' swiper-slide">';
				echo '<a href="' . get_post_permalink() . '" class="c-featured-event__image" tabindex="-1">';
				// Event Poster
				echo the_post_thumbnail();
				echo '<figcaption class="c-featured-event__caption">';
				echo '<h3 class="c-featured-event__title">' . $post->post_title . '</h3>';
				echo '<ul class="c-featured-event__list">';
				// Event Cost
				echo '<li class="c-featured-event__list--item cost">Costs <span>' . tribe_get_formatted_cost() . '</span></li>';
				// Event Time
				echo '<li class="c-featured-event__list--item time">Doors @ <span>' . tribe_get_start_time() . '</span></li>';
				// Event Tickets Link
				// echo '<li class="featured-event__list--item time"><span><a href="' . get_field('ticketweb_event') . '" target="_blank">Tickets</a></span></li>';
				echo '</ul>';
				echo '</figcaption>';
				// echo ' ' . tribe_get_start_date( $post ) . ' ';
				echo '</a>';
				echo '</figure>';
			}

			// Reset global post variable. After this point, we are back to the Main Query object
			wp_reset_postdata(); ?>

			</div>
		</div>

		<div class="swiper-pagination"></div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<span class="c-featured__label">Swipe for more events</span>

	</section>

	<div class="c-intro -wysiwyg">
		<?php the_content(); ?>
	</div>

	<h2 class="c-headline">Upcoming Events</h2>

	<ul class="c-event-list">
		<?php
		global $post;

		$today  = date('Y-m-d H');
		$events = tribe_get_events( [
			'posts_per_page' => 25,
			'start_date'     => $today
		] );

		foreach ( $events as $post ) {
			setup_postdata( $post );

			echo '<li class="c-event-list__item">';
			echo '<article class="c-event">';
			echo '<h3 class="c-event__headline">' . $post->post_title . ' <span>(' . tribe_get_start_date($post, false, 'm/d') . ')</span></h3>';
			echo '<div class="c-event__cost">' . tribe_get_cost($post, true) . '</div>';
			echo tribe_meta_event_tags(' ');
			echo '<a href="' . get_field('ticketweb_event') . '" class="c-event__tickets" href="' . $post->post_title . '">Buy Tickets</a>';
			echo '<a href="' . get_permalink($post) . '" class="c-event__link">View Event</a>';
			echo '</article>';
			echo '</li>';
		}
		wp_reset_postdata(); ?>
	</ul>

	<nav class="c-button-group">
		<a href="/events" class="c-button -primary -wide">See All Upcoming Shows</a>
		<a href="/photos" class="c-button -default">Past Shows</a>
		<a href="/faq" class="c-button -default">Event FAQ</a>
	</nav>

	<?php // Insert menu items through WP admin
		wp_nav_menu(
			array(
				'theme_location' => 'featured-pages',
				'menu_class' => 'c-menu -featured-pages',
				'container' => '',
			)
		);
	?>

</div>

<?php
// get_sidebar();
get_footer();
