import SlickOptions from './slick-options';

export default {
  init() {
    if (!document.querySelectorAll('.testimonials').length) return

    const $slider = $('.testimonials-container .slider-container:not(.no-slick)')

    $slider.slick(SlickOptions.verticalSlider());

    document.querySelector('.testimonials-container .toggle.previous').addEventListener(
      'click',
      () => { $slider.slick('slickPrev') }
    )

    document.querySelector('.testimonials-container .toggle.next').addEventListener(
      'click',
      () => { $slider.slick('slickNext') }
    )
  },
}