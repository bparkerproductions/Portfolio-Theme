@php
$company = get_field('company', $testimonial);
$project = get_field('project', $testimonial);
$isDisabled = $company == "" ? 'disabled' : '';
@endphp

<div class="client-info ">
  <a class="client-company {{$isDisabled}}" href="{{$company}}">
    <i class="fas fa-briefcase"></i>
    <span class="link">
      Website
    </span>
  </a>

  {{-- Project Link --}}
  @if($project && !(get_post_type() == "projects"))
    <a class="project-link" href="{{get_permalink($project[0])}}">
      <i class="fas fa-laptop-code"></i>
      <span class="link">See Project</span>
    </a>
  @endif
</div>