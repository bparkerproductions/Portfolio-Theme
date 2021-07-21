<section id="projects-container" class="spacer column-center projects">
  <div class="inner-container">
    <div class="projects-section-header">
      <h2 class="blue title">{{$projects_title}}</h2>
    </div>

    <div class="projects-section">
      @foreach($all_projects as $id)
        @include('partials.global.project-preview')
      @endforeach
    </div>

    <div class="bottom-link-container">
      <a class="link black" href="{{$bottom_link}}">
        <i class="fas fa-arrow-right"></i>
        {{$bottom_link_text}}
      </a>
      <a class="link black" href="{{$site_link}}">
        <i class="fas fa-arrow-right"></i>
        {{$site_link_text}}
      </a>
    </div>

    <div class="bottom-button-container">
      <a href="{{$projects_link}}">
        <button class="button large black">
          {{$projects_link_text}}
          <i class="fas fa-caret-right"></i>
        </button>
      </a>
    </div>
  </div>
</section>