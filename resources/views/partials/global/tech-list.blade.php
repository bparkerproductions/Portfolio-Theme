<div class="inline-icon-container {{$classes}}">
  @foreach($technologies_list as $techID)
  <i class="{{get_field('fa_icon_class', $techID)}}"></i>
  @endforeach
</div>