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
    <div class="container">
      <h5 class="header">View {{count($all_projects)}} Projects</h5>
      <div class="projects-section">
        @foreach($all_projects as $id)
          @include('partials.global.project-preview')
        @endforeach
      </div>
    </div>
  </section>

@endsection
