<nav class="primary-navigation column-center py-3 {{$class}}">

  <div class="container">
    <div class="content-container d-flex">

      {{-- Home link --}}
      <div class="me-4 me-sm-3">
        <a class="primary-navigation__logo d-flex" href="{{$home_item['url']}}">
          <i class="fab fa-js"></i>
        </a>
      </div>

      <ul class="d-flex flex-column flex-sm-row list-unstyled p-0 m-0">
        @foreach($primary_nav_items as $item)
          @php
            $is_active = App::IsActive($item['link']['title']);
            $has_dropdown = $item['has_dropdown'] ? 'has-dropdown' : false;
          @endphp

          <li class="mx-0 mx-sm-3 mb-1 mb-sm-0 d-flex align-items-center {{$is_active}} ">
            <a class="primary-navigation__link" href="{{$item['link']['url']}}">
              {{$item['link']['title']}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>

<div class="navbar-toggle-container bg-info me-2 mt-2 rounded hard-center">
  <i class="fas fa-bars text-white fa-lg"></i>
</div>