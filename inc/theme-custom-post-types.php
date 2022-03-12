<?php


function aukfood_custom_post_types() {
	$prestation = array(
		'labels'              => array(
			'name'          => __( 'prestations', 'lazuli' ),
			'singular_name' => __( 'prestation', 'lazuli' ),
		),
		'show_ui'             => true,
		'show_admin_column'   => true,
		'show_in_rest'        => true,
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'rewrite'             => array( 'slug' => 'prestation', 'with_front' => true ),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
		'menu_icon'           => 'dashicons-screenoptions',
	);

    $offre = array(
        'labels'              => array(
            'name'          => __( 'offres d\'emplois', 'lazuli' ),
            'singular_name' => __( 'offre d\'emploi', 'lazuli' ),
        ),
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'rewrite'             => array( 'slug' => 'offre', 'with_front' => true ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
        'menu_icon'           => 'dashicons-megaphone',
    );

	register_post_type( 'prestation', $prestation );
    register_post_type( 'offre', $offre );

}

add_action( 'init', 'aukfood_custom_post_types' );
