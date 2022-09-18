export default {
  init() {
    if(!document.querySelectorAll('.blog-categories').length) return
    
    this.slickCategories();
    this.addClasses();
    this.setEventListeners();
  },
  setEventListeners() {
    document.querySelectorAll('.slide-previous')[0].addEventListener(
      'click',
      () => { this.getListElement().slick('slickPrev') }
    )

    document.querySelectorAll('.slide-next')[0].addEventListener(
      'click',
      () => { this.getListElement().slick('slickNext') }
    )
  },
  slickCategories() {
    this.getListElement().slick({
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
  getListElement() {
    return $('.blog-categories .categories-list');
  },
  showSlideCount() {
    return $($('.single-category'), this.getListElement()).length;
  },
  addClasses() {
    switch (this.showSlideCount()) {
      case 2:
        $('.blog-categories').addClass('hide-all')
        break;
      case 3:
        $('.blog-categories').addClass('hide-arrows-mobile')
        break;
      case 4:
        $('.blog-categories').addClass('hide-arrows-portrait')
        break;
      case 5:
        $('.blog-categories').addClass('hide-arrows-tablet')
        break;
      case 6:
        $('.blog-categories').addClass('hide-arrows-desktop')
        break;
    }
  },
}
