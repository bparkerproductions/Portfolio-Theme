<section class="related-posts glider mt-medium">
  <div class="header-container">
    <h2 class="title">{{$component_title}}</h2>

    <div class="slider-toggle-arrows">
      <div class="previous toggle">
        <i class="fas fa-angle-left"></i>
      </div>
      <div class="next toggle">
        <i class="fas fa-angle-right"></i>
      </div>
    </div>
  </div>
  <div class="inner-container">
    <div class="posts-container layout-two-columns ">
      @foreach(ARCHIVE::randomPostIds(10) as $ID)
        <article class="col mt-small mb-small">
          <section class="top-post">
            <header>
              @include('partials/entry-meta', [
                'postID' => $ID
              ])
              <div>
              <h4 class="entry-title">
                <a href="{{ get_permalink($ID) }}">
                  {!! get_the_title($ID) !!}
                </a>
              </h4>
            </header>
            <div class="entry-summary">{!! get_the_excerpt($ID) !!}</div>
          </section>

          <a class="read-more-link hard-center" href="{{get_permalink($ID)}}">
            <div class="read-more">
              <i class="fas fa-hand-point-right white fa-2x"></i>
              <h3 class="read-more-text">Read Post</h3>
            </div>
          </a>
        </article>
      @endforeach
    </div>
  </div>
</section>