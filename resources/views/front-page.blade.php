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
  <div class="py-5 bg-gray-100 position-relative overflow-hidden">
    <div class="bg-circle bg-circle--top-left"></div>
    <div class="bg-circle bg-circle--large"></div>
    <div class="container">
      <h1 class="text-primary fw-bold mb-4 mt-5">Explore.</h1>

      @include('partials.components.blog-grid', [
        'header' => 'Featured Posts',
        'blog_list' => Archive::getFeaturedPosts(6)
      ])

      {{-- Flexible Content --}}
      @if ( have_rows('blog_post_categories') )
        @while ( have_rows('blog_post_categories') ) @php the_row() @endphp
          @if ( get_row_layout() == 'category_display')
            @include('partials.components.blog-grid', [
              'header' => get_sub_field('title'),
              'blog_list' => Archive::getPostsFromCategory(
                get_sub_field('category'),
                get_sub_field('amount')
              )
            ])
          @endif
        @endwhile
      @endif

    </div>
  </div>

@endsection