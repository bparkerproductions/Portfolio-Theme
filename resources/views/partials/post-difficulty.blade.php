@if($post_fields['difficulty'])
  <section aria-toggled="false" class="post-difficulty">
    <div class="header-info">
      <div class="text-container">
        <i class="fa fa-book" aria-hidden="true"></i>
        <p class="difficulty-text">{{ $post_fields['difficulty'] }}</p>
      </div>
      <i class="fa fa-caret-down toggle-icon" aria-hidden="true"></i>
    </div>

    <div class="difficulty-information">
      <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
      <p class="difficulty-text"> {{ $post_fields['difficulty_text'] }} </p>
    </div>
  </section>
@endif