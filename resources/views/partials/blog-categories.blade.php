<section class="pt-4 pb-5 container blog-categories">
    <div class="d-flex flex-wrap">
      <a
        class="{{!single_cat_title('', false) ? 'selected' : ''}}
        blog-categories__category text-primary fs-sm me-4 fs-6 my-2"
        title="Go to the main blog page"
        href="{{$blog_link}}"
      >
        All Categories
      </a>
      @foreach($category_list as $cat)
        @if($cat->count >= 3)
          <a
            href="{{get_category_link($cat->cat_ID)}}"
            title="Go to the {{$cat->name}} category page"
            class="{{Archive::isSelected($cat)}} blog-category__category me-2
             badge bg-secondary px-3 text-white rounded-5 d-flex align-items-center my-2 py-2"
          >
            {{$cat->name}} <span class="blog-categories__count ms-2 fs-xs">
              ({{$cat->count}})
            </span>
          </a>
        @endif
      @endforeach
    </div>
  </section>