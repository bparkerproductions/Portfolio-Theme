<section class="related-posts pt-5">
  <div class="container">
    <h2 class="title mb-4">{{$component_title}}</h2>

    <ul class="row list-unstyled">
      @foreach(ARCHIVE::randomPostIds(6) as $ID)
      <li class="blog-preview position-relative col-12 col-md-6 col-xl-4 mb-5">
        <article>
            @include('partials/entry-meta', [
              'postID' => $ID,
              'hide_date' => true
            ])
            <a class="absolute-fill" href="{{get_the_permalink($ID)}}"></a>
        
            <img class="img-fluid shadow rounded mb-4" src="{{ get_the_post_thumbnail_url($ID) }}" />
            <h4 title="{{get_the_title($ID)}}" class="blog-preview__title">{!! get_the_title($ID) !!}</h4>
            <p class="single-blog-description">{{ the_excerpt($ID) }}</p>
        
            <p class="text-primary mb-0">Read More</p>
          </article>
        </li>
      @endforeach
    </ul>
  </div>
</section>