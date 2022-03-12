<?php

add_action( 'acf/init', 'lazuli_init_block_types' );

function lazuli_init_block_types() {
	if ( function_exists( 'acf_register_block_type' ) ) {

		/*
				acf_register_block_type( array(
					'name'            => 'lazuli/advantage',
					'title'           => __( 'Advantage', 'lazuli' ),
					'description'     => __( 'Display an advantage block', 'lazuli' ),
					'render_template' => 'template-parts/blocks/advantage.php',
					'category'        => 'formatting',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'advantage' ),
					'supports'        => array(
						'jsx'    => true,
						'anchor' => true,
					)
				) );
		*/

		/**
		 *
		 *
		 * Pages blocks
		 *
		 *
		 */

		acf_register_block_type( array(
			'name'            => 'lazuli/hero',
			'title'           => __( 'Hero', 'lazuli' ),
			'description'     => __( 'Display a hero block', 'lazuli' ),
			'render_template' => 'template-parts/blocks/hero.php',
			'category'        => 'section',
			'icon'            => 'admin-comments',
			'keywords'        => array( 'hero' ),
			'align'           => 'full',
			'supports'        => array(
				'jsx'    => true,
				'anchor' => true,
			)
		) );

        acf_register_block_type( array(
            'name'            => 'lazuli/jumbotron',
            'title'           => __( 'Jumbotron', 'lazuli' ),
            'description'     => __( 'Jumbotron principale', 'lazuli' ),
            'render_template' => 'template-parts/blocks/block_jumbotron.php',
            'category'        => 'section',
            'icon'            => 'admin-comments',
            'keywords'        => array( 'jumbotron' ),
            'supports'        => array(
                'jsx'    => true,
                'anchor' => true,
            )
        ) );

        acf_register_block_type( array(
            'name'            => 'lazuli/section_blue',
            'title'           => __( 'Section bleu', 'lazuli' ),
            'description'     => __( 'Section bleu', 'lazuli' ),
            'render_template' => 'template-parts/blocks/section_blue.php',
            'category'        => 'section',
            'icon'            => 'admin-comments',
            'keywords'        => array( 'section_blue' ),
            'supports'        => array(
                'jsx'    => true,
                'anchor' => true,
            )
        ) );

	}
}
