@extends('layouts.minimal')

@section('content')
  <section id="not-found" class="py-5 py-lg-7 header-scrolled">
    @if (!have_posts())
      <div class="container">
        <i class="fas fa-tired fa-4x mb-4 text-secondary"></i>
        <h1 class="text-dark">404 Page Not Found... Looks like you are lost</h1>

        <div class="mt-4 card card-body col-12 col-lg-6">

          <h6 class="text-dark fw-bold">Would you like to</h6>
          <ul class="list-unstyled ms-3">
            <li class="my-1">
              <a class="text-dark text-decoration-underline" href="{{get_home_url()}}">
                Go back to home?
              </a>
            </li>
            <li class="my-1">
              <a class="text-dark text-decoration-underline" href="{{$blog_link}}">
                View blog posts?
              </a>
            </li>
            <li class="my-1">
              <a class="text-dark text-decoration-underline" href="{{$projects_link}}">
                View all of my projects
              </a>
            </li>
            <li class="my-1">
              <a class="text-dark text-decoration-underline" href="{{$portfolio_link}}">
                View my portfolio
              </a>
            </li>
          </ul>

          <div class="bg-gray-200 border rounded p-3 position-relative">
            <a href="{{$resume_link}}" class="absolute-fill"></a>
            <p class="mb-0"><i class="fas fa-file-alt me-2"></i>View Resume</p>
          </div>
        </div>
      </div>
    @endif
    </section>
@endsection
