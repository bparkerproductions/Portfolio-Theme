<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {
    public function resumeLink() {
      $page_object = get_page_by_title('Resume');
      return get_permalink($page_object->ID);
    }

    public function portfolioLink() {
      return get_permalink(get_page_by_title('Portfolio'));
    }

    public static function categoryIconID($id) {
      var_dump(get_field('category_icon', 'category_' . $id));
      return get_field('category_icon', 'category_' . $id)[0]->ID;
    }

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

    public function blogLink() {
      return get_page_link(get_page_by_title('Blog')->ID);
    }

    public function projectsPage() {
      return get_page_by_title('All Projects')->ID;
    }

    public function projectsLink() {
      return get_page_link($this->projectsPage());
    }

    public function robotsMeta() {
      $isProjectsPage = get_the_ID() == $this->projectsPage();
      $isProjects = get_post_type() == 'projects' || $isProjectsPage;
      return $isProjects  ? ['robots', 'noindex'] : ['', ''];
    }

    public function heroBgImage() {
      return get_field('hero_background_image', 'option');
    }
}
