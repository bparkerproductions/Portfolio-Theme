<div class="search-bar col-12 col-lg-6 mb-4 {{$classes ?? ''}}" data-scroll-lock={{$scrollLock}}>
  <div class="search-bar__input-container position-relative">
    <input
      type="text"
      placeholder="{{$placeholder ?? 'Search Content...'}}"
      class="search-bar__input input-style input-lg w-100">
    </input>

    <div class="search-bar__close-icon d-none">
      <i class="fas fa-times text-dark-75"></i>
    </div>

    <div class="search-bar__results d-none">
      <div class="position-relative">
        <div class="d-none search-bar__loader absolute-fill flex-center">
          <i class="search-bar__loader__icon fas fa-circle text-primary spinner spinner--grow"></i>
        </div>

        <ul class="search-bar__list list-unstyled card mb-0 shadow">

          {{-- Cloneable list item --}}
          <li>
            <a href="#" class="row w-100">
              <div class="col-1">
                <i class="fas fa-file-alt fa-2x search-bar__list__icon"></i>
              </div>

              <div class="col-11">
                <span class="search-bar__result-title"></span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>