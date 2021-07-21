<div class="column-center spacer">
  <div class="inner-container entry-content">
    @include('partials.global.tech-list', [
      'technology_list' => $technologies_list,
      'classes' => ''
    ])

    @if($demo_image)
      <div class="project-demo mb-medium">
        <img src="{{$demo_image}}"
            alt="Project Demo for {{get_the_title(get_the_ID())}}">
      </div>
    @endif

    <article class="demo-content">
      @php the_content(); @endphp
    </article>

    @if($related_media)
      @include('partials.global.related-media', [
        'related_media' => $related_media
      ])
    @endif
  </div>
</div>