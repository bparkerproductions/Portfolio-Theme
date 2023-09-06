<?php 
/**
 * WP REST API function for loading more posts dynamically
 * It can get all posts or posts from a single category.
 * Takes the category and page param
 */

function getMorePosts($request) {
	$postsData = array();
	$paged = $request->get_param('page');
	$paged = (isset($paged) || !(empty($paged))) ? $paged : 1;

	// Construct query
	$args = [];
	$args['post_type'] = 'post';
	$args['posts_per_page'] = -1;

	if ( $request->get_param( 'category' ) ) {
		$args['cat'] = $request->get_param('category');
	} else {
		$args['cat'] = '';
	}

	foreach ( get_posts($args) as $post ) {
    $id = $post->ID;

    $postsData[] = (object)array(
      'id' => $id,
      'slug' => $post->post_name,
	  'categories' => get_the_category($id),
      'title' => html_entity_decode($post->post_title),
      'featured_img_src' => get_the_post_thumbnail_url($id),
      'url' => get_permalink($id),
			'date' => date( 'F j, Y', strtotime( get_post($id)->post_date ) ),
      'excerpt' => get_the_excerpt($id),
    );
  }

	return $postsData;
}

add_action('rest_api_init', 'getCustomPostTypesApi');

function getCustomPostTypesApi() {
  register_rest_route('blog-posts', '/all-posts', array(
    'methods' => 'GET',
    'callback' => 'getMorePosts'
  ));
}