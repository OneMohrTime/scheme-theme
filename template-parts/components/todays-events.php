<?php

// Ensure the global $post variable is in scope
global $post;

// Today's Events
$todays_eventStart = current_time('Y-m-d H:i:s');
$tomorrow          = new DateTime('tomorrow');
$tomorrow          = $tomorrow->format('Y-m-d H:i:s');
$todays_eventEnd   = $tomorrow;
$todays_events     = tribe_get_events([
	'post_type'      => 'tribe_events',
	'order'          => 'ASC',
	'eventDisplay'   => 'custom',
	'start_date'     => $todays_eventStart,
	'end_date'       => $todays_eventEnd,
	'posts_per_page' => 3
]); ?>

<details class="c-event-bar">
	<summary class="c-event-bar__headline">
		<span class="c-headline">
			Today's Events
		</span>
		<span class="u-date">
			<?php echo date('m/d/Y'); ?>
		</span>
	</summary>
	<div class="c-event-bar__content">
		<?php if(!empty($todays_events)) {
			// Loop through the events: set up each one as
			// the current post then use template tags to
			// display the title and content
			foreach ($todays_events as $post) {
				echo '<p><a href="' . $post->slug . '">' . $post->title . '</a></p>';
			}
		} else {
			echo '<p>No events today. <a href="/events">Find one</a> coming soon!</p>';
		}?>
	</div>
</details>
