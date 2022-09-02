<footer class="footer column-center">
  <div class="inner-container">

    {{-- Footer Top --}}
    <div class="list-container footer-top spacer">
      @foreach($footer_lists as $list)
        <div class="footer-col">
          @if($list['header'])
            <h6 class="white">{{$list['header']}}</h6>
          @endif
          <ul class="list">
            @foreach($list['link'] as $link)
              <li class="white">
                <a href="{{$link['item']['url']}}">
                  {{$link['item']['title']}}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">
      <p class="footer-item">{{$copyright_text}}</p>

      <a href="mailto:bparkerproductions@gmail.com" title="bparkerproductions@gmail.com" class="white footer-item">
        <i class="fas fa-envelope"></i>bparkerproductions@gmail.com
      </a>

      <a href="{{$resume_link}}" class="white">
        <i class="fas fa-file-code"></i>Resume
      </a>
    </div>
  </div>
</footer>
