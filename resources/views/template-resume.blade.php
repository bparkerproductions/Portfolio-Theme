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
      <div class="resume-content card">
        <div class="resume-main-content">
          <h2 class="resume-title">Brandon Parker</h2>

          <div class="resume-intro">
            <p>{{$resume['intro']}}</p>
          </div>
        </div>
        <aside>
          Col 2
        </aside>
      </div>
    </div>
  </section>
@endsection
