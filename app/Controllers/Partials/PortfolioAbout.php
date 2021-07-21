<?php

namespace App\Controllers\Partials;

trait PortfolioAbout {
  public function aboutTitle() {
    return get_field('home_about_title');
  }

  public function aboutDesc() {
    return get_field('home_about_description');
  }

  public function aboutBtnLink() {
    return get_field('home_about_button')['url'];
  }

  public function aboutBtnText() {
    return get_field('home_about_button')['title'];
  }

  public function technologies() {
    return get_field('technologies');
  }
}