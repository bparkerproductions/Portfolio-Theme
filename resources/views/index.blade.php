@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header')
    <p class="text-white">{{$blog_description}}</p>
  @endcomponent

  {{-- Category list --}}
  @include('partials.blog-categories')

  <div class="entry-content spacer-small column-center">
    <div class="container">
      <div class="posts-container">
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-'.get_post_type(), [
            'show_meta' => true
          ])
        @endwhile

        {!! the_posts_navigation([
          'prev_text' => 'More Posts',
          'next_text' => 'Previous Posts'
        ]) !!}
      </div>
    </div>
  </div>
@endsection