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

            {{-- Header Information --}}
            <header class="mb-5">
              <div class="d-flex align-items-center mb-1">
                @if(get_field('client_projects', $id)['is_featured'])
                  <p class="badge bg-secondary mb-0 me-3 py-2 px-3 rounded-0">Featured</p>
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
            </header>

          
            <div class="row">

              {{-- Image --}}
              <div class="col-6">
                <div class="project__left--container">
                  <div class="card border-0 shadow">
                    <div class="card-body p-0 row">
                      <div class="col-4">
                        <img class="rounded-0 project__preview-image" src="{{get_the_post_thumbnail_url($id)}}" />
                      </div>
                      <div class="col-8 p-3 pe-5">
                        <header>
                          <div class="d-flex align-items-center mb-1">
                            <p class="project__duration text-dark-50 fw-normal fs-small mb-0">{{get_field('client_projects', $id)['duration']}}</p>

                            @if (get_field('client_projects', $id)['filter_tags'])
                              @foreach (get_field('client_projects', $id)['filter_tags'] as $tag)
                                <span class="badge bg-primary ms-2">{{$tag['tag']}}</span>
                              @endforeach
                            @endif
                          </div>
                      
                          <p class="mb-2 project__description">{{get_the_excerpt($id)}}</p>

                          <div class="project__goals">
                            <ul class="list-styled ms-4">
                              @foreach (get_field('client_projects', $id)['goals'] as $goal)
                                <li class="my-1 text-dark-75">{{$goal['goal']}}</li>
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
                    <div class="project__gallery__container py-4 row mt-4">
                      @if (get_field('client_projects', $id)['gallery'])
                        @foreach (get_field('client_projects', $id)['gallery'] as $img)
                          <div class="{{$img['col_width']}} position-relative">
                            <img class="rounded shadow project__gallery__img w-100" src="{{$img['image']['url']}}" />
                            <p class="mb-0 mt-3 text-dark-50 mt-2 fs-small project__gallery__image">{{$img['image_description']}}</p>
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
              <div class="col-6 px-5">
                <section class="project__right--container d-flex justify-content-center">
                  <div class="project__content col-10 card card-body px-5">
                    @php echo get_post_field('post_content', $id) @endphp
                  </div>
                </section>


            </div>
          </div>
        </article> 
      @endforeach
  </section>

@endsection
