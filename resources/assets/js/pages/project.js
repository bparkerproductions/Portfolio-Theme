(function() {
  if ( !document.getElementById('all-projects')) return

  // document.querySelectorAll('.project__gallery').forEach( elem => {
    // new window.Glider(document.querySelector('.project__gallery__container'), {
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   draggable: true,
    //   scrollLock: true,
    //   arrows: {
    //     next: '.next-arrow',
    //     prev: '.prev-arrow'
    //   }
    // })
  // })

  document.querySelectorAll('.all-projects .project').forEach( elem => {
    const leftContainer = elem.querySelector('.project__left--container')
    const rightContainer = elem.querySelector('.project__right--container')
    const rightContainerHeader = elem.querySelector('.project__right-container__header')
    const projectContent = elem.querySelector('.project__content')

    projectContent.style.height = leftContainer.clientWidth + "px"
    // projectContent.style.height = rightContainer.clientWidth - rightContainerHeader.clientWidth + "px"
    
  })
})()
