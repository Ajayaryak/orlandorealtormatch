<?php
add_action( 'init', 'testimonial' );
function testimonial() {
	$labels = array(
	'name'               => _x( 'testimonial', 'post type general name', 'your-plugin-textdomain' ),
	'singular_name'      => _x( 'testimonial', 'post type singular name', 'your-plugin-textdomain' ),
	'menu_name'          => _x( 'Testimonial', 'admin menu', 'your-plugin-textdomain' ),
	'name_admin_bar'     => _x( 'testimonial', 'add new on admin bar', 'your-plugin-textdomain' ),
	'add_new'            => _x( 'Add New', 'testimonial', 'your-plugin-textdomain' ),
	'add_new_item'       => __( 'Add New', 'your-plugin-textdomain' ),
	'new_item'           => __( 'New testimonial', 'your-plugin-textdomain' ),
	'edit_item'          => __( 'Edit testimonial', 'your-plugin-textdomain' ),
	'view_item'          => __( 'View testimonial', 'your-plugin-textdomain' ),
	'all_items'          => __( 'All testimonial', 'your-plugin-textdomain' ),
	'search_items'       => __( 'Search testimonial', 'your-plugin-textdomain' ),
	'parent_item_colon'  => __( 'Parent testimonial:', 'your-plugin-textdomain' ),
	'not_found'          => __( 'No testimonial found.', 'your-plugin-textdomain' ),
	'not_found_in_trash' => __( 'No testimonial found in Trash.', 'your-plugin-textdomain' )
);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'client-testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'testimonial', $args );
}

add_action( 'init', 'meet_agents' );
function meet_agents() {
	$labels = array(
	'name'               => _x( 'Agents', 'post type general name', 'your-plugin-textdomain' ),
	'singular_name'      => _x( 'Agents', 'post type singular name', 'your-plugin-textdomain' ),
	'menu_name'          => _x( 'Agents', 'admin menu', 'your-plugin-textdomain' ),
	'name_admin_bar'     => _x( 'Agents', 'add new on admin bar', 'your-plugin-textdomain' ),
	'add_new'            => _x( 'Add New', 'Agents', 'your-plugin-textdomain' ),
	'add_new_item'       => __( 'Add New', 'your-plugin-textdomain' ),
	'new_item'           => __( 'New Agents', 'your-plugin-textdomain' ),
	'edit_item'          => __( 'Edit Agents', 'your-plugin-textdomain' ),
	'view_item'          => __( 'View Agents', 'your-plugin-textdomain' ),
	'all_items'          => __( 'All Agents', 'your-plugin-textdomain' ),
	'search_items'       => __( 'Search Agents', 'your-plugin-textdomain' ),
	'parent_item_colon'  => __( 'Parent Agents:', 'your-plugin-textdomain' ),
	'not_found'          => __( 'No Agents found.', 'your-plugin-textdomain' ),
	'not_found_in_trash' => __( 'No Agents found in Trash.', 'your-plugin-textdomain' )
);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'orlando-agent' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'top_agents', $args );
}
?>