<section class="project-content column-center">
  <div class="container spacer">

    {{-- Overview --}}
    <div class="content-section spacer-small">
      <h2 class="blue">Project Overview</h2>
      {!!$project_overview!!}
    </div>

    {{-- Image Gallery --}}
    @if($gallery)
      @include('partials.global.image-gallery')
    @endif

    {{-- Process --}}
    <div class="content-section spacer-small">
      <h2 class="blue">Process</h2>
      {!!$project_process!!}
    </div>

    {{-- Show Testimonial If there is one --}}
    @if($testimonials)
      <section class="testimonials">
        <div class="testimonials-container">
          @php echo do_shortcode( '[bp-testimonial id="' . $testimonials[0] . '"]') @endphp
        </div>
      </section>
    @endif

    {{-- Technologies --}}
    <div class="content-section spacer-small">
      <h2 class="blue">Technologies Used</h2>
      <div class="icon-container">
        @foreach($tech_list as $techID)
        <i class="{{get_field('fa_icon_class', $techID)}}"></i>
        @endforeach
      </div>
      {!!$project_technologies!!}
    </div>
  </div>
</section>