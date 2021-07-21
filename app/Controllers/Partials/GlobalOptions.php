<?php

namespace App\Controllers\Partials;

trait GlobalOptions {
  public function socialMedia() {
    return get_field('social_media', 'option');
  }

  public function ctaHeader() {
    return get_field('cta_header', 'option');
  }

  public function ctaEmailLink() {
    return get_field('cta_email_link', 'option');
  }

  public function footerLists() {
    return get_field('footer_lists', 'option');
  }

  public function copyrightText() {
    return get_field('copyright_text', 'option');
  }

  public function blogDescription() {
    return get_field('blog_description', 'option');
  }

  public function demoLink() {
    return get_field('demo_link', 'option');
  }

  public function demoDescription() {
    return get_field('demo_description', 'option');
  }
}