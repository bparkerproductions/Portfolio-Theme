<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Remove jquery
 */

add_filter( 'wp_enqueue_scripts', function() {
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');
}, PHP_INT_MAX );

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'sage/main.css',
        asset_path('styles/main.css'),
        filemtime(get_template_directory() . '/dist/styles/main.css'),
        null
    );
    
    wp_enqueue_script(
        'sage/main.js',
        asset_path('js/app.js'),
        '',
        filemtime(get_template_directory() . '/dist/js/app.js'),
        true
    );

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_localize_script('sage/main.js', 'bp_object', [
		'home_url' => home_url()
	]);
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });
});
