{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

  <section class="hero d-flex position-relative">
    <div class="absolute-fill overflow-hidden">
      <div class="bg-circle bg-circle--bottom-left bg-circle--large"></div>
      <div class="bg-circle bg-circle--white bg-circle--thick
      bg-circle--top-right bg-circle--large bg-circle--opacity-low bg-circle--fill-white"></div>
    </div>

    <div class="container d-flex align-items-center justify-content-start">
      <div class="row">
        <h1 class="mb-5 text-white">Explore. Learn. Create.</h1>

        @include('partials.searchbar')

        <div class="row">
          <div class="col-12 col-md-6 col-xl-4 me-0 me-xl-3 mb-4 mb-md-0">
            <div class="card card-body d-flex flex-column justify-content-between">
              <div class="bg-circle bg-circle--thin bg-circle--top-right"></div>
              <div>
                <h4 class="">Book.</h4>
                <p>I am currently open for work. Book a session today</p>
              </div>

              <div class="mt-3">
                <button class="btn btn-primary btn-lg">Book a Service</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <div class="card card-body d-flex flex-column justify-content-between">
              <div class="bg-circle bg-circle--thick bg-circle--secondary bg-circle--bottom-right"></div>
              <div>
                <h4 class="">Explore</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit praesentium numquam illum expedita.</p>
              </div>

              <div class="mt-3">
                <button class="btn btn-secondary btn-lg scroll-down-home">
                  Learn More
                  <i class="fa fa-caret-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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