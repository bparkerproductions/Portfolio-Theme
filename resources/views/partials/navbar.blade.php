<nav class="primary-navigation column-center py-4 {{$class}}">

  <div class="container">
    <div class="content-container d-flex">

      <ul class="d-flex flex-column flex-sm-row list-unstyled p-0 m-0">
        @foreach( get_field('navbar_list', 'option') as $item )
          <li class="me-0 me-sm-4 mb-1 mb-sm-0 d-flex align-items-center">
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