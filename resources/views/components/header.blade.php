<section class="archive-header column-center">
  <div class="inner-container">
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