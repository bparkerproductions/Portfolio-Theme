<footer class="footer column-center mt-5">
    {{-- Footer Top --}}
    <div class="container">
      <div class="list-container py-5 row">
        @foreach($footer_lists as $list)
          <div class="footer-col col">
            @if($list['header'])
              <h4 class="white">{{$list['header']}}</h4>
            @endif
            <ul class="list list-unstyled">
              @foreach($list['link'] as $link)
                <li>
                  <a href="{{$link['item']['url']}}" class="text-dark">
                    {{$link['item']['title']}}
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        @endforeach
      </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom bg-info w-100 px-5 py-3">
      <div class="row">
        <div class="col-2">
          <p class="mb-0 text-white fw-bold">Bparkerproductions @ {{date("Y")}}</p>
        </div>

        {{-- <a href="mailto:bparkerproductions@gmail.com" title="bparkerproductions@gmail.com" class="white footer-item">
          <i class="fas fa-envelope"></i>bparkerproductions@gmail.com
        </a> --}}

        <div class="col-10">
          <a href="{{$resume_link}}" class="text-white">
            <i class="fas fa-file-code text-secondary fa-lg me-2"></i>Resume
          </a>
        </div>
      </div>
    </div>
</footer>
