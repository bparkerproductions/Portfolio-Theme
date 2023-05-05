<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {
  public function categories() {
    return get_field('categories');
  }
}
