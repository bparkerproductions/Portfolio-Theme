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
            <div class="col-12 col-lg-4">
              <div class="card card-body">
                <i class="{{$card['icon']}} fa-2x text-secondary"></i>
                <h6 class="fs-4 text-dark mt-3">{{$card['title']}}</h6>
                <p class="fw-light">{{$card['subtitle']}}</p>
              </div>
            </div>
          @endforeach
        </div>

        <div class="row mt-5">
          <div class="col-4">
            <button class="btn btn-dark btn-lg me-3 w-100 fw-normal py-3">
              See Projects
              <i class="fas fa-caret-right"></i>
            </button>
          </div>

          <div class="col-4">
            <button class="btn btn-dark btn-lg w-100 fw-normal py-3">
              View Testimonials
              <i class="fas fa-caret-right"></i>
            </button>
          </div>
        </div>
      </section>

      <section id="about-container" class="mt-5 container">
        {{-- Content from editor --}}
        @php the_content() @endphp
      </section>
          
    </div>
  </section>

  {{-- Blog Posts Section --}}
  <section class="blog-posts-container column-center">
    <div class="container">
      @include('partials.global.related-posts', [
        'component_title' => 'See Blog Posts'
      ])
    </div>
  </section>

  {{-- Portfolio widgets area  --}}
  @if( is_active_sidebar( 'portfolio-widgets' ) )
    <section id="secondary-sidebar" class="spacer column-center">
      <div class="container">
        @php dynamic_sidebar( 'portfolio-widgets' ) @endphp
      </div>
    </section>
  @endif

  @include('partials.global.cta')
@endsection