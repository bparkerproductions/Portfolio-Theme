{{--
  Template Name: Home Page
--}}

@extends('layouts.app', [ 'navbarClass' => 'test'])

@section('content')

  @include('partials.home.hero')

  {{-- Main section content --}}
  <section class="container pt-5">
    <div class="col-12 col-xl-9">
      @php the_content() @endphp
    </div>
  </section>

  {{-- Explore post categories --}}
  <div class="container">
    <h1 class="text-primary fw-bold mb-4 mt-5">Explore.</h1>

    @include('partials.components.blog-grid', [
      'header' => 'Featured Posts',
      'blog_list' => Archive::getFeaturedPosts(6)
    ])

    @include('partials.components.blog-grid', [
      'header' => 'CSS',
      'blog_list' => Archive::getPostsFromCategory('css', 3)
    ])

    @include('partials.components.blog-grid', [
      'header' => 'JS',
      'blog_list' => Archive::getPostsFromCategory('css', 3)
    ])
  </div>

@endsection