<?php

namespace App\Controllers\Partials;

trait Comments {
  public function makeAuthorMarkup() {
    return '
      <input
        tabindex="0"
        placeholder="Name (Optional)"
        class="input-style w-100 mt-3"
        type="text"
        id="your-name"
        name="your-name"
      >
    ';
  }

  public function makeCommentTextArea() {
    return '
      <textarea tabindex="0"
        class="input-style w-100"
        id="comment"
        name="comment"
        aria-required="true"></textarea>
    ';
  }

  public function makeSubmitButton() {
    return '
    <div class="col-12 col-lg-6">
      <input
        name="%1$s"
        type="submit"
        id="%2$s"
        class="%3$s btn btn-dark btn-lg rounded w-100"
        value="%4$s"
      />
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