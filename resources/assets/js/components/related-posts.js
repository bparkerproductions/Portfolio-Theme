import Helpers from './../helpers/general.js'

(function() {
  if ( !Helpers.hasElement('.related-posts') ) return

  initSlider()
    
  function initSlider() {
    new window.Glider(document.querySelector('.related-posts.glider .posts-container'), {
      // Mobile-first defaults
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      scrollLock: true,
      arrows: {
        prev: '.slider-toggle-arrows .previous.toggle',
        next: '.slider-toggle-arrows .next.toggle',
      },
      responsive: [
        {
          // screens greater than >= 900
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            draggable: false,
            slidesToScroll: 2,
          },
        },
      ],
    })
  }
})()
