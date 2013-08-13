<?php

function create_post_type() {
	register_post_type( 'un_events',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
		'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'events')
		)
	);
}

add_action( 'init', 'create_post_type' );