{{--
  Template Name: Resume
--}}

@extends('layouts.app')

@section('content')
  @component('components.header', [
    'icon_class' => 'fas fa-file-code'
  ])
  @endcomponent

  <section class="resume demos spacer-small column-center">
    <div class="inner-container">
      <div class="resume-options">
        <p class="resume-options-icon pdf-friendly">
          <i class="fas fa-file-pdf"></i> PDF Friendly Version
        </p>

        <a class="resume-options-icon" href="{{$resume['resume_file']['url']}}" download>
          <i class="fas fa-download"></i> Download
        </a>
      </div>
      <div class="resume-content card no-hover">
        <aside>
          <div class="resume-links">
            <ul>
              @foreach($resume['links'] as $link)
                <li>
                  <a target="_blank" href="{{$link['link']['url']}}">{{$link['link']['title']}}</a>
                </li>
              @endforeach
            </ul>
          </div>

          <div class="resume-technologies">
            @foreach($resume['technologies'] as $technology)
              <div class="resume-technologies-container">
                <h5 class="m-0">{{$technology['title']}}</h5>

                <div class="resume-technologies-list">
                  @foreach($technology['technology_list'] as $tech)
                    @if(get_field('fa_icon_class', $tech))
                      <i title="{{get_the_title($tech)}}" class="{{get_field('fa_icon_class', $tech)}} resume-technologies-icon"></i>
                    @endif
                  @endforeach
                </div>

                @if(!$technology['hide_names'])
                  <ul class="resume-technologies-text-list">
                    @foreach($technology['technology_list'] as $tech)
                      <li>{{get_the_title($tech)}}</li>
                    @endforeach
                  </ul>
                @endif
              </div>
            @endforeach
          </div>

          @if($resume['accomplishments'])
            <div class="resume-accomplishments">
              <h5 class="m-0">Accomplishments</h5>
              <ul>
                <li>{{wp_count_posts()->publish}} and counting technical blog posts</li>
                @foreach($resume['accomplishments'] as $accomplishment)
                  <li>{{$accomplishment['item']}}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </aside>
        <div class="resume-main-content">
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
                <h5 class="resume-info-name m-0">
                  {{$experience['company']}}
                  @if($experience['tags'])
                    @foreach($experience['tags'] as $tag)
                      <span class="resume-info-badge badge">{{$tag['text']}}</span>
                    @endforeach
                  @endif
                </h5>
                <em class="resume-info-title">{{$experience['title']}} - {{$experience['date']}}</em>
                <p class="resume-info-description">{{$experience['description']}}</p>
              </div>

              @include('partials.resume.more-info', [ 'item' => $experience ])
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
        
              @include('partials.resume.more-info', [ 'item' => $project ])
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

              @include('partials.resume.more-info', [ 'item' => $education ])
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
