<footer class="footer column-center pb-3 pt-4 pt-lg-5 position-relative overflow-hidden">

  @include('partials.bg-circle', [
    "properties" => ["bottom-left", "primary", "large"],
    "posTop" => 200
  ])
  @include('partials.bg-circle', [
    "properties" => ["top-right", "secondary"],
    "posTop" => 200,
    "posRight" => -70,
    "opacity" => 0.6,
  ])

  <div class="container">
    {{-- Footer Top --}}
    <div class="py-0 py-xl-5 mb-5 w-100 d-flex justify-content-center flex-column flex-xl-row">
      @foreach( get_field('footer_lists', 'option') as $list )
        <div class="px-0 px-xl-5 mt-5">
          @if($list['header'])
            <h2 class="mb-3 h4">{{$list['header']}}</h2>
          @endif
          <ul class="list list-unstyled">
            @foreach($list['link'] as $link)
              <li class="my-1">
                <a href="{{$link['item']['url']}}" class="text-body">
                  {{$link['item']['title']}}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>

    {{-- Footer Bottom --}}
    <div class="w-100 px-5 py-3 d-flex flex-column align-items-center">
      <ul class="list-unstyled mb-2 d-flex">
        @foreach( get_field('social_media', 'option') as $social )
          <li>
            <a href="{{$social['link']}}"">
              <i class="{{$social['class']}} fa-2x text-dark mx-1"></i>
            </a>
          </li>
        @endforeach
      </ul>
      <p class="mb-0">Bparkerproductions @ {{date("Y")}}</p>
    </div>
  </div>
</footer>
