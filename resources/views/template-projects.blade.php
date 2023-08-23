{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  <section id="all-projects" class="header-transparent-dark bg-gray-400">
      @foreach(get_field('all_projects') as $id)
        @php $clientProjects = get_field('client_projects', $id); @endphp
        <article
          class="project py-5 d-flex align-items-center"
          data-bg-color="{{$clientProjects['color']}}"
        >
          <div class="container">

            {{-- Header Information --}}
            <header class="mb-3">
              <div class="d-flex align-items-center mb-1">
                @if($clientProjects['is_featured'])
                  <p class="badge bg-secondary mb-0 me-3 py-2 px-3 rounded-0">Featured</p>
                @endif
                <div class="icon-container">
                  @foreach($clientProjects['tech'] as $techID)
                    @if (get_field('fa_icon_class', $techID))
                      <i class="{{get_field('fa_icon_class', $techID)}} project__icon fa-lg me-2"></i>
                    @endif
                  @endforeach
                </div>

              </div>
              <h1 class="mb-0 project__title" title="{!! get_the_title($id) !!}">{!! get_the_title($id) !!}</h1>
            </header>

            <div class="row px-3">
              <div class="col-4 position-relative gx-0 project__preview-image">
                <div
                  class="absolute-fill project__preview-image--overlay"
                  style="background-color: {{$clientProjects['color']}}"></div>
                <img
                  class="rounded-0"
                  src="{{TemplateProjects::featuredImage($id)}}"
                  alt="The logo for the {{get_the_title($id)}} website."
                />
                
              </div>
              <div class="col-8 rounded-end bg-white">
                <header>
                  <div class="d-flex align-items-center mb-1 p-3 border-bottom bg-gray-100">
                    <p class="project__duration text-dark-50 fw-normal fs-small mb-0">
                      {{$clientProjects['duration']}}
                    </p>

                    @if ($clientProjects['filter_tags'])
                      @foreach ($clientProjects['filter_tags'] as $tag)
                        <span class="badge bg-primary ms-2">{{$tag['tag']}}</span>
                      @endforeach
                    @endif

                  </div>

                  <div class="p-3">
                    <h6 class="fw-bold mb-1 text-dark-75">About Them</h6>
                    <p class="mb-2 project__description">{{get_the_excerpt($id)}}</p>

                    @if ($clientProjects['project_link'])
                      <a
                        target="_blank"
                        class="btn btn-sm btn-dark px-3"
                        href="{{$clientProjects['project_link']['url']}}"
                      >
                        See Site Live
                      </a>
                    @endif
                  </div>

                  <div class="p-3 border-top">
                    @if ($clientProjects['what_i_did'])
                        <h6 class="fw-bold mb-1 text-dark-75">What I Did</h6>
                        <p class="mb-2 project__description">{{$clientProjects['what_i_did']}}</p>
                    @endif

                    <div class="project__goals">
                      <ul class="list-styled ms-4">
                        @foreach ($clientProjects['goals'] as $goal)
                          <li class="my-1 text-dark-75">{{$goal['goal']}}</li>
                        @endforeach
                      </ul>
                    </div>
                </div>
                </header>
              </div>

            </div>

            <div class="project__gallery__container row mt-3 px-1">
              @if ($clientProjects['gallery'])
                @foreach ($clientProjects['gallery'] as $img)
                  <div class="{{$img['col_width']}} position-relative mb-4">
                    <img
                      class="project__gallery__img rounded shadow w-100"
                      alt="{{$img['image_description']}}"
                      src="{{$img['image']['url']}}"
                    />
                    <p class="mb-0 mt-3 text-dark-50 mt-2 fs-small project__gallery__image">
                      {{$img['image_description']}}
                    </p>
                  </div>
                @endforeach
              @endif
            </div>

            {{-- <section class="project__content pt-4">
              @php echo get_post_field('post_content', $id) @endphp
            </section> --}}
          </div>
        </article>
      @endforeach
  </section>

@endsection
