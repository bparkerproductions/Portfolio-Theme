@extends('layouts.app', [
  $navbarClass = 'scrolled always-scrolled'
])

@section('content')
  <section class="entry-content position-relative pt-4 pt-sm-6">
    @include('partials.bg-circle', [
      "properties" => ["large", "secondary"],
      "posLeft" => -75
    ])

    @include('partials.blog-categories')

    <div class="container">
      <ul
        class="row list-unstyled infinite-load"
        data-post-count="{{wp_count_posts()->publish}}"
      >
        @foreach( Archive::getPosts(10) as $post)
          <li class="col-12 col-lg-6 mb-5">
            @include('partials.content-'.get_post_type())
          </li>
        @endforeach
        </ul>
    </div>
  </section>
@endsection