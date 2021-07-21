export default {
  init() {
    if($('.blog-categories').length) {
      this.slickCategories();
    }

    Categories.addClasses();
    this.setEventListeners();
  },
  slickCategories() {
    Categories.getListElement().slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
          },
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    })
  },
  setEventListeners() {
    $('.slide-previous').click(function() {
      Categories.getListElement().slick('slickPrev');
    });

    $('.slide-next').click(function() {
      Categories.getListElement().slick('slickNext');
    });
  },
}

let Categories = {
  getListElement() {
    return $('.blog-categories .categories-list');
  },
  showSlideCount() {
    return $($('.single-category'), Categories.getListElement()).length;
  },
  addClasses() {
    if(Categories.showSlideCount() <= 2) {
      $('.blog-categories').addClass('hide-all')
      return;
    }

    if(Categories.showSlideCount() <= 6) $('.blog-categories').addClass('hide-arrows-desktop')
    if(Categories.showSlideCount() <= 5) $('.blog-categories').addClass('hide-arrows-tablet')
    if(Categories.showSlideCount() <= 4) $('.blog-categories').addClass('hide-arrows-portrait')
    if(Categories.showSlideCount() <= 3) $('.blog-categories').addClass('hide-arrows-mobile')
  },
}