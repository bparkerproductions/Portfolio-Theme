{{--
  Template Name: Archive Template
--}}

@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header', [
    'icon_class' => 'fas fa-pencil-alt'
  ])
    <p>See all {{single_cat_title()}} posts and media.</p>
  @endcomponent

  @include('partials.category-list')
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