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
        
          <h1 class="mb-0" title="{{get_the_title($id)}}">{{get_the_title($id)}}</h1>

          <div class="row">

            {{-- Image --}}
            <div class="col-6">

                {{-- <div class="row"> --}}
                {{-- <div class="project__gallery__container row"> --}}
                  <div class="card h-auto mt-3 py-4">
                    <div class="card-body row">
                      <div class="col-6">
                        <img class="w-100 rounded shadow" src="{{get_the_post_thumbnail_url($id)}}" />
                      </div>
                      <div class="col-6">
                        <header>
                          <p class="text-black-50 fw-normal fs-small mb-1">{{get_field('client_projects', $id)['duration']}}</p>
                      
                          <p class="mb-0">{{get_the_excerpt($id)}}</p>
                        </header>
                      </div>

                    </div>


                    {{-- @if (get_field('client_projects', $id)['featured_image_description'])
                      <p class="mb-0 mt-3 text-black-50 mt-2 fs-small">{{get_field('client_projects', $id)['featured_image_description']}}</p>
                    @endif --}}
                  </div>

                  <div class="position-relative project__gallery">
                    <div class="prev-arrow project__gallery__arrow fa-2x text-primary">
                      <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="project__gallery__container py-4 mx-5 row">
                      @if (get_field('client_projects', $id)['gallery'])
                        @foreach (get_field('client_projects', $id)['gallery'] as $img)
                          <div class="project__gallery__slide {{$img['col_width']}}">
                            <div class="d-flex justify-content-center my-3">
                              <img class="rounded shadow project__gallery__img" src="{{$img['image']['url']}}" />
                              {{-- <p class="mb-0 mt-3 text-black-50 mt-2 fs-small">{{$img['image_description']}}</p> --}}
                            </div>
                          </div>
                        @endforeach
                      @endif
                    </div>
                    <div class="next-arrow project__gallery__arrow fa-2x text-primary">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>

                  
                {{-- </div> --}}
              {{-- </div> --}}
              
              {{-- <div class="project__img-container position-relative">
                <img class="shadow rounded w-100 external-link" src="{{get_the_post_thumbnail_url($id)}}" />
                <a target="_blank" class="project__external-link" href="{{get_field('client_projects', $id)['project_link']['url']}}">
                  <i class="fas fa-external-link-alt"></i>
                  <span class="link-text">
                    {{get_field('client_projects', $id)['project_link']['title']}}
                  </span>
                </a>
              </div> --}}
            </div>

            {{-- Content --}}
            <div class="col-6 py-4 ps-5">
              <div class="list-container">
                <p class="fw-bold mb-0 h5 text-dark">Goals</p>
                <ul class="list-styled ms-4">
                  @foreach (get_field('client_projects', $id)['goals'] as $goal)
                    <li class="my-1">{{$goal['goal']}}</li>
                  @endforeach
                </ul>
              </div>
             

              

              

              {{-- Toggle --}}
              {{-- <button class="btn text-dark fw-normal d-flex align-items-center">
                See More
                <i class="fas fa-angle-down ms-2"></i>
              </button> --}}

              <section class="mt-4 pt-4 border-top d-none">
                @php echo get_post_field('post_content', $id) @endphp
              </section>
            </div>
          </div>
        </article> 
      @endforeach
    </div>
  </section>

@endsection
