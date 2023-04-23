@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @component('components.header', [
      'icon_class' => false
    ])
      <p>Learn more about me and how I can help you</p>
    @endcomponent
    <article class="column-center spacer">
      <div class="container page-content entry-content">
        @include('partials.content-page')
      </div>
    </article>
    @if(is_page('About Me'))
      {{-- CTA Section --}}
      @include('partials.global.cta')
    @endif
  @endwhile
@endsection
