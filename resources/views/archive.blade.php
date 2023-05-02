{{--
  Template Name: Archive Template
--}}

@extends('layouts.app')

@section('content')

  {{-- Single Project Head --}}
  @component('components.header')
    <p class="text-white">See all {{single_cat_title()}} posts and media.</p>
  @endcomponent

  @include('partials.blog-categories')

  <section class="entry-content position-relative mt-4">
    <div class="bg-circle bg-circle--top-left bg-circle--thick"></div>
    <div class="bg-circle bg-circle--large bg-circle--secondary"></div>
    <div class="container">
      <ul class="list-unstyled row">
        @while(have_posts()) @php the_post() @endphp
          <div class="col-12 col-lg-6 mb-5">
            @include('partials.content-'.get_post_type())
          </div>
        @endwhile
      </ul>
    </div>
  </section>
@endsection