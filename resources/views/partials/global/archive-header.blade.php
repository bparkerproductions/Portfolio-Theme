<section class="archive-header column-center">
  <div class="inner-container">
    <h1>{!!APP::title()!!}</h1>
    @if($project_link)
      <div class="link-container">
        <a href="{{$project_link}}">
          See {!!APP::title()!!} Live
        </a>
        </h3>
      </div>
    @endif
  </div>
</section>