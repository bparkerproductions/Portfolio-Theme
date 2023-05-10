(function() {
  if ( !document.getElementById('all-projects')) return

  // document.querySelectorAll('.project__gallery').forEach( elem => {
    new window.Glider(document.querySelector('.project__gallery__container'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      scrollLock: true,
      arrows: {
        next: '.next-arrow',
        prev: '.prev-arrow'
      }
    })
  // })
})()
