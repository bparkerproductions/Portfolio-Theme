<?php

namespace App\Controllers\Partials;

trait GlobalFields {
  public function contentRows() {
    return get_field('content_rows');
  }
}