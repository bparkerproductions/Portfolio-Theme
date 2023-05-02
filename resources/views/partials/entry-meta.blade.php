<header class="entry-meta d-flex align-items-center pb-2">
  <time 
    datetime="{{ get_post_time('c', true, $postID) }}"
    class="fw-light fs-small bg-secondary rounded-0 text-white py-1 px-3"
  >
    {{ get_the_date('', $postID) }}
  </time>

  <div class="ms-4 d-flex align-items-center">
    <i class="fas fa-folder-open me-2 text-primary"></i>
    <ul class="list-unstyled d-flex flex-wrap">
      @foreach(get_the_category($postID) as $cat)
        <li class="badge bg-primary me-2">
          <a href="{{get_category_link($cat->cat_ID)}}" class="text-white">
            {{$cat->name}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</header>
