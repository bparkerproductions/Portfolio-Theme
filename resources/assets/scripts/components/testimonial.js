import SlickOptions from './slick-options';

export default {
  init() {
    if (!document.querySelectorAll('.tesimonials')) return

    const $slider = $('.testimonials-container .slider-container:not(.no-slick)')

    $slider.slick(SlickOptions.verticalSlider());

    document.querySelectorAll('.testimonials-container .toggle.previous')[0].addEventListener(
      'click',
      () => { $slider.slick('slickPrev') }
    )

    document.querySelectorAll('.testimonials-container .toggle.next')[0].addEventListener(
      'click',
      () => { $slider.slick('slickNext') }
    )
  },
}