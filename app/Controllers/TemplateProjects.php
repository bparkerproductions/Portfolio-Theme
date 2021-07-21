<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateProjects extends Controller {
  public function heroDescription() {
    return get_field('hero_description');
  }

  public function projectsDescription() {
    return get_field('projects_description');
  }

  public function allProjects() {
    return get_field('all_projects');
  }
}