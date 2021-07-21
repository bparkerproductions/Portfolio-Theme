<?php

function acf_register_content_rows() {

  // register a testimonial block.
  acf_register_block_type(array(
      'name'              => 'Content Rows',
      'title'             => __('Content Rows'),
      'description'       => __('A content row block'),
      'render_template'   => 'views/blocks/content-rows.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'content', 'rows' ),
  ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'acf_register_content_rows');
}