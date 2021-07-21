<div class="related-media">
  <div class="header-container">
    <h2 class="main-header">Related Media</h2>
  </div>

  <div class="card-container">
    @foreach($related_media as $id)
      <div class="col card">
        <div class="head">
          <h5 class="category">{{get_post_type($id)}}</h5>
        </div>

        <div class="body">
          <h5 class="title">{!! get_the_title($id) !!}</h5>

          @if(get_field('tech', $id))
            @include('partials.global.tech-list', [
              'technologies_list' => get_field('tech', $id),
              'classes' => 'minimal'
            ])
          @endif

          @if(get_field('related_description', $id))
            <p class="description">
              {{get_field('related_description', $id)}}
            </p>
          @endif
        </div>
        <div class="link-container">
          <a href="{{get_the_permalink($id)}}"></a>
        </div>
      </div>
    @endforeach
  </div>
</div>