<?php

function acf_register_blocks() {

  acf_register_block_type(array(
      'name'              => 'Column with Icon',
      'title'             => __('Column With Icon'),
      'description'       => __('A basic content section with an icon'),
      'render_template'   => plugin_dir_path( __FILE__ ) . 'resources/views/blocks/column-with-icon.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'content', 'column', 'icon' ),
  ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'acf_register_blocks');
}