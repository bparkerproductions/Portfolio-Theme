@php
  $bgImage = 'background-image: url(' . $hero_bg_image . ');';
@endphp

<section class="bg-mountain-blue">
  <div class="hero lax"
  data-lax-translate-y="0 0, 1000 -250" style="{{$bgImage}}">
    <canvas id="snowstorm"></canvas>
    <div class="inner-container">
      <div class="content-container lax"
      data-lax-translate-y="0 0, 750 -250">

      <div class="intro-container">
        <h1 class="hero-title">{!! $hero_title !!}</h1>
      </div>

        <div class="hero-cards-container">
          <div class="hero-cards">
            @foreach($hero_blurbs as $card)
              <div class="hero-card">
                <div class="icon-container">
                  <i class="{{$card['icon']}}"></i>
                </div>
                <h6>{{$card['title']}}</h6>
                <p class="subtitle">{{$card['subtitle']}}</p>
              </div>
            @endforeach
          </div>

          <div class="button-container hard-center">
            <a>
              <button class="button black rotate projects-button">
                {{$hero_button_text}}
                <i class="fas fa-caret-right"></i>
              </button>
            </a>
          </div>
        </div>
      </div>

      <div class="toggle-more goto-about-me hard-center">
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>
  </div>
</section>