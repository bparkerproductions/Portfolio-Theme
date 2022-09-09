<article class="project">
  <div class="project-inner">
    @if(get_field('is_featured', $id))
      <div class="featured-icon">
        <i title="Featured Project" class="fas fa-star fa-lg black"></i>
      </div>
    @endif

    <div class="header-container">
      <h5 class="white project-title" title="{{get_field('title', $id)}}">{{get_field('title', $id)}}</h5>
      <div class="icon-container">
        @foreach(get_field('tech', $id) as $techID)
          <i class="{{get_field('fa_icon_class', $techID)}}"></i>
        @endforeach
      </div>
    </div>
    <div class="image-container">
      <img src="{{get_field('image', $id)}}">

      <div role="toggle" class="project-info">
        @if(get_field('link', $id))
          <div class="link-container">
            <a href="{{get_field('link', $id)}}">
              <i class="fas fa-external-link-alt"></i>
              <span class="link-text">See Site</span>
            </a>
          </div>
        @endif
        <div class="description">
          <h5 class="white description-title">{{get_field('title', $id)}}</h5>
          <p>{{get_field('description', $id)}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="button-wrap">
    @include('partials.components.button', [
      'link' => get_permalink($id),
      'color' => 'dark-blue',
      'text' => 'See Details'
    ])

    @if(get_field('link', $id))
      @include('partials.components.button', [
        'link' => get_field('link', $id),
        'color' => 'black',
        'text' => 'See Project'
      ])
    @endif
  </div>
</article>