<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateProjects extends Controller {
  public static function featuredImage($id) {
    if ( get_the_post_thumbnail_url($id) ) {
      return get_the_post_thumbnail_url($id);
    } else {
      if (get_field('client_projects', $id)['gallery']) {
        return get_field('client_projects', $id)['gallery'][0]['image']['url'];
      }
    }
  }
}