<section class="archive-category-list column-center">
  <div class="inner-container">
    <div class="archive-categories">
      <div class="single-icon-container">
        <i class="fas fa-folder-open"></i>
      </div>
      <div class="single-category {{$blog_active}}">
        <a 
          class="all-categories {{!single_cat_title('', false) ? 'active' : ''}}"
          href="{{$blog_link}}"
        >All Categories
        </a>
      </div>
      @foreach($category_list as $cat)
        @if($cat->count >= 3)
          <div class="single-category">
            <a 
              href="{{get_category_link($cat->cat_ID)}}"
              class="{{Archive::isActive($cat)}}">
              {{$cat->name}}
              <span class="badge">{{$cat->count}}</span>
            </a>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>