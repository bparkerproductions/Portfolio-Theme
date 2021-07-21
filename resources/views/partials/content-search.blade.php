<article @php post_class() @endphp>
  <header>
    <h4 class="entry-title">
      <a href="{{get_permalink()}}">{{ get_the_title() }}</a>
    </h4>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta', [
          'postID' => get_the_ID()
        ])
    @endif
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
