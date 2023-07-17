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
