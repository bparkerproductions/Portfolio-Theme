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
        ]
    );
}
add_action( 'init', 'create_projects_post_type' );


/* TESTIOMINALS post type */
function create_testimonials_post_type() {
    register_post_type( 'testimonials',
        [
        'labels' => [
            'name' => __( 'Testimonials' ),
            'singular_name' => __( 'Testimonial' )
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-quote'
        ]
    );
}
add_action( 'init', 'create_testimonials_post_type' );


/* DEMO post type */
function create_demo_post_type() {
    register_post_type( 'demos',
        [
        'labels' => [
            'name' => __( 'Code Demos' ),
            'singular_name' => __( 'Code Demo' )
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-controls-play',
        'show_in_rest' => true,
            'supports' => ['editor', 'title', 'excerpt']
        ]
    );
}
add_action( 'init', 'create_demo_post_type' );

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