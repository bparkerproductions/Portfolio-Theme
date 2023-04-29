<div class="container my-5">
  <h1 class="badge px-4 py-2 fs-4 rounded-0 mb-0 text-white">{{ $header }}</h1>

  <section class="post-container">
    <ul class="row list-unstyled">
      @foreach($blog_list as $ID)
        <li class="blog-preview col-4 my-4">
          <article>
            <img class="img-fluid shadow rounded mb-4" src="{{ get_the_post_thumbnail_url($ID) }}" />
            <h4 class="single-blog-title">{!! get_the_title($ID) !!}</h4>
            <p class="single-blog-description">{!! get_the_excerpt($ID) !!}</p>
          </article>
        </li>
      @endforeach
    </ul>
  </section>
</div>