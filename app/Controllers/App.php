<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {
    public static function IsActive($page) {
      // Get slug then turn it into a title friendly String
      if ( is_home() ) {
        $slug = get_the_title(get_option('page_for_posts'));
      } else {
        $slug = get_post_field('post_name', get_the_ID());
      }
      $compareStr = ucwords(str_replace("-", " ", $slug));
      return $compareStr == $page ? 'active' : '';
    }

    public function portfolioLink() {
      return get_page_link(get_page_by_title('Portfolio')->ID);
    }

    public function resumeLink() {
      return get_page_link(get_page_by_title('Resume')->ID);
    }

    public function blogLink() {
      return get_page_link(get_page_by_title('Blog')->ID);
    }

    public function projectsLink() {
      return get_page_link(get_page_by_title('All Projects')->ID);
    }
}
