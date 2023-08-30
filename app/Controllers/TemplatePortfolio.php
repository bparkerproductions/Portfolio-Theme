<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortfolio extends Controller {
  public function heroTitle() {
    return get_field('home_hero_title');
  }

  public function heroBlurbs() {
    return get_field('hero_blurbs');
  }

  public function heroBgImage() {
    return get_field('hero_background_image');
  }
}