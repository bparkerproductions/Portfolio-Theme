<?php

namespace App\Controllers\Partials;

trait Navbar {
  public function primaryNavItems() {
    return get_field('navbar_list', 'option');
  }

  public function homeItem() {
    return get_field('home_item', 'option');
  }

  public function homeItemIcon() {
    return get_field('home_item_icon', 'option');
  }
}