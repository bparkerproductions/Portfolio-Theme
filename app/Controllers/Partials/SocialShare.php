<?php

namespace App\Controllers\Partials;

trait SocialShare {
  public function socialLink() {
    return urlencode(get_permalink());
  }

  public function socialTitle() {
    $decodedTitle = html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8');
    return htmlspecialchars(urlencode($decodedTitle));
  }

  public function twitterLink() {
    return '
    https://twitter.com/intent/tweet?text='
    . $this->socialTitle()
    . '&amp;url='
    . $this->socialLink();
  }

  public function facebookLink() {
    return '
    https://www.facebook.com/sharer/sharer.php?u='
    . $this->socialLink();
  }

  public function linkedinLink() {
    return
    'https://www.linkedin.com/shareArticle?mini=true&amp;url='
    . $this->socialLink()
    . '&amp;title='
    . $this->socialTitle();
  }
}