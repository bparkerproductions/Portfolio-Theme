{{-- @php
if (post_password_required()) {
  return;
}
@endphp --}}

<section id="comments" class="mt-4 mt-5 py-5 bg-gray-100">
  <div class="container">
    @php comment_form($comment_options); @endphp
    @if (have_comments())
      <h3 class="comments-title">
        {!! sprintf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
      </h3>

      <ul class="comment-list mt-5">
        {!! wp_list_comments(
          [
            'style' => 'ul',
            'type' => 'comment',
            'avatar_size' => 0
          ]
        ) !!}
      </ul>
    @endif
  </div>
</section>
