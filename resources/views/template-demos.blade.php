{{--
  Template Name: All Demos
--}}

@extends('layouts.app')

@section('content')
  @component('components.header', [
    'icon_class' => 'fas fa-file-code'
  ])
    <p>{{$demo_description}}</p>
  @endcomponent

  <section class="all-demos demos spacer-small column-center">
    <div class="inner-container demos-section">
      <p class="demo-count">{{count($demo_loop->posts)}} demos</p>
      @foreach($demo_loop->posts as $key=>$post)
        @include('partials.demo-card')
      @endforeach
    </div>
  </section>
@endsection
