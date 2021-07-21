<section class="image-gallery spacer column-center">
  <div class="header-container">
    @if($gallery_title)
      <h2 class="blue title">{{$gallery_title}}</h2>
    @endif

    @if($gallery_desc)
      <p class="gallery-description">{{$gallery_desc}}</p>
    @endif
  </div>

  @if($gallery)
    <div class="gallery-container">
      @foreach($gallery as $image)
        <div class="image-container">
          <a data-caption="{{$image['description']}}"
          data-fancybox="gallery" href="{{$image['image']}}">
            <img src="{{$image['image']}}">
          </a>
          @if($image['description'])
            <p class="caption">
              {{$image['description']}}
            </p>
          @endif
        </div>
      @endforeach
    </div>
  @endif
</section>