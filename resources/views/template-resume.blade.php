{{--
  Template Name: Resume
--}}

@extends('layouts.app')

@section('content')
  @component('components.header', [
    'icon_class' => 'fas fa-file-code'
  ])
    <p>Resume</p>
  @endcomponent

  <section class="resume demos spacer-small column-center">
    <div class="inner-container demos-section">
      <p>Resume</p>
    </div>
  </section>
@endsection
