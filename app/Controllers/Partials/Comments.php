<?php

namespace App\Controllers\Partials;

trait Comments {
  public function makeAuthorMarkup() {
    return '
      <input tabindex="0" placeholder="Your Name" class="input-style" type="text" id="your-name" name="your-name" aria-required="true">
    ';
  }

  public function makeCommentTextArea() {
    return '
      <textarea tabindex="0"
        placeholder="Write a comment"
        class="input-style col-12 col-xl-6"
        id="comment"
        name="comment"
        aria-required="true"></textarea>
    ';
  }

  public function makeSubmitButton() {
    return '
    <div class="col-12 col-lg-6">
      <input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-dark btn-lg rounded-0 w-100" value="%4$s" />
    </div>';
  }

  public function commentOptions() {
    return [
      'label_submit' => 'Post',
      'title_reply' => 'Leave a Comment',
      'logged_in_as' => '',
      'fields' => [
        'author' => $this->makeAuthorMarkup(),
      ],
      'comment_field' => $this->makeCommentTextArea(),
      'comment_notes_before' => '',
      'submit_button' => $this->makeSubmitButton()
    ];
  }
}