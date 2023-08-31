<article title="{{get_the_title()}}" class="position-relative blog-preview blog-preview--full-img">
  <div class="blog-preview__inner">
    @include('partials/entry-meta', [
      'postID' => get_the_ID(),
      'hide_date' => false
    ])
    <a class="absolute-fill" href="{{get_the_permalink()}}"></a>

    <img
      alt="{{APP::getImageAlt()}}"
      class="img-fluid shadow rounded mb-4"
      src="{{ get_the_post_thumbnail_url() }}"
    />
    <h4 title="{{get_the_title()}}" class="blog-preview__title">{!! get_the_title() !!}</h4>
    <p class="single-blog-description">{{ the_excerpt() }}</p>

    <p class="text-primary mb-0">Read More</p>
  </div>
<article>
