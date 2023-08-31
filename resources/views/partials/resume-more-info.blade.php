<div class="py-3">
  <div class="flex-column flex-lg-row d-flex align-items-start align-items-lg-center">
    <h4 class="text-dark mb-0 me-2">{{$item[$type]}}</h4>

    <div class="my-1">
      @if(isset($item['tags']) && $item['tags'])
        @foreach($item['tags'] as $tag)
          <span class="badge bg-dark mx-1">{{$tag['text']}}</span>
        @endforeach
      @endif
    </div>
  </div>

  <div class="flex-column flex-xl-row d-flex align-items-start align-items-xl-end">
    <em class="text-dark-75 fs-sm">{{$item['title']}} - {{$item['date']}}</em>
    @if($item['technologies'])
      <div class="ms-0 ms-xl-3 mt-1">
        @foreach($item['technologies'] as $tech)
          <i class="{{get_field('fa_icon_class', $tech)}} resume__technology-icon me-2"></i>
        @endforeach
      </div>
    @endif
  </div>

  <p class="mb-2">{{$item['description']}}</p>

  <ul class="list-unstyled ms-3">
    @foreach($item['points'] as $point)
      <li class="d-flex align-items-center">
        <i class="fas fa-plus-circle me-2"></i>
        <p class="m-0">{{$point['item']}}</p>
      </li>
    @endforeach
  </ul>

  @if($item['link'])
    <a class="btn btn-dark rounded-1 badge py-2" target="_blank" href="{{$item['link']['url']}}">
      <i class="fas fa-external-link-alt me-2"></i><span>See Project</span>
    </a>
  @endif
</div>
