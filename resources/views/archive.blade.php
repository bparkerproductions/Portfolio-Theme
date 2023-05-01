{{--
  Template Name: Archive Template
--}}

@extends('layouts.app')

@section('content')

  {{-- Single Project Head --}}
  @component('components.header')
    <p>See all {{single_cat_title()}} posts and media.</p>
  @endcomponent

  @include('partials.blog-categories')

  <div class="entry-content spacer-small column-center">
    <div class="container">
      <div class="posts-container">
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-'.get_post_type(), [
            'show_meta' => true
          ])
        @endwhile
      </div>
    </div>
  </div>
@endsection