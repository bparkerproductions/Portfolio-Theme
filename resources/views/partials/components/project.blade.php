<header class="mb-3">
  <div class="d-flex align-items-center mb-1">
    @if($project['is_featured'])
      <p class="badge bg-secondary mb-0 me-3 py-2 px-3 rounded-0">Featured</p>
    @endif
    <div class="icon-container">
      @foreach($project['tech'] as $techID)
        @if (get_field('fa_icon_class', $techID))
          <i class="{{get_field('fa_icon_class', $techID)}} project__icon fa-lg me-2"></i>
        @endif
      @endforeach
    </div>

  </div>

  @if (isset($smallHeader) && $smallHeader)
    <h3 class="mb-0 project__title" title="{!! get_the_title($id) !!}">{!! get_the_title($id) !!}</h3>
  @else
    <h1 class="mb-0 project__title" title="{!! get_the_title($id) !!}">{!! get_the_title($id) !!}</h1>
  @endif
</header>

<div class="row px-0 px-lg-3">
  <div class="col-12 col-lg-4 position-relative gx-0 project__preview-image">
    <div
      class="absolute-fill project__preview-image--overlay"
      style="background-color: {{$project['color']}}"></div>
    <img
      class="rounded-0"
      src="{{TemplateProjects::featuredImage($id)}}"
      alt="The logo for the {{get_the_title($id)}} website."
    />
    
  </div>
  <div class="col-12 col-lg-8 project__information bg-white">
    <header>
      <div class="d-flex align-items-center mb-1 p-3 border-bottom bg-gray-100">
        <p class="project__duration text-dark-50 fw-normal fs-small mb-0">
          {{$project['duration']}}
        </p>

        @if (get_the_tags($id))
          @foreach (get_the_tags($id) as $tag)
            <span class="badge bg-primary ms-2">{{$tag->name}}</span>
          @endforeach
        @endif

      </div>

      <div class="p-3">
        <h6 class="fw-bold mb-1 text-dark-75">About Them</h6>
        <p class="mb-2 project__description">{{get_the_excerpt($id)}}</p>

        @if ($project['project_link'])
          <a
            target="_blank"
            class="btn btn-sm btn-dark px-3"
            href="{{$project['project_link']['url']}}"
          >
            See Site Live
          </a>
        @endif
      </div>

      <div class="p-3 border-top">
        @if ($project['what_i_did'])
          <h6 class="fw-bold mb-1 text-dark-75">What I Did</h6>
          <p class="mb-2 project__description">{{$project['what_i_did']}}</p>
        @endif

        <div class="project__goals">
          <ul class="list-styled ms-4">
            @foreach ($project['goals'] as $goal)
              <li class="my-1 text-dark-75">{{$goal['goal']}}</li>
            @endforeach
          </ul>
        </div>
    </div>
    </header>
  </div>

</div>

@if ($project['testimonial'])
  @foreach($project['testimonial'] as $testimonial)
    @include('partials.components.testimonial', [
      'testimonial' => $testimonial,
      'classes' => 'my-3 mt-5',
    ])
  @endforeach
@endif

<div class="project__gallery__container row mt-3 px-1">
  @if ($project['gallery'])
    @foreach ($project['gallery'] as $img)
      <div class="{{$img['col_width']}} project__gallery__col position-relative mb-4">
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