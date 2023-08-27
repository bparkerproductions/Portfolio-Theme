<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortfolio extends Controller {
  use Partials\PortfolioHero;

  public static function isSpecialized($id) {
    return get_field('specialized_skill', $id) ? 'specialized' : '';
  }
}