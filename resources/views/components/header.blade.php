<section class="archive-header bubble-header column-center">
  <div class="container">
    <h2 class="header">
      @if($icon_class)
        <i class="{{$icon_class}} header-icon"></i>
      @endif
      {!!APP::title()!!}
    </h2>
    <div class="subtitle-container">
      {!! $slot !!}
    </div>
  </div>
</section>