<div class="resume-more-info">
  <div class="resume-more-info-text">
    <div class="resume-more-info-icon-container">
      <i class="fas fa-caret-up resume-more-info-icon"></i>
    </div>
    <span>More Info</span>
  </div>
  <div class="resume-more-info-content card no-hover hide">
    <div class="body">
      @if($item['technologies'])
        <div class="resume-more-info-tech">
          @foreach($item['technologies'] as $tech)
            <i class="{{get_field('fa_icon_class', $tech)}} resume-technologies-icon"></i>
          @endforeach
        </div>
      @endif
      
      <ul class="resume-more-info-points">
        @foreach($item['points'] as $point)
          <li>
            <i class="fas fa-plus-circle point-icon"></i>
            <p class="m-0">{{$point['item']}}</p>
          </li>
        @endforeach
      </ul>

      @if($item['link'])
        <a class="resume-more-info-link" target="_blank" href="{{$item['link']['url']}}">
          <i class="fas fa-external-link-alt"></i><span>See Project</span>
        </a>
      @endif
    </div>
  </div>
</div>