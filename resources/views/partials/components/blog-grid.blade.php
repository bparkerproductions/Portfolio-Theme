<h2 class="badge px-4 py-2 fs-5 rounded-0 mb-0 text-white">{{ $header }}</h2>

<section class="post-container">
  <ul class="row list-unstyled">
    @foreach($blog_list as $ID)
      <li class="blog-preview col-12 col-md-6 col-xl-4 my-4">
        <article class="position-relative">
          <a class="absolute-fill" href="{{get_the_permalink($ID)}}"></a>

          <img class="img-fluid shadow rounded mb-4" src="{{ get_the_post_thumbnail_url($ID) }}" />
          <h4 title="get_the_title($ID)" class="single-blog-title">{!! get_the_title($ID) !!}</h4>
          <p class="single-blog-description">{!! get_the_excerpt($ID) !!}</p>

          <p class="text-primary mb-0">Read More</p>
        </article>
      </li>
    @endforeach
  </ul>
</section>