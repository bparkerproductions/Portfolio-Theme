<div class="testimonial my-3 mt-5">
  <div>
    <i class="fas fa-quote-left text-dark fa-2x"></i>
    <p class="fw-light fw-light fst-italic fs-3">{{get_field('text', $testimonial)}}</p>
  </div>

  <div class="d-flex">
    @if (get_field('name', $testimonial))
      <p>
        <i class="fas fa-minus me-2 mt-1 text-dark"></i>
        <span class="fw-bold">{{get_field('name', $testimonial)}}</span>
      </p>
    @endif

    @if (get_field('company', $testimonial))
      <p>, <span class="fst-italics">{{get_field('company', $testimonial)}}</span></p>
    @endif
  </div>
</div>