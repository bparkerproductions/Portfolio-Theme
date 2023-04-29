<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller {
  use Partials\ArchivePost;

  public static function postImageBg($id) {
    $postImageUrl = get_the_post_thumbnail_url($id);

    if($postImageUrl) return 'background-image: url("' . $postImageUrl . '")';
    else return '';
  }

  public static function randomPostIds($count) {
    $latest = new \WP_Query( array (
        'post__not_in' => array(get_the_ID()),
        'orderby'               => 'rand',
        'posts_per_page'        => 100,
        'fields' => 'ids'
    ));

    return array_slice($latest->posts, 0, $count);
  }

  public static function getFeaturedPosts() {
    $featuredPosts = new \WP_QUERY( array(
      'post__not_in' => array(get_the_ID()),
      'posts_per_page' => 6,
      'meta_query' => array (
        array (
          'key' => 'is_featured',
          'value' => '1',
          'compare' => '=',
        )
      )
      ));

      return $featuredPosts->posts;
  }

  public static function isPostFeatured() {
    $featured = get_field('blog_post_fields', get_the_ID())['is_featured'];
    return $featured ? 'featured-post' : false;
  }

  public static function postTechnologies() {
    $blogPostFields = get_field('blog_post_fields', get_the_ID());

    if ($blogPostFields) {
      return $blogPostFields['tech'];
    }
  }
}
