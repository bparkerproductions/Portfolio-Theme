<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {
  public function homeHero() {
    return get_field('home_hero');
  }

  public function homeAbout() {
    return get_field('home_about');
  }

  public function categories() {
    return get_field('categories');
  }
}
