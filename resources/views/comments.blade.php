@php
if (post_password_required()) {
  return;
}
@endphp

<section id="comments" class="py-5 bg-gray-100 position-relative overflow-hidden">
  <div class="bg-circle bg-circle--thick bg-circle--large bg-circle--primary bg-circle--top-left"></div>
  <div class="container">
    <div class="col-12 col-xl-6">
      @php comment_form($comment_options); @endphp
    </div>
    @if (have_comments())
      <ul class="comment-list mt-5">
        {!! wp_list_comments(
          [
            'style' => 'ul',
            'type' => 'comment',
            'avatar_size' => 0,
            'callback' => 'comment_content'
          ]
        ) !!}
      </ul>
    @endif
  </div>
</section>
