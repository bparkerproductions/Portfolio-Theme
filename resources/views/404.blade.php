@extends('layouts.app')

@section('content')
  @component('components.header', [
    'icon_class' => false
  ])
    <h5 class="white">
      <a href="{{get_home_url()}}">
        <i class="fas fa-lg fa-home ml-small"></i> Go Home
     </a>
    </h5>
  @endcomponent

  <div id="not-found" class="column-center">
    @if (!have_posts())
      <div class="container">
        <h1 class="shade-black">404</h1>
        <div class="icon-container">
        <h3>Sorry, but the page you were trying to view does not exist.</h3>
        <i class="fas fa-frown blue"></i>
        </div>

        <div class="link-container">

          <h6>Would you like to</h6>
          <ul>
            <li>
              <a class="link black" href="{{get_home_url()}}">
                <i class="fas fa-home blue"></i> Go To Home Page?
              </a>
            </li>
            <li>
              <a class="link black" href="{{$blog_link}}">
                <i class="fas fa-newspaper blue"></i> Go To Blog Posts?
              </a>
            </li>
            <li>
              <a class="link black" href="{{$projects_link}}">
                <i class="fas fa-laptop-code blue"></i> Go To Personal Projects?
              </a>
            </li>
          </ul>
        </div>
      </div>
    @endif
  </div>
@endsection
