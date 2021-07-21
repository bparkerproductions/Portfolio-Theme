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
        </div>
        <aside>
          <div class="resume-links">
            <ul>
              @foreach($resume['links'] as $link)
                <li>
                  <a href="{{$link['link']['url']}}">{{$link['link']['title']}}</a>
                </li>
              @endforeach
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection
