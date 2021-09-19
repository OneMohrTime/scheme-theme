<?php
/**
 * View: List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

$container_classes = [ 'c-event-list__item' ];
$container_classes['-featured'] = $event->featured;

$event_classes = tribe_get_post_class( [ 'c-event' ], $event->ID );
?>
<div <?php tribe_classes( $container_classes ); ?>>

	<article class="c-event" <?php //tribe_classes( $event_classes ) ?>>

		<?php
		$this->template( 'list/event/title', [ 'event' => $event ] );
		$this->template( 'list/event/cost', [ 'event' => $event ] );
		echo tribe_meta_event_tags(' ');
		echo '<a href="' . get_field('ticketweb_event') . '" class="c-event__tickets" href="' . $event->title . '">Buy Tickets</a>';
		echo '<a href="' . get_permalink($event) . '" class="c-event__link">View Event</a>'; ?>

	</article>

</div>
