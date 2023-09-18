{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

  {{-- Intro Hero Section --}}
  <section class="hero position-relative pt-6 pt-lg-7 pb-5 pb-lg-6">
    <div class="absolute-fill overflow-hidden pe-none">
      @include('partials.bg-circle', [
        "properties" => ["primary", "bottom-left", "large"]
      ])
      @include('partials.bg-circle', [
        "properties" => ["top-right", "large", "fill-white"],
        "opacity" => 0.05,
        "posRight" => -135
      ])
    </div>

    <div class="container">
        <h1 class="mb-3 text-white">{!! get_field('home_hero_header') !!}</h1>

        @include('partials.searchbar', [ 'scrollLock' => true ])

        <section class="mt-5 mt-lg-6 col-12 col-lg-10">
          @php the_content() @endphp
        </section>

    </div>
  </section>

  {{-- Explore post categories --}}
  <div class="py-5 bg-gray-100 position-relative overflow-hidden">
    @include('partials.bg-circle', [
      "properties" => ["primary", "top-left"],
      "opacity" => 0.5
    ])
    @include('partials.bg-circle', [
      "properties" => ["primary", "large"],
      "opacity" => 0.5
    ])

    <div class="container">
      <h1 class="text-primary fw-bold mb-4 mt-5">Explore.</h1>

      @include('partials.blog-grid', [
        'header' => 'Featured Posts',
        'blog_list' => Archive::getFeaturedPosts(6)
      ])

      {{-- Flexible Content --}}
      @if ( have_rows('blog_post_categories') )
        @while ( have_rows('blog_post_categories') ) @php the_row() @endphp

          {{-- Category Display --}}
          @if ( get_row_layout() == 'category_display')
            @include('partials.blog-grid', [
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

  {{-- CTA --}}
  <section class="cta container">
    <div class="card card-body bg-dark">
      @include('partials.cta')
    </div>
  </section>

@endsection