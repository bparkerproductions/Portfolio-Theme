<header class="entry-meta pb-2 d-flex align-items-center flex-wrap">
  @if (!$hide_date)
    <time
      datetime="{{ get_post_time('c', true, $postID) }}"
      class="fs-sm text-dark-75 entry-meta__time me-4"
    >
      {{ get_the_date('', $postID) }}
    </time>
  @endif

  <div class="d-flex align-items-center">
    @if (!$hide_date)
      <i class="fas fa-folder-open me-2 text-primary"></i>
    @endif

    <ul class="list-unstyled d-flex flex-wrap m-0 entry-meta__categories">
      @foreach(wp_get_post_categories($postID) as $cat)
        <li class="badge bg-primary me-2 my-1">
          <a href="{{get_category_link($cat)}}" class="text-white">
            {{get_cat_name($cat)}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</header>
