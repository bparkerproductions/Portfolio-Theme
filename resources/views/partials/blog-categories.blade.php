<section class="pt-4 pb-5 container blog-categories">
    <div class="d-flex flex-wrap flex-xl-nowrap">
      <a 
        class="{{!single_cat_title('', false) ? 'selected' : ''}} blog-categories__category me-2 me-xl-4 badge btn btn-primary px-3 py-2 rounded-5 my-2 my-xl-0" 
        href="{{$blog_link}}"
      >
        All Categories
      </a>
      @foreach($category_list as $cat)
        @if($cat->count >= 3)
          <a 
            href="{{get_category_link($cat->cat_ID)}}"
            class="{{Archive::isSelected($cat)}} blog-category__category me-2 badge btn btn-secondary px-3 py-2 rounded-5 my-2 my-xl-0"
          >
            {{$cat->name}} <span class="blog-categories__count badge bg-white rounded-5 text-dark ms-2">{{$cat->count}}</span>
          </a>
        @endif
      @endforeach
    </div>
  </section>