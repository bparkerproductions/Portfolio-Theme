<section class="hero position-relative overflow-hidden">
  <div class="bg-circle bg-circle--bottom-left bg-circle--large"></div>
  <div class="bg-circle bg-circle--white bg-circle--thick bg-circle--top-right bg-circle--large"></div>
  <div class="container">
    <h1 class="text-white">{!!APP::title()!!}</h1>
    <div>
      {!! $slot !!}
    </div>
  </div>
</section>