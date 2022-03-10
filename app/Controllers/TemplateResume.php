<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateResume extends Controller {
  public function resume() {
    return get_field('resume');
  }
}