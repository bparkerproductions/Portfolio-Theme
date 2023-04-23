import Helpers from './../helpers/general.js'

(function() {
  if (!Helpers.hasElement('.template-resume')) return

  document.querySelectorAll('.resume-more-info').forEach( moreInfo.bind(this) )

  // init PDF logic
  const $pdfFriendly = document.querySelector('.resume-options-icon.pdf-friendly')
  $pdfFriendly.addEventListener('click', pdfFriendly)

  function pdfFriendly() {
    const resumeContent = document.querySelector('.resume-content')

    if ($pdfFriendly.classList.contains('active')) {
      $pdfFriendly.classList.remove('active')
      resumeContent.classList.remove('pdf-friendly')
      closeAll()
    }
    else {
      $pdfFriendly.classList.add('active')
      resumeContent.classList.add('pdf-friendly')
      openAll()
    }
  }

  function openAll() {
    document.querySelectorAll('.resume-more-info-content').forEach(elem => {
      if (elem.classList.contains('hide')) elem.classList.remove('hide')
    })
  }

  function closeAll() {
    document.querySelectorAll('.resume-more-info-content').forEach(elem => {
      if (!elem.classList.contains('hide')) elem.classList.add('hide')
    })

    document.querySelectorAll('.resume-more-info-text').forEach(elem => {
      updateToggler(elem, false)
    })
  }

  function moreInfo(elem) {
    const toggler = elem.querySelector('.resume-more-info-text')
    toggler.addEventListener('click', () => {
      const content = elem.querySelector('.resume-more-info-content')
      
      content.classList.contains('hide') ? content.classList.remove('hide') : content.classList.add('hide')
      updateToggler(toggler, !content.classList.contains('hide'))
    })
  }

  function updateToggler(toggler, toggled) {
    const text = toggler.querySelector('span')
    const icon = toggler.querySelector('.resume-more-info-icon-container')

    toggled ? text.innerHTML = 'Hide Info' : text.innerHTML = 'More Info'
    toggled ? icon.classList.add('toggled') : icon.classList.remove('toggled')
  }
})()