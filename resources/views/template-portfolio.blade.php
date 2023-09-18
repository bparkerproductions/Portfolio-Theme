{{--
  Template Name: Portfolio
--}}

@extends('layouts.app')

@section('content')

{{-- Hero and About Me --}}
  <section class="hero home-hero pt-7 pb-5 position-relative">
    <canvas id="snowstorm"></canvas>

    @if (get_field('hero_background_image'))
      <img
        class="absolute-fill bg-image"
        src="{{get_field('hero_background_image')}}"
        alt="Portfolio background decorative image"
      />
    @endif

      <section class="container">
        <h1 class="text-white mb-3">{!! get_field('home_hero_title') !!}</h1>

        <div class="row">
          @foreach(get_field('hero_blurbs') as $card)
            <div class="col-12 col-lg-6 col-xl-4 mb-4">
              <div class="card card-body d=flex justify-content-between">
                <div>
                  <i class="{{$card['icon']}} fa-2x text-secondary"></i>
                  <h2 class="fs-4 text-dark mt-3">{{$card['title']}}</h2>
                  <p class="fw-light">{{$card['subtitle']}}</p>
                </div>

                @if ($card['link'])
                  <a
                    href="{{$card['link']['url']}}"
                    target="{{$card['link']['target']}}"
                    class="btn btn-secondary px-4 py-2 btn-sm rounded-3 text-white">
                    {{$card['link']['title']}}
                  </a>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </section>

      <section id="about-container" class="mt-5 container">
        {{-- About Me content from editor --}}
        <div class="card card-body pt-5">
          @php the_content() @endphp
        </div>
      </section>
          
  </section>

  {{-- Projects Preview --}}
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

          @include('partials.project', [
            'project' => $clientProjects,
            'smallHeader' => true
          ])

          @if ($loop->last)
            <div class="mt-4 mt-lg-5">
              <a
                target="_blank"
                class="text-dark text-decoration-underline fs-3 fw-semibold"
                href="{{$projects_link}}"
              >Want to See More Projects?</a>
            </div>
          @endif
        </div>
      </article>
    @endforeach
  </section>

  {{-- Client Testimonials --}}
  <section id="testimonials" class="py-5 bg-gray-400 position-relative overflow-hidden">
    @include('partials.bg-circle', [
      "properties" => ["white", "top-right", "large"],
      "opacity" => 0.5
    ])
    <div class="container">
      <h2 class="mb-3">Read More From More Happy Clients</h2>

      @if (get_field('testimonials') )
        <div class="row">
          @foreach(get_field('testimonials') as $testimonial)
            <div class="col-12 col-lg-6 my-3">
              <div class="card card-body">
                @include('partials.testimonial', [
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

  {{-- Blog Posts Section --}}
  <section class="py-5">
    <div class="container">
      <h2 class="text-dark mb-3">
        <span class="text-primary">{{wp_count_posts()->publish}}</span> Blog Posts and Counting.
      </h2>
      @include('partials.blog-grid', [
        'header' => 'Featured',
        'blog_list' => Archive::getFeaturedPosts(3)
      ])

      @include('partials.searchbar', [
        'scrollLock' => false,
        'placeholder' => 'Find blog posts..'
      ])

      <a
        href="{{get_post_type_archive_link('post')}}"
        target="_blank"
        class="btn btn-primary btn-lg rounded-3"
      >See All Blog Posts</a>
    </div>
  </section>

  {{-- Credentials --}}
  <section id="credentials" class="py-5 position-relative overflow-hidden">
    @include('partials.bg-circle', [
      "properties" => ["primary", "top-left"],
      "posLeft" => 0.75
    ])
    <div class="container">
      <h2 class="text-dark">Credentials</h2>
      @include('partials.credentials')
    </div>
  </section>

  {{-- CTA --}}
  <section id="cta" class="cta container py-5">
    <div class="card card-body bg-dark">
      @include('partials.cta')
    </div>
  </section>
@endsection