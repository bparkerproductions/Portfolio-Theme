import SlickOptions from './slick-options';

export default {
  init() {
    //initially set card amount
    Slider.init();
  },
}

let Slider = {
  init() {
    Slider.initMainSlider();
    Slider.setEventListeners();
  },
  setEventListeners() {
    $('.toggle.previous').click(function() {
      Slider.getSliderContainer().slick('slickPrev');
    });

    $('.toggle.next').click(function() {
      Slider.getSliderContainer().slick('slickNext');
    });
  },
  getSliderContainer() {
    return $('.testimonials-container .slider-container:not(.no-slick)');
  },
  initMainSlider() {
    Slider.getSliderContainer().slick(SlickOptions.verticalSlider());
  },
}