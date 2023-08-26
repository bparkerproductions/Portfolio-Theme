{{--
  Template Name: Portfolio
--}}

@extends('layouts.app', [ 'navbarClass' => 'dark' ])

@section('content')

@php
  $bgImage = 'background-image: url(' . $hero_bg_image . ');';
@endphp

  <section class="hero home-hero">
    <canvas id="snowstorm"></canvas>
      <section class="container">
        <h1 class="text-white">{!! $hero_title !!}</h1>

        <div class="row">
          @foreach($hero_blurbs as $card)
            <div class="col-12 col-lg-6 col-xl-4 mb-4 mb-lg-0">
              <div class="card card-body">
                <i class="{{$card['icon']}} fa-2x text-secondary"></i>
                <h6 class="fs-4 text-dark mt-3">{{$card['title']}}</h6>
                <p class="fw-light">{{$card['subtitle']}}</p>
              </div>
            </div>
          @endforeach
        </div>
      </section>

      <section id="about-container" class="mt-5 mt-xl-6 container">
        {{-- Content from editor --}}
        @php the_content() @endphp
      </section>
          
    </div>
  </section>

  {{-- Blog Posts Section --}}
  <section class="blog-posts-container column-center py-6">
    <div class="container">
      <h2 class="text-dark mb-3">
        <span class="text-primary">{{wp_count_posts()->publish}}</span> Blog Posts and Counting
      </h2>
      @include('partials.components.blog-grid', [
        'header' => 'Featured',
        'blog_list' => Archive::getFeaturedPosts(3)
      ])

      <a
        href="{{get_post_type_archive_link('post')}}"
        target="_blank"
        class="btn btn-primary btn-lg rounded-3"
      >See All Blog Posts</a>
    </div>
  </section>

  <section id="projects">
    <h1>Projects</h1>
  </section>

  <section id="testimonials" class="py-6 bg-gray-100">
    <div class="container">
      <h1 class="mb-3">Read More From More Happy Clients</h1>

      @if (get_field('testimonials') )
        <div class="row">
          @foreach(get_field('testimonials') as $testimonial)
            <div class="col-12 col-lg-6 my-3">
              <div class="card card-body">
                @include('partials.components.testimonial', [
                  'testimonial' => $testimonial,
                  'classes' => 'd-flex justify-content-between flex-column h-100',
                  'fontSize' => 'fs-5'
                ])
              </div>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </section>

  @include('partials.global.cta')
@endsection