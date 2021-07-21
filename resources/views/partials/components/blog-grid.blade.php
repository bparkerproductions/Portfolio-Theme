<section class="blog-grid column-center">
  <div class="inner-container">
    <h2 class="title">{{ $header }}</h2>
  </div>
  <div class="post-container">
    <ul class="blog-list">
      @foreach($blog_list as $ID)
      @php
        $hasBgImage = Archive::postImageBg($ID) ? 'has-bg-image' : '';
      @endphp
        <li style="{{ Archive::postImageBg($ID) }}" class="single-blog-post {{ $hasBgImage }}">
          <article>
            <a class="single-post-link" href="{{ get_the_permalink($ID) }}"></a>
            <h4 class="single-blog-title">{!! get_the_title($ID) !!}</h4>
            <p class="single-blog-description">{!! get_the_excerpt($ID) !!}</p>

          </article>
        </li>
      @endforeach
    </ul>
  </div>
</section>