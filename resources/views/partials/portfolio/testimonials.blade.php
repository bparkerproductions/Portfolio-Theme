<section class="testimonials column-center spacer">
  <div class="inner-container testimonials-container">

    <div class="slider-toggle-arrows">
      <div class="previous toggle">
        <i class="fas fa-chevron-left"></i>
      </div>
      <div class="next toggle">
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>

    {{-- Testimonials --}}
    <div class="slider-container {{$slider_classes}}">
    @foreach($testimonials as $testimonial)
      <div class="testimonial col card">
        <div class="head blue">
          <h5 class="category">{{get_field('name', $testimonial)}}</h5>
        </div>
        <div class="content body">
          <div class="inner-content">
            <div class="left-quote-container">
              <i class="fas fa-quote-left"></i>
            </div>
            <div class="inner-content">
              <p class="{{get_field('classes', $testimonial)}}">
                {!! get_field('text', $testimonial) !!}
              </p>
            </div>
          </div>
          @include('partials.portfolio.client-info')
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>