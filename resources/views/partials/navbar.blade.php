<nav class="primary-navigation column-center py-4 {{$class}}">

  <div class="container">
    <div class="content-container d-flex">

      {{-- Home link
      <div class="me-4 me-sm-3">
        <a
          class="primary-navigation__logo d-flex"
          aria-label="Go to the home page"
          title="Go to the home page"
          href="{{get_field('home_item', 'option')['url']}}"
        >
          <i class="fas fa-home"></i>
        </a>
      </div>
      --}}

      <ul class="d-flex flex-column flex-sm-row list-unstyled p-0 m-0">
        @foreach( get_field('navbar_list', 'option') as $item )
          <li class="mx-0 mx-sm-3 mb-1 mb-sm-0 d-flex align-items-center">
            <a
              class="primary-navigation__link {{App::IsActive($item['link']['title'])}}"
              href="{{$item['link']['url']}}"
            >
              {{$item['link']['title']}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>

<div class="navbar-toggle-container bg-info me-2 mt-2 rounded flex-center d-block d-sm-none">
  <i class="fas fa-bars text-white fa-lg"></i>
</div>