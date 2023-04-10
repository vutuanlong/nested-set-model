<?php
namespace NESTED;

class RegisterPostType {
	public function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ] );
	}

	public function register_post_type() {
		$labels = [
			'name'                  => __( 'Tests', 'traveler' ),
			'singular_name'         => __( 'Test', 'traveler' ),
			'menu_name'             => __( 'Tests', 'traveler' ),
			'name_admin_bar'        => __( 'Test', 'traveler' ),
			'add_new'               => __( 'Add New', 'traveler' ),
			'add_new_item'          => __( 'Add New Test', 'traveler' ),
			'new_item'              => __( 'New Test', 'traveler' ),
			'edit_item'             => __( 'Edit Test', 'traveler' ),
			'view_item'             => __( 'View Test', 'traveler' ),
			'all_items'             => __( 'All Tests', 'traveler' ),
			'search_items'          => __( 'Search Tests', 'traveler' ),
			'parent_item_colon'     => __( 'Parent Tests:', 'traveler' ),
			'not_found'             => __( 'No Tests found.', 'traveler' ),
			'not_found_in_trash'    => __( 'No Tests found in Trash.', 'traveler' ),
			'insert_into_item'      => __( 'Insert into Test', 'traveler' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Test', 'traveler' ),
			'featured_image'        => __( 'Feature Image', 'traveler' ),
			'set_featured_image'    => __( 'Set featured image', 'traveler' ),
		];

		$args = [
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => [ 'slug' => 'st_test' ],
			'has_archive'        => true,
			'hierarchical'       => true,
			'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ],
			'menu_icon'          => 'dashicons-building-yl',
			// 'capability_type'    => 'post',
		];

		register_post_type( 'st_test', $args );
	}
}

