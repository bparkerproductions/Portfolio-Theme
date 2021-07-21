@if($item['has_dropdown'])
  <div class="hover-container">
    <div class="submenu">
      <ul>
        @foreach($item['dropdown'] as $subitem)
          <li>
            <a href="{{$subitem['link']['url']}}">
              {{$subitem['link']['title']}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endif