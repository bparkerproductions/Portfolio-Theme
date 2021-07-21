<section class="blog-categories column-center">
  <div class="inner-container">
    <div class="toggle slide-previous">
      <i class="fas fa-chevron-left"></i>
    </div>
    <ul class="categories-list">
      @foreach($categories as $category)
        @foreach($category as $id)
        <li class="single-category">
          <a class="category-link" href="{{ get_category_link($id) }}">
            <span class="category-title">{{ get_cat_name($id) }}</span>
            <i class="category-icon {{ get_field('fa_icon_class', APP::CategoryIconID($id)) }}"></i>
          </a>
        </li>
        @endforeach
      @endforeach
    </ul>
    <div class="toggle slide-next">
      <i class="fas fa-chevron-right"></i>
    </div>
  </div>
</section>