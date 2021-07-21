<?php

namespace App\Controllers\Partials;

trait PortfolioHero {
  public function heroTitle() {
    return get_field('home_hero_title');
  }

  public function heroSubtitle() {
    return get_field('home_hero_subtitle');
  }

  public function heroButtonUrl() {
    $buttonLink = get_field('home_hero_button')['url'];
    return $buttonLink ? $buttonLink : '#';
  }

  public function heroButtonText() {
    return get_field('home_hero_button_text');
  }

  public function heroBlurbs() {
    return get_field('hero_blurbs');
  }

  public function heroBgImage() {
    return get_field('hero_background_image');
  }
}
