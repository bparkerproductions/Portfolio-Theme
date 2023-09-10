<ul class="list-unstyled mb-2 d-flex {{$classes}}">
  @foreach( get_field('social_media', 'option') as $social )
    <li>
      <a
        aria-label="{{$social['title']}}"
        title="{{$social['title']}}"
        href="{{$social['link']}}"
      >
        <i class="{{$social['class']}} {{$iconColor}} fa-2x mx-1"></i>
      </a>
    </li>
  @endforeach
</ul>