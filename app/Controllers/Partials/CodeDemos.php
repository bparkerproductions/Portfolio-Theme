<?php

namespace App\Controllers\Partials;

trait CodeDemos {
  public function demoDescription() {
    return get_field('hero_description', get_the_ID());
  }

  public function technologiesList() {
    return get_field('technologies_list', get_the_ID());
  }

  public function relatedMedia() {
    return get_field('related_media', get_the_ID());
  }

  public function demoImage() {
    return get_field('demo', get_the_ID());
  }
}