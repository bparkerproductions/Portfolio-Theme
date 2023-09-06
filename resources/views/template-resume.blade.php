{{--
  Template Name: Resume
--}}

@extends('layouts.app')

@section('content')
  <section class="resume py-5 py-lg-6 header-scrolled">
    <div class="container">
      <div class="mb-3">
        <a class="fw-normal text-dark" href="{{$resume['resume_file']['url']}}" download>
          <i class="fas fa-download"></i> Download
        </a>
      </div>

      <div class="resume__content border row">
        <aside class="col-12 col-lg-3 bg-primary text-white p-0 order-2 order-lg-0">
          <div class="p-4 border-bottom">
            <ul class="list-unstyled mb-0">
              @foreach($resume['links'] as $link)
                <li class="my-1">
                  <a
                    class="text-white"
                    target="_blank"
                    href="{{$link['link']['url']}}">
                    {{$link['link']['title']}}
                  </a>
                </li>
              @endforeach

              <ul class="list-unstyled mb-0 mt-3">
                @foreach( get_field('social_media', 'option') as $social )
                  <a href="{{$social['link']}}" target="_blank">
                    <i class="{{$social['class']}} fa-2x text-white me-2"></i>
                  </a>
                @endforeach
              </ul>
            </ul>
          </div>

          @foreach($resume['technologies'] as $technology)
            <div class="p-4 border-bottom">
              <h6 class="mb-1 text-white fw-semibold">{{$technology['title']}}</h6>

              <ul class="list-unstyled mb-0">
                @foreach($technology['technology_list'] as $tech)
                  <li class="fs-sm d-flex align-items-center">
                    <span class="resume__technology-icon d-block">
                      <i
                        title="{{get_the_title($tech)}}"
                        class="{{get_field('fa_icon_class', $tech) ?get_field('fa_icon_class', $tech) :
                        'fas fa-file-code'}} text-dark"
                      ></i>
                    </span>
                    {{get_the_title($tech)}}
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach

          @if($resume['accomplishments'])
            <div class="p-4 border-bottom">
              <h6 class="mb-1 text-white fw-semibold">Accomplishments</h6>
              <ul class="mb-0">
                <li class="text-dark fw-semibold">{{wp_count_posts()->publish}} blog posts and counting</li>
                @foreach($resume['accomplishments'] as $accomplishment)
                  <li class="text-dark fw-semibold">{{$accomplishment['item']}}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </aside>

        <div class="resume__main-content p-4 col-12 col-lg-9 bg-white">
          <h2 class="resume-title">Brandon Parker</h2>
          <p class="resume-location">
            <i class="fas fa-map-marker-alt fa-lg me-2"></i> {{$resume['location']}}
          </p>

          <div class="mb-4">
            <p class="m-0">{{$resume['intro']}}</p>

            <ul class="list-unstyled ps-3 mt-2">
              @foreach($resume['intro_points'] as $point)
                <li class="d-flex align-items-center my-1">
                  <i class="fas fa-plus-circle text-dark me-2"></i>
                  <p class="m-0">{{$point['point']}}</p>
                </li>
              @endforeach
            </ul>
          </div>

          <div class="py-4">
            <h5 class="fw-bold mb-0">Experience</h5>
            @foreach($resume['experience'] as $experience)
              @include('partials.resume-more-info', [
                'item' => $experience,
                'type' => 'company'
              ])
            @endforeach
          </div>

          <div class="py-4">
            <h5 class="fw-bold mb-0">Projects</h5>
            @foreach($resume['projects'] as $project)
              @include('partials.resume-more-info', [
                'item' => $project,
                'type' => 'project'
              ])
            @endforeach
          </div>

          <div class="pt-4">
            <h5 class="fw-bold mb-0">Education</h5>
            @foreach($resume['education'] as $education)
              @include('partials.resume-more-info', [
                'item' => $education,
                'type' => 'school'
              ])
            @endforeach
          </div>

          {{-- Credentials --}}
          @include('partials.credentials')
        </div>
      </div>
    </div>
  </section>
@endsection
