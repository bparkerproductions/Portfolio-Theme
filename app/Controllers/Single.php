<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {
  use Partials\ProjectSingle;
  use Partials\Comments;

  public function testimonials() {
    return get_field('testimonial');
  }

  public function postFields() {
    return get_field('blog_post_fields', get_the_ID());
  }

  public static function getIconClass() {
    if(get_post_type() == 'projects') return 'fas fa-external-link-square-alt';
    return false;
  }
}