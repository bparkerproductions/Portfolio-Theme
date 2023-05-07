{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  <section id="all-projects" class="no-header-padding">
    <div class="container">

      @foreach(get_field('all_projects') as $id)
        <article class="project py-5">
          <div class="d-flex align-items-center mb-2">
            @if(get_field('client_projects', $id)['is_featured'])
              <p class="badge bg-secondary mb-0 me-3">Featured</p>
            @endif
            <div class="icon-container">
              @foreach(get_field('client_projects', $id)['tech'] as $techID)
                @if (get_field('fa_icon_class', $techID))
                  <i class="{{get_field('fa_icon_class', $techID)}} fa-lg me-2"></i>
                @endif
              @endforeach
            </div>
            
          </div>
        
          <h1 class="mb-3" title="{{get_the_title($id)}}">{{get_the_title($id)}}</h1>

          <div class="row">

            {{-- Image --}}
            <div class="col-4">
              <div class="project__img-container position-relative">
                <img class="shadow rounded w-100 external-link" src="{{get_the_post_thumbnail_url($id)}}" />
                <a target="_blank" class="project__external-link" href="{{get_field('client_projects', $id)['project_link']['url']}}">
                  <i class="fas fa-external-link-alt"></i>
                  <span class="link-text">
                    {{get_field('client_projects', $id)['project_link']['title']}}
                  </span>
                </a>
              </div>
            </div>

            {{-- Content --}}
            <div class="col-8">
              <p class="mb-1">{{get_the_excerpt($id)}}</p>

              <header>
                <p class="text-black-50 fw-normal fs-small">{{get_field('client_projects', $id)['duration']}}</p>
            
                <div class="list-container">
                  <p class="fw-bold mb-0 h5 text-dark">Goals</p>
                  <ul class="list-styled ms-4">
                    @foreach(get_field('client_projects', $id)['goals'] as $goal)
                      <li class="my-1">{{$goal['goal']}}</li>
                    @endforeach
                  </ul>
                </div>
              </header>
            </div>
          </div>
        </article> 
      @endforeach
    </div>
  </section>

@endsection
