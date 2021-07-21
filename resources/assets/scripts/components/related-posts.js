import SlickOptions from './slick-options';

export default {
  init() {
    if($('.related-posts').length) this.initSlider();
    this.setEventListeners();
  },
  setEventListeners() {
    $('.toggle.previous').click(function() {
      Related.getPostsContainer().slick('slickPrev');
    });

    $('.toggle.next').click(function() {
      Related.getPostsContainer().slick('slickNext');
    });
  },
  initSlider() {
    Related.getPostsContainer().slick(SlickOptions.verticalSlider());
  },
}

let Related = {
  getPostsContainer() {
    return $('.related-posts .posts-container');
  },
}