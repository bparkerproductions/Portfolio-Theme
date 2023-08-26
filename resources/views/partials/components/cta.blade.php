<div class="overflow-hidden">
  <div class="bg-circle bg-circle--large bg-circle--white
  bg-circle--bottom-left bg-circle--opacity-low bg-circle--fill-white"></div>

  <h2 class="text-white">{{$cta_header}}</h2>

  <p class="text-white">
    I am most active on <a href="https://www.linkedin.com/in/bparkerproductions/">Linked In</a>. Send me a message!
    Alternatively, you can
    <a
      class="text-white text-decoration-underline"
      href="mailto:bparkerproductions@gmail.com?subject=I%20came%20across%20your%20portfolio%20...">email me directly
  </p>

  <ul class="list-unstyled mb-0 mt-3">
    @foreach( get_field('social_media', 'option') as $social )
      <a href="{{$social['link']}}"">
        <i class="{{$social['class']}} fa-2x text-white mx-1"></i>
      </a>
    @endforeach
  </ul>
</div>