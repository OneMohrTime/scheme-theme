<?php

$context = Timber::context();

$timber_post     = new Timber\Post();
$post_id         = $post->ID;
$context['post'] = $timber_post;

$startDate = current_time('Y-m-d H');

$features = new Timber\PostQuery([
	'post_type'      => 'tribe_events',
	'order'          => 'ASC',
	'eventDisplay'   => 'custom',
	'start_date'     => $startDate,
	'posts_per_page' => 4,
	'featured'       => true
]);
$context['featured'] = $features;

$args = [
	'post_type'      => 'tribe_events',
	'order'          => 'ASC',
	'eventDisplay'   => 'custom',
	'start_date'     => $startDate,
	'posts_per_page' => 25,
];
$context['posts'] = new Timber\PostQuery($args);

$context['cost'] = tribe_get_cost($post_id, true);

Timber::render( '_layouts/front-page.twig', $context );
