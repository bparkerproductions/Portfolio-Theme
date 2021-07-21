@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header', [
    'icon_class' => 'fas fa-newspaper'
  ])
    <p>{{$blog_description}}</p>
  @endcomponent

  @include('partials.category-list')

  <div class="entry-content spacer-small column-center">
    <div class="inner-container">
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