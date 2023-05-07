<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateProjects extends Controller {
  public function allProjects() {
    // var_dump(get_field('all_projects'));
    return get_field('all_projects');
  }
}