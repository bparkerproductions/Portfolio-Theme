{{--
  Template Name: Portfolio
--}}

@extends('layouts.app', [ 'navbarClass' => 'dark' ])

@section('content')

  <section class="hero home-hero position-relative">
    <canvas id="snowstorm"></canvas>

    @if ($hero_bg_image)
      <img class="absolute-fill bg-image" src="{{$hero_bg_image}}" alt="Portfolio background image" />
    @endif

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
          
  </section>

  <section id="projects" class="project-container">
    @foreach(get_field('all_projects') as $id)
      @php $clientProjects = get_field('client_projects', $id); @endphp
        <article
          class="project py-5"
          data-bg-color="{{$clientProjects['color']}}"
        >
        <div class="container">
          @if ($loop->first)
            <h2 class="text-dark mb-5">
              Over
              <span class="text-primary fw-bold">
                {{wp_count_posts('client-project')->publish}}
              </span> Successful Projects.
            </h2>
          @endif

          @include('partials.components.project', [
            'project' => $clientProjects,
            'smallHeader' => true
          ])

          @if ($loop->last)
            <div class="mt-4 mt-lg-5">
              <a
                target="_blank"
                class="text-dark text-decoration-underline fs-3 fw-semibold"
                href="{{get_post_type_archive_link('client_projects')}}"
              >Want to See More Projects?</a>
            </div>
          @endif
        </div>
      </article>
    @endforeach
  </section>

  <section id="testimonials" class="py-5 bg-gray-400">
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

  {{-- Credentials --}}
  <section id="credentials" class="py-5">
    <div class="container">
      {{-- <div class="card card-body"> --}}
        @include('partials.components.credentials')
      {{-- </div> --}}
    </div>
  </section>

  {{-- Blog Posts Section --}}
  <section class="py-5">
    <div class="container">
      <h2 class="text-dark mb-3">
        <span class="text-primary">{{wp_count_posts()->publish}}</span> Blog Posts and Counting.
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

  <section class="cta container">
    <div class="card card-body bg-dark">
      @include('partials.components.cta')
    </div>
  </section>
@endsection