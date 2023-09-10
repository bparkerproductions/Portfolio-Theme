<article class="position-relative blog-preview blog-preview--full-img">
  <div class="blog-preview__inner">
    @include('partials/entry-meta', [
      'postID' => $post->ID,
      'hide_date' => false
    ])
    <a
      class="absolute-fill blog-preview__link"
      href="{{get_the_permalink($post->ID)}}"
      aria-label="{!! get_the_title($post->ID) !!}"
      title="{!! get_the_title($post->ID) !!}"
    ></a>

    <img
      alt="{{ APP::getImageAlt($post->ID) }}"
      class="img-fluid shadow rounded mb-4 blog-preview__image"
      src="{{ get_the_post_thumbnail_url($post->ID) }}"
    />
    <h4 title="{!! get_the_title($post->ID) !!}" class="blog-preview__title">{!! get_the_title($post->ID) !!}</h4>
    <p class="blog-preview__description">{!! get_the_excerpt($post->ID) !!}</p>

    <p class="text-primary mb-0">Read More</p>
  </div>
<article>
