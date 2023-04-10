<?php
namespace NESTED;

class TestNested {
	public function __construct() {
		add_action( 'save_post_st_test', [ $this, 'create_table_test' ], 10, 3 );
	}

	public function create_table_test( $post_id, $post, $update ) {
		// if ( $update ) {
		// return;
		// }
		if ( isset( $post->post_status ) && 'auto-draft' == $post->post_status ) {
			return;
		}

		global $wpdb;

		$data = [
			'nested_id' => $post_id,
			'parent_id' => wp_get_post_parent_id( $post_id ),
			'left_key'  => 1,
			'right_key' => 1,
			'name'      => get_the_title( $post_id ),
		];

		$test_id = $wpdb->update(
			$wpdb->nested,
			$data,
			[
				'nested_id' => $post_id,
			]
		);

		if ( ! $test_id ) {
			$wpdb->insert(
				$wpdb->nested,
				$data
			);
		}
	}

	private function get_title( int $post_id = 0 ) {
		return get_the_title( $post_id );
	}
}
