<article @php post_class('col ' . Archive::isPostFeatured()) @endphp>
  <section class="top-post">
    @if(Archive::isPostFeatured())
      <div class="featured-icon">
        <i class="fas fa-star fa-lg white"></i>
      </div>
    @endif
    <header>
      @if($show_meta)
        @include('partials/entry-meta', [
          'postID' => get_the_ID()
        ])
      @endif
      <div>
      <h4 class="entry-title">
        <a href="{{ get_permalink() }}">
          {!! get_the_title() !!}
        </a>
      </h4>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </section>

  <a class="read-more-link hard-center" href="{{get_permalink()}}">
    <div class="read-more">
      <i class="fas fa-hand-point-right white fa-2x"></i>
      <h3 class="read-more-text">Read Post</h3>
    </div>
  </a>
</article>
