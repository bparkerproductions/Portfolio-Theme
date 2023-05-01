@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header')
    <p class="text-white">{{$blog_description}}</p>
  @endcomponent

  {{-- Category list --}}
  @include('partials.blog-categories')

  <section class="entry-content spacer-small column-center">
    <div class="container">
      <div class="row">
        @while(have_posts()) @php the_post() @endphp
          <div class="col-6 mb-5">
            @include('partials.content-'.get_post_type(), [
              'show_meta' => true
            ])
          </div>
        @endwhile
      </div>
    </div>
  </section>
@endsection