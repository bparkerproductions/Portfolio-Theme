{{--
  Template Name: Portfolio
--}}

@extends('layouts.app', [ 'navbarClass' => 'dark' ])

@section('content')

  {{-- Hero Section --}}
  @include('partials.portfolio.hero')

  {{-- About Section --}}
  @include('partials.portfolio.about')

  {{-- Blog Posts Section --}}
  <section class="blog-posts-container column-center">
    <div class="inner-container">
      @include('partials.global.related-posts', [
        'component_title' => 'See Blog Posts'
      ])
    </div>
  </section>

  @include('partials.portfolio.projects')
  @include('partials.portfolio.testimonials')
  @if( is_active_sidebar( 'portfolio-widgets' ) )
    <section id="secondary-sidebar" class="spacer column-center">
      <div class="inner-container">
        @php dynamic_sidebar( 'portfolio-widgets' ) @endphp
      </div>
    </section>
  @endif
  @include('partials.global.code-demo-preview')
  @include('partials.global.cta')
@endsection