<?php

namespace App\Controllers\Partials;

trait ArchivePost {
  public function categoryList() {
    return get_categories([
      'orderby' => 'name'
    ]);
  }

  public static function isSelected($cat) {
    if ($cat->name === single_cat_title('', false) ) {
      return 'selected';
    }
  }
}