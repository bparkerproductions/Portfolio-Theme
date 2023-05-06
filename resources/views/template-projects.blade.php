{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  <section id="all-projects" class="no-header-padding">
    <div class="container">
      @foreach($all_projects as $id)
        <article class="project py-5">
          <div class="d-flex align-items-center mb-2">
            @if(get_field('is_featured', $id))
              <p class="badge bg-secondary mb-0">Featured</p>
            @endif
            <div class="icon-container ms-3">
              @foreach(get_field('tech', $id) as $techID)
                <i class="{{get_field('fa_icon_class', $techID)}} fa-lg me-2"></i>
              @endforeach
            </div>
          </div>
        
            <h1 class="mb-3" title="{{get_field('title', $id)}}">{{get_field('title', $id)}}</h1>

            <div class="row">
              <div class="col-4">
                <div class="project__img-container">
                  <img class="shadow rounded w-100" src="{{get_field('image', $id)}}" />
                  <a href="{{get_field('link', $id)}}">
                    <i class="fas fa-external-link-alt"></i>
                    <span class="link-text">See Site</span>
                  </a>
                </div>
              </div>
              <div class="col-8">
                <div class="description">
                  <h5 class="white description-title">{{get_field('title', $id)}}</h5>
                  <p>{{get_field('description', $id)}}</p>
                </div>
              </div>
            </div>

            <a href="{{get_permalink($id)}}" class="btn btn-primary btn-lg">See More</a>
        </article>
      @endforeach
    </div>
  </section>

@endsection
