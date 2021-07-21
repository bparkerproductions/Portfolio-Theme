{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  @component('components.header', [
    'icon_class' => 'fas fa-file-code'
  ])
    <p>{{$hero_description}}</p>
  @endcomponent

  <section class="all-projects projects spacer-small column-center">
    <div class="inner-container projects-section">
      @foreach($all_projects as $id)
        @include('partials.global.project-preview')
      @endforeach
    </div>
  </section>

  @include('partials.global.code-demo-preview')
@endsection
