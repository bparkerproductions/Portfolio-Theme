<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortfolio extends Controller {
  use Partials\PortfolioHero;
  use Partials\PortfolioAbout;
  use Partials\PortfolioProjects;

  public function testimonials() {
    return get_field('testimonials');
  }

  public static function isSpecialized($id) {
    return get_field('specialized_skill', $id) ? 'specialized' : '';
  }
}