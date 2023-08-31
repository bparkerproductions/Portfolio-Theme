<header class="entry-meta d-flex align-items-center pb-2">

  @if (!$hide_date)
    <time
      datetime="{{ get_post_time('c', true, $postID) }}"
      class="fs-sm bg-secondary rounded-0 text-white py-1 px-3"
    >
      {{ get_the_date('', $postID) }}
    </time>
  @endif

  <div class="d-flex align-items-center @if(!$hide_date) ms-4 @endif">
    @if (!$hide_date)
      <i class="fas fa-folder-open me-2 text-primary"></i>
    @endif

    <ul class="list-unstyled d-flex flex-wrap m-0">
      @foreach(wp_get_post_categories($postID) as $cat)
        <li class="badge bg-primary me-2">
          <a href="{{get_category_link($cat)}}" class="text-white">
            {{get_cat_name($cat)}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</header>
