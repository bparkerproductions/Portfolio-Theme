<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller {
  use Partials\ArchivePost;

  public static function randomPostIds($count) {
    $latest = new \WP_Query( array (
        'post__not_in' => array(get_the_ID()),
        'orderby'               => 'rand',
        'posts_per_page'        => $count,
        'fields' => 'ids',
        'post_status' => 'publish'
    ));

    return $latest->posts;
  }

  public static function getFeaturedPosts($amount) {
    $featuredPosts = new \WP_QUERY( array(
      'post__not_in' => array(get_the_ID()),
      'posts_per_page' => $amount,
      'meta_query' => array (
        array (
          'key' => 'is_featured',
          'post_status' => 'publish',
          'value' => '1',
          'compare' => '=',
        )
      )
      ));

    return $featuredPosts->posts;
  }

  public static function getPostsFromCategory($category, $amount) {
    return get_posts([
      'numberposts' => $amount,
      'post_status' => 'publish',
      'category' => $category
    ]);
  }

  public static function getPosts($amount) {
    return get_posts([
      'numberposts' => $amount,
      'post_status' => 'publish'
    ]);
  }
}
