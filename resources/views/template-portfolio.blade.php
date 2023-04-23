{{--
  Template Name: Portfolio
--}}

@extends('layouts.app', [ 'navbarClass' => 'dark' ])

@section('content')

  {{-- Hero Section --}}
  @include('partials.portfolio.hero')

  {{-- About Section --}}
  @include('partials.portfolio.about')

  @include('partials.portfolio.projects')

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

  @include('partials.global.code-demo-preview')
  @include('partials.global.cta')
@endsection