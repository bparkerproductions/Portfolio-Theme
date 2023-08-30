{{--
  Template Name: Resume
--}}

@extends('layouts.app')

@section('content')
  <section class="resume pt-6 header-scrolled">
    <div class="container">
      <div class="mb-3">
        <button class="pdf-friendly btn btn-dark me-3 fw-normal fs-sm">
          <i class="fas fa-file-pdf me-1"></i> PDF Friendly Version
        </button>

        <a class="fw-normal fs-sm text-dark" href="{{$resume['resume_file']['url']}}" download>
          <i class="fas fa-download"></i> Download
        </a>
      </div>


      <div class="resume__content border row">
        <aside class="col-3 bg-primary text-white p-0">
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

          <div class="resume__technologies">
            @foreach($resume['technologies'] as $technology)
              <div class="p-4 border-bottom">
                <h6 class="mb-1 text-dark fw-semibold">{{$technology['title']}}</h6>

                <ul class="list-unstyled mb-0">
                  @foreach($technology['technology_list'] as $tech)
                    <li class="fs-small d-flex align-items-center">
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
          </div>

          @if($resume['accomplishments'])
            <div class="p-4 border-bottom">
              <h6 class="mb-1 text-dark fw-semibold">Accomplishments</h6>
              <ul class="mb-0">
                <li>{{wp_count_posts()->publish}} blog posts and counting</li>
                @foreach($resume['accomplishments'] as $accomplishment)
                  <li>{{$accomplishment['item']}}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </aside>


        <div class="resume__main-content bg-gray-400 p-4 col-9">
          <h2 class="resume-title">Brandon Parker</h2>
          <p class="resume-location">
            <i class="fas fa-map-marker-alt fa-lg"></i> {{$resume['location']}}
          </p>

          <div class="resume-intro">
            <p class="m-0">{{$resume['intro']}}</p>

            <ul class="resume-intro-list">
              @foreach($resume['intro_points'] as $point)
                <li>
                  <i class="fas fa-plus-circle resume-intro-icon"></i>
                  <p class="m-0">{{$point['point']}}</p>
                </li>
              @endforeach
            </ul>
          </div>

          <section class="resume-section">
            <h3 class="resume-header">Experience</h3>
            @foreach($resume['experience'] as $experience)
              <div class="resume-info">
                <h4 class="text-dark mb-0">
                  {{$experience['company']}}
                  @if($experience['tags'])
                    @foreach($experience['tags'] as $tag)
                      <span class="resume-info-badge badge">{{$tag['text']}}</span>
                    @endforeach
                  @endif
                </h4>
                <em class="resume-info-title">{{$experience['title']}} - {{$experience['date']}}</em>
                <p class="resume-info-description">{{$experience['description']}}</p>
              </div>
                @include('partials.resume-more-info', [ 'item' => $experience ])
            @endforeach
          </section>

          <section class="resume-section">
            <h3 class="resume-header">Projects</h3>
            @foreach($resume['projects'] as $project)
              <div class="resume-info">
                <h5 class="resume-info-name m-0">{{$project['project']}}</h5>
                @if ($project['date'])
                  <em class="resume-info-title">{{$project['title']}} - {{$project['date']}}</em>
                @endif
                <p class="resume-info-description">{{$project['description']}}</p>
              </div>
        
              @include('partials.resume-more-info', [ 'item' => $project ])
            @endforeach
          </section>

          <section class="resume-section">
            <h3 class="resume-header">Education</h3>
            @foreach($resume['education'] as $education)
              <div class="resume-info">
                <h5 class="resume-info-name m-0">{{$education['school']}}</h5>
                <em class="resume-info-title">{{$education['title']}} - {{$education['date']}}</em>
                <p class="resume-info-description">{{$education['description']}}</p>
              </div>

              @include('partials.resume-more-info', [ 'item' => $education ])
            @endforeach
          </section>

          @if($resume['interests'])
            <section class="resume-section interests">
              <h3 class="resume-header">Interests</h3>

              <ul class="resume-more-info-points">
                @foreach($resume['interests'] as $interest)
                  <li>
                    <i class="fas fa-plus-circle point-icon"></i>
                    <p class="m-0">{{$interest['text']}}</p>
                  </li>
                @endforeach
              </ul>
            </section>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
