<ul class="list-unstyled row">

  {{-- Degree --}}
  <li class="col-12 mb-4 rounded-3">
    @include('partials.degree')
  </li>

  @foreach( get_field('credentials', 'option') as $credential )
    <li class="col-12 col-lg-6 my-2 d-flex align-items-center credential rounded-3 position-relative">
      <div class="d-flex flex-column bg-gray-400 p-3 w-100 h-100 rounded-3 border">
        <h6 class="d-block d-sm-none">{{$credential['title']}}</h6>

        <div class="d-flex flex-column flex-sm-row">
          <div class="d-flex align-items-center me-3 py-2">
            <img
              class="credential__image"
              src="{{$credential['image']['url']}}"
              alt="An Image of the {{$credential['title']}} badge"
            />
          </div>

          <div class="d-flex flex-column justify-content-center">
            <h6 class="d-none d-sm-block">{{$credential['title']}}</h6>
            @if ($credential['link'])
              <a
                target="_blank"
                href="{{$credential['link']['url']}}"
                class="absolute-fill"
              ></a>

              <p class="mb-0 text-dark text-decoration-underline">
                {{$credential['link']['title']}}
                <i class="fas fa-external-link-alt fa-sm ms-2"></i>
              </p>
            @endif

            @if ( $credential['certificate_number'] )
              <p class="text-dark-50 fw-light mb-0 fs-sm">{{$credential['certificate_number']}}</p>
            @endif

            <p class="mb-0 mt-1 text-dark-50">Issued on {{$credential['date_issued']}}</p>
          </div>
        </div>
      </div>
    </li>
  @endforeach
</ul>
