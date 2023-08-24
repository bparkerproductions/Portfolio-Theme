{{--
  Template Name: Portfolio
--}}

@extends('layouts.app', [ 'navbarClass' => 'dark' ])

@section('content')

@php
$bgImage = 'background-image: url(' . $hero_bg_image . ');';
@endphp

<section class="bg-mountain-blue">
  <div 
    class="hero home-hero lax"
    data-lax-translate-y="0 0, 1000 -250"
  >
    <canvas id="snowstorm"></canvas>
    <div class="container">
      <div class="content-container lax"
      data-lax-translate-y="0 0, 750 -250">

      <div class="intro-container">
        <h1 class="hero-title">{!! $hero_title !!}</h1>
      </div>

        <div class="hero-cards-container">
          <div class="hero-cards">
            @foreach($hero_blurbs as $card)
              <div class="hero-card">
                <div class="icon-container">
                  <i class="{{$card['icon']}}"></i>
                </div>
                <h6>{{$card['title']}}</h6>
                <p class="subtitle">{{$card['subtitle']}}</p>
              </div>
            @endforeach
          </div>

          <div class="button-container hard-center">
            <a>
              <button class="button black rotate projects-button">
                {{$hero_button_text}}
                <i class="fas fa-caret-right"></i>
              </button>
            </a>
          </div>
        </div>
      </div>

      <div class="toggle-more goto-about-me hard-center">
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>
  </div>
  </section>

  {{-- About Section --}}
  @include('partials.portfolio.about')

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