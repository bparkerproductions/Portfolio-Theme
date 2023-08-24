<?php
/* TECHNOLOGIES post type */
function create_technologies_post_type() {
    register_post_type( 'technologies',
        [
        'labels' => [
            'name' => __( 'Technologies' ),
            'singular_name' => __( 'Technology' )
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-media-code'
    ]);
}
add_action( 'init', 'create_technologies_post_type' );