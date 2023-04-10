<?php
namespace NESTED;

class Schema {
	public function __construct() {
		global $wpdb;
		$wpdb->nested = $wpdb->prefix . 'nested';
		$this->create_table();
	}

	public function create_table() {
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		global $wpdb;

		// Orders table.
		$sql = "
			CREATE TABLE $wpdb->nested (
				`id` bigint(20) unsigned NOT NULL auto_increment,
				`nested_id` bigint(20),
				`parent_id` bigint(20),
				`left_key` bigint(20),
				`right_key` bigint(20),
				`name` varchar(255),
				PRIMARY KEY  (`id`)
			);
		";

		dbDelta( $sql );
	}
}

