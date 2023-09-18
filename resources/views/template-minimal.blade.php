{{--
  Template Name: Minimal
--}}

@extends('layouts.minimal', [
  $navbarClass = 'd-none'
])

@section('content')
  <section class="py-5">
    @while(have_posts()) @php the_post() @endphp
      <div class="container">
        @php the_content() @endphp
      </div>
    @endwhile
  </section>
@endsection