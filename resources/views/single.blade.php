@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @component('components.header', [
      'icon_class' => false
    ])
      @if(get_post_type() == 'projects')
        @if($project_link)
          <a href="{{$project_link}}">
            See {!! $project_title !!} Live
          </a>
        @endif
      @endif
      @if(get_post_type() == 'demos')
        <p>{{$demo_description}}</p>
      @endif
    @endcomponent
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
