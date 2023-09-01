{{--
  Template Name: Archive Template
--}}

@extends('layouts.app')

@section('content')
  <section class="entry-content pt-4 pt-sm-6 position-relative header-scrolled">
    <div class="bg-circle bg-circle--top-left bg-circle--thick"></div>
    <div class="bg-circle bg-circle--large bg-circle--secondary"></div>

    @include('partials.blog-categories')

    <div class="container">
      <ul
        class="list-unstyled row infinite-load"
        data-category="{{get_queried_object()->term_id}}"
        data-post-count="{{get_queried_object()->count}}"
      >
        @foreach( Archive::getPostsFromCategory(get_queried_object()->term_id, 10) as $post)
          <li class="col-12 col-lg-6 mb-5">
            @include('partials.content-'.get_post_type())
          </li>
        @endforeach
      </ul>
    </div>
  </section>
@endsection