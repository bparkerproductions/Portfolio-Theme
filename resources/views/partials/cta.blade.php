<div class="overflow-hidden">
  @include('partials.bg-circle', [
    "properties" => ["large", "bottom-left", "fill-white"],
    "opacity" => 0.08
  ])

  <h2 class="text-white">{{get_field('cta_header', 'option')}}</h2>

  <p class="text-white">
    I am most active on
    <a href="https://www.linkedin.com/in/bparkerproductions/" target="_blank">Linked In</a>. Send me a message!
    Alternatively, you can
    <a
      class="text-white text-decoration-underline"
      target="_blank"
      href="mailto:bparkerproductions@gmail.com?subject=I%20came%20across%20your%20portfolio%20...">email me directly
    </a>
  </p>

  <a href="{{$resume_link}}" class="text-decoration-underline text-white" target="_blank"> Looking for my resume?</a>

  @include('partials.social-media', [
    'iconColor' => 'text-white',
    'classes' => 'mb-0 mt-3'
  ])
</div>