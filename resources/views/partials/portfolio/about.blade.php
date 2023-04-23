<section id="about-container" class="column-center spacer about-section">
  <div class="container">
    <div class="top-row">
      <div class="content-container">
        <h1 class="blue mt-none">{{$about_title}}</h1>
        <p class="para">{!!$about_desc!!}</p>
        @include('partials.components.button', [
          'link' => $about_btn_link,
          'color' => 'black',
          'text' => $about_btn_text
        ])
      </div>

      <div class="technologies-container">
        <h3 class="blue tech-header">{{$technologies['header']}}</h3>
        <div class="technologies">
          @foreach($technologies['list'] as $id)
            <div class="tech-col hard-center {{TemplatePortfolio::isSpecialized($id)}}">
              <i class="{{ get_field('fa_icon_class', $id) }}"></i>
              <span class="tech-label">{{ get_the_title($id) }}</span>
              @if(TemplatePortfolio::isSpecialized($id))
                <div class="specialized-icon">
                  <i class="fas fa-star"></i>
                </div>
              @endif
            </div>

          @endforeach
        </div>
      </div>
    </div>
  </div>

  @include('blocks.content-rows')
</section>