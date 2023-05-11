{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  <section id="all-projects" class="header-fluid-transparent">
      @foreach(get_field('all_projects') as $id)
        <article 
          style="background-color: {{get_field('client_projects', $id)['color']}};" 
          class="project py-5 d-flex align-items-center @if(get_field('client_projects', $id)['light']) light @endif"
        >
          <div class="container-fluid px-5">
            <div class="d-flex align-items-center mb-2">
              @if(get_field('client_projects', $id)['is_featured'])
                <p class="badge bg-secondary mb-0 me-3">Featured</p>
              @endif
              <div class="icon-container">
                @foreach(get_field('client_projects', $id)['tech'] as $techID)
                  @if (get_field('fa_icon_class', $techID))
                    <i class="{{get_field('fa_icon_class', $techID)}} project__icon fa-lg me-2"></i>
                  @endif
                @endforeach
              </div>
              
            </div>
          
            <h1 class="mb-0 project__title" title="{{get_the_title($id)}}">{{get_the_title($id)}}</h1>

            <div class="row">

              {{-- Image --}}
              <div class="col-6">

                <div class="project__left--container">
                  <div class="mt-3 py-4">
                    <div class="card-body row">
                      <div class="col-3">
                        <img class="w-100 rounded shadow" src="{{get_the_post_thumbnail_url($id)}}" />
                      </div>
                      <div class="col-9">
                        <header>
                          <div class="d-flex align-items-center mb-1">
                            <p class="text-black-50 fw-normal fs-small mb-0">{{get_field('client_projects', $id)['duration']}}</p>

                            @if (get_field('client_projects', $id)['filter_tags'])
                              @foreach (get_field('client_projects', $id)['filter_tags'] as $tag)
                                <span class="badge bg-primary ms-2">{{$tag['tag']}}</span>
                              @endforeach
                            @endif
                          </div>
                          
                      
                          <p class="mb-2">{{get_the_excerpt($id)}}</p>

                          <div class="project__goals">
                            {{-- <p class="fw-bold mb-0 h5 project__goals__header">Goals</p> --}}
                            <ul class="list-styled ms-4">
                              @foreach (get_field('client_projects', $id)['goals'] as $goal)
                                <li class="my-1">{{$goal['goal']}}</li>
                              @endforeach
                            </ul>
                          
                        </div>
                        </header>
                      </div>

                    </div>
                  </div>

                  {{-- <div class="position-relative project__gallery"> --}}
                    {{-- <div class="prev-arrow project__gallery__arrow fa-2x text-primary">
                      <i class="fas fa-angle-left"></i>
                    </div> --}}
                    <div class="project__gallery__container py-4 row">
                      @if (get_field('client_projects', $id)['gallery'])
                        @foreach (get_field('client_projects', $id)['gallery'] as $img)
                          <div class="{{$img['col_width']}} position-relative">
                            <img class="rounded shadow project__gallery__img w-100" src="{{$img['image']['url']}}" />
                            <p class="mb-0 mt-3 text-black-50 mt-2 fs-small project__gallery__image">{{$img['image_description']}}</p>
                          </div>
                        @endforeach
                      @endif
                    </div>
                    {{-- <div class="next-arrow project__gallery__arrow fa-2x text-primary">
                      <i class="fas fa-angle-right"></i>
                    </div> --}}
                  {{-- </div> --}}

                      
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
              </div>

              {{-- Content --}}
              <div class="col-6 py-4 ps-5">
                <div class="project__right--container">
                  <div class="project__right-container__header">
                    
                
                  {{-- Toggle --}}
                  {{-- <button class="btn text-dark fw-normal d-flex align-items-center">
                    See More
                    <i class="fas fa-angle-down ms-2"></i>
                  </button> --}}

                  <section class="mt-4 project__content">
                    @php echo get_post_field('post_content', $id) @endphp
                  </section>

                  {{-- <p class="project__see-more">See More</p> --}}
                </div>

              </div>
            </div>
          </div>
        </article> 
      @endforeach
  </section>

@endsection
