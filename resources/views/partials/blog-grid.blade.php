<h2 class="h4 mb-3 fw-semibold text-dark">{{ $header }}</h2>

<section class="post-container">
  <ul class="row list-unstyled">
    @foreach($blog_list as $ID)
      <li class="blog-preview col-12 col-md-6 col-xl-4 mb-4">
        <article class="position-relative blog-preview__inner">
          <a
            class="absolute-fill"
            href="{{get_the_permalink($ID)}}"
            aria-label="{!! get_the_title($ID) !!}"
            title="{!! get_the_title($ID) !!}"
          >
          </a>

          <img
            alt="{{APP::getImageAlt($ID)}}"
            class="img-fluid shadow rounded mb-4"
            src="{{ get_the_post_thumbnail_url($ID) }}"
          />
          <h3 title="{!! get_the_title($ID) !!}" class="blog-preview__title h4">{!! get_the_title($ID) !!}</h3>
          <p class="single-blog-description">{!! get_the_excerpt($ID) !!}</p>

          <p class="text-primary mb-0">Read More</p>
        </article>
      </li>
    @endforeach
  </ul>
</section>