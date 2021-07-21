<div class="card col">
  <div class="head">
    <h5 class="category">Demo {{$key+1}}</h5>
  </div>
  <div class="body">
    <h5 class="title blue">
      {{$post->post_title}}
    </h5>

    @if(get_field('technologies_list', $post->ID))
      @include('partials.global.tech-list', [
        'technologies_list' => get_field('technologies_list', $post->ID),
        'classes' => 'minimal'
      ])
    @endif

    <p class="desc">
      {!! get_the_excerpt($post->ID) !!}
    </p>
  </div>
  <div class="link-container">
    <a class="clickable-link" href="{{get_the_permalink($post->ID)}}"></a>
  </div>
</div>