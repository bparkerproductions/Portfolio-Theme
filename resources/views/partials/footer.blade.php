<footer class="footer column-center mt-5 overflow-hidden position-relative">
    <div class="bg-circle bg-circle--white bg-circle--bottom-left bg-circle--large"></div>

    {{-- Footer Top --}}
    <div class="py-0 py-xl-5 mb-5 w-100 d-flex justify-content-center flex-column flex-xl-row">
      @foreach($footer_lists as $list)
        <div class="px-5 my-3">
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
    <div class="w-100 px-5 py-3 d-flex justify-content-center">
      <p class="mb-0">Bparkerproductions @ {{date("Y")}}</p>
    </div>
</footer>
