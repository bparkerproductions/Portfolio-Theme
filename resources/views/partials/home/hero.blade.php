<section class="home-hero">
  <div class="layout-two-columns">
    <div class="left-column col">
      <h2 class="title">{{ $home_hero['section_1_header'] }}</h2>
      @if($home_hero['text_section_1'])
        <p class="description">{{ $home_hero['text_section_1'] }}</p>
      @endif
      <div class="button-container mt-small">
        <a href="{{ $portfolio_link }}" class="portfolio-link">
          <button class="button border white">
            See Portfolio
          </button>
        </a>
      </div>
    </div>
    <div class="right-column col">
      <h2 class="title">{{ $home_hero['section_2_header'] }}</h2>
      @if($home_hero['text_section_2'])
        <p class="description">{{ $home_hero['text_section_2'] }}</p>
      @endif
      <div class="button-container mt-small">
        <a href="{{ $portfolio_link }}" class="scroll-down-home">
          <button class="button border white rotate">
            Learn More!
            <i class="fa fa-caret-right"></i>
          </button>
        </a>
      </div>
    </div>
  </div>
</section>