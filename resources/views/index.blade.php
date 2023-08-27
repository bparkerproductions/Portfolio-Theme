@extends('layouts.app')

@section('content')
  <section class="entry-content position-relative header-scrolled">
    <div class="bg-circle bg-circle--top-left bg-circle--thick"></div>
    <div class="bg-circle bg-circle--large bg-circle--secondary"></div>

    @include('partials.blog-categories')

    <div class="container">
      <ul class="row list-unstyled">
        @while(have_posts()) @php the_post() @endphp
          <div class="col-12 col-lg-6 mb-5">
            @include('partials.content-'.get_post_type())
          </div>
        @endwhile
        </ul>
    </div>
  </section>
@endsection