<?php

/* PROJECTS post type */
function create_projects_post_type() {
    register_post_type( 'projects',
        [
        'labels' => [
            'name' => __( 'Projects' ),
            'singular_name' => __( 'Project' )
        ],
        'public' => true,
        'menu_icon' => 'dashicons-category',
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail']
        ]
    );
}
add_action( 'init', 'create_projects_post_type' );

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