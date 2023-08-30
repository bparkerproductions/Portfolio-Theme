<?php

namespace App\Controllers\Partials;

trait ArchivePost {
  public function categoryList() {
    return get_categories([
      'orderby' => 'name'
    ]);
  }

  public function blogLink() {
    return get_page_link(get_page_by_title('Blog')->ID);
  }

  public static function isSelected($cat) {
    if ($cat->name === single_cat_title('', false) ) {
      return 'selected';
    }
  }
}