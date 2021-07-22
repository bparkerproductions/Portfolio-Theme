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
      <div class="resume-content card no-hover">
        <div class="resume-main-content">
          <h2 class="resume-title">Brandon Parker</h2>

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
                <h5 class="resume-info-name m-0">{{$experience['company']}}</h5>
                <em class="resume-info-title">{{$experience['title']}} - {{$experience['date']}}</em>
                <p class="resume-info-description">{{$experience['description']}}</p>
              </div>
            @endforeach
          </section>
        </div>
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
                      <i class="{{get_field('fa_icon_class', $tech)}} resume-technologies-icon"></i>
                    @endif
                  @endforeach
                </div>

                <ul class="resume-technologies-text-list">
                  @foreach($technology['technology_list'] as $tech)
                    <li>{{get_the_title($tech)}}</li>
                  @endforeach
                </ul>
              </div>
            @endforeach
          </div>

          <div class="resume-accomplishments">
            <h5 class="m-0">Accomplishments</h5>
            <ul>
              <li>{{wp_count_posts()->publish}} and counting technical blog posts</li>
              @foreach($resume['accomplishments'] as $accomplishment)
                <li>{{$accomplishment['item']}}</li>
              @endforeach
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection
