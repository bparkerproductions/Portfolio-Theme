<footer class="footer column-center mt-5 overflow-hidden position-relative">
    <div class="bg-circle bg-circle--white bg-circle--bottom-left bg-circle--large"></div>

    {{-- Footer Top --}}
    <div class="py-0 py-xl-5 mb-5 w-100 d-flex justify-content-center flex-column flex-xl-row">
      @foreach( get_field('footer_lists', 'option') as $list )
        <div class="px-5 pt-5">
          @if($list['header'])
            <h4 class="mb-3">{{$list['header']}}</h4>
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
      <ul class="list-unstyled mb-2">
        @foreach( get_field('social_media', 'option') as $social )
          <a href="{{$social['link']}}"">
            <i class="{{$social['class']}} fa-2x text-dark mx-1"></i>
          </a>
        @endforeach
      </ul>
      <p class="mb-0">Bparkerproductions @ {{date("Y")}}</p>
    </div>
</footer>
