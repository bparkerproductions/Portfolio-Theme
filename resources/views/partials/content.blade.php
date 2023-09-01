<article title="{{get_the_title($post->ID)}}" class="position-relative blog-preview blog-preview--full-img">
  <div class="blog-preview__inner">
    @include('partials/entry-meta', [
      'postID' => $post->ID,
      'hide_date' => false
    ])
    <a class="absolute-fill" href="{{get_the_permalink($post->ID)}}"></a>

    <img
      alt="{{APP::getImageAlt($post->ID)}}"
      class="img-fluid shadow rounded mb-4"
      src="{{ get_the_post_thumbnail_url($post->ID) }}"
    />
    <h4 title="{{get_the_title($post->ID)}}" class="blog-preview__title">{!! get_the_title($post->ID) !!}</h4>
    <p class="single-blog-description">{{ the_excerpt($post->ID) }}</p>

    <p class="text-primary mb-0">Read More</p>
  </div>
<article>
