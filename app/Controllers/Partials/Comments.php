<?php

namespace App\Controllers\Partials;

trait Comments {
  public function makeEmailMarkup() {
    return '
      <div class="input-container">
        <input tabindex="0" class="input-style" type="email" id="email" name="email" aria-required="true">
      </div>
    ';
  }

  public function makeAuthorMarkup() {
    return '
      <input tabindex="0" placeholder="Your Name" class="input-style" type="text" id="your-name" name="your-name" aria-required="true">
    ';
  }

  public function makeCommentTextArea() {
    return '
      <textarea tabindex="0" placeholder="Your Comment" class="input-style" id="comment" name="comment" aria-required="true"></textarea>
    ';
  }

  public function commentOptions() {
    return [
      'label_submit' => 'Post!',
      'title_reply' => 'Leave a Comment',
      'fields' => [
        'author' => $this->makeAuthorMarkup(),
      ],
      'comment_field' => $this->makeCommentTextArea(),
      'comment_notes_before' => ''
    ];
  }
}