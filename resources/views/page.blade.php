@extends('layouts.app', [
  $navbarClass = 'scrolled always-scrolled'
])

@section('content')
  <section class="entry-content position-relative pt-4 pt-sm-6">
    @include('partials.bg-circle', [
      "properties" => ["large", "secondary"],
      "posLeft" => -75
    ])

    <div class="container pt-5 pt-sm-6">
      <h1 class="mb-3">{!! get_the_title() !!}</h1>
      @php the_content() @endphp
    </div>
  </section>
@endsection