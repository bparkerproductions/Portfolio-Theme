@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header')
    <p class="text-white">{{$blog_description}}</p>
  @endcomponent

  {{-- Category list --}}
  <section class="pt-4 pb-5 container blog-categories">
    <div class="d-flex flex-wrap flex-xl-nowrap">
      <a 
        class="{{!single_cat_title('', false) ? 'selected' : ''}} {{$blog_active}} blog-categories__category me-2 me-xl-4 badge btn btn-primary px-3 py-2 rounded-5 my-2 my-xl-0" 
        href="{{$blog_link}}"
      >
        All Categories
      </a>
      @foreach($category_list as $cat)
        @if($cat->count >= 3)
          <a 
            href="{{get_category_link($cat->cat_ID)}}"
            class="{{Archive::isActive($cat)}} blog-category__category me-2 badge btn btn-secondary px-3 py-2 rounded-5 my-2 my-xl-0"
          >
            {{$cat->name}} <span class="blog-categories__count badge bg-white rounded-5 text-dark ms-2">{{$cat->count}}</span>
          </a>
        @endif
      @endforeach
    </div>
  </section>

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