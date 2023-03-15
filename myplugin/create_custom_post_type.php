<?php
add_action( 'init', 'your_prefix_register_post_type' );
function your_prefix_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'AnciadoCustompost', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'AnciadoCustompost', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Add New', 'your-textdomain' ),
		'add_new_item'             => esc_html__( 'Add New AnciadoCustompost', 'your-textdomain' ),
		'edit_item'                => esc_html__( 'Edit AnciadoCustompost', 'your-textdomain' ),
		'new_item'                 => esc_html__( 'New AnciadoCustompost', 'your-textdomain' ),
		'view_item'                => esc_html__( 'View AnciadoCustompost', 'your-textdomain' ),
		'view_items'               => esc_html__( 'View AnciadoCustompost', 'your-textdomain' ),
		'search_items'             => esc_html__( 'Search AnciadoCustompost', 'your-textdomain' ),
		'not_found'                => esc_html__( 'No anciadocustompost found.', 'your-textdomain' ),
		'not_found_in_trash'       => esc_html__( 'No anciadocustompost found in Trash.', 'your-textdomain' ),
		'parent_item_colon'        => esc_html__( 'Parent AnciadoCustompost:', 'your-textdomain' ),
		'all_items'                => esc_html__( 'All AnciadoCustompost', 'your-textdomain' ),
		'archives'                 => esc_html__( 'AnciadoCustompost Archives', 'your-textdomain' ),
		'attributes'               => esc_html__( 'AnciadoCustompost Attributes', 'your-textdomain' ),
		'insert_into_item'         => esc_html__( 'Insert into anciadocustompost', 'your-textdomain' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this anciadocustompost', 'your-textdomain' ),
		'featured_image'           => esc_html__( 'Featured image', 'your-textdomain' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain' ),
		'menu_name'                => esc_html__( 'AnciadoCustompost', 'your-textdomain' ),
		'filter_items_list'        => esc_html__( 'Filter anciadocustompost list', 'your-textdomain' ),
		'filter_by_date'           => esc_html__( '', 'your-textdomain' ),
		'items_list_navigation'    => esc_html__( 'AnciadoCustompost list navigation', 'your-textdomain' ),
		'items_list'               => esc_html__( 'AnciadoCustompost list', 'your-textdomain' ),
		'item_published'           => esc_html__( 'AnciadoCustompost published.', 'your-textdomain' ),
		'item_published_privately' => esc_html__( 'AnciadoCustompost published privately.', 'your-textdomain' ),
		'item_reverted_to_draft'   => esc_html__( 'AnciadoCustompost reverted to draft.', 'your-textdomain' ),
		'item_scheduled'           => esc_html__( 'AnciadoCustompost scheduled.', 'your-textdomain' ),
		'item_updated'             => esc_html__( 'AnciadoCustompost updated.', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'AnciadoCustompost', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => 'myplugin-dashboard',
		'menu_icon'           => 'dashicons-controls-play',
		'capability_type'     => 'post',
		'supports'            => ['title', 'editor', 'thumbnail', 'author'],
		'taxonomies'          => ['category', 'post_tag'],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'anciadocustompost', $args );
}

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'fields'  => [
            [
                'type' => 'color',
                'name' => esc_html__( 'Color', 'online-generator' ),
                'id'   => $prefix . 'color_f8z6vda561s',
            ],
        ],
    ];

    return $meta_boxes;
}