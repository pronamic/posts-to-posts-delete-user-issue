<?php
/**
 * Plugin Name: Posts 2 Posts delete user issue
 */

add_action(
	'p2p_init',
	function() {
		p2p_register_connection_type(
			[
				'name' => 'multiple_authors',
				'from' => 'post',
				'to'   => 'user',
			]
		);
	}
);

add_action(
	'pre_get_users',
	function( $query ) {
		if ( 'admin_box' === $query->get( 'p2p:context' ) ) {
			$query->set( 'fields', [ 'id', 'display_name' ] );
		}
	}
);
