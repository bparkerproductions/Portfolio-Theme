export default {
  init() {
    document.querySelectorAll('.resume-more-info').forEach( this.moreInfo.bind(this) )

    // init PDF logic
    const pdfFriendly = document.querySelector('.resume-options-icon.pdf-friendly')
    pdfFriendly.addEventListener('click', this.pdfFriendly.bind(this))
  },
  pdfFriendly() {
    const pdfFriendly = document.querySelector('.resume-options-icon.pdf-friendly')
    const resumeContent = document.querySelector('.resume-content')

    if (pdfFriendly.classList.contains('active')) {
      pdfFriendly.classList.remove('active')
      resumeContent.classList.remove('pdf-friendly')
      this.closeAll()
    }
    else {
      pdfFriendly.classList.add('active')
      resumeContent.classList.add('pdf-friendly')
      this.openAll()
    }
  },
  openAll() {
    document.querySelectorAll('.resume-more-info-content').forEach(elem => {
      if (elem.classList.contains('hide')) elem.classList.remove('hide')
    })
  },
  closeAll() {
    document.querySelectorAll('.resume-more-info-content').forEach(elem => {
      if (!elem.classList.contains('hide')) elem.classList.add('hide')
    })

    document.querySelectorAll('.resume-more-info-text').forEach(elem => {
      this.updateToggler(elem, false)
    })
  },
  moreInfo(elem) {
    const toggler = elem.querySelector('.resume-more-info-text')
    toggler.addEventListener('click', () => {
      const content = elem.querySelector('.resume-more-info-content')
      
      content.classList.contains('hide') ? content.classList.remove('hide') : content.classList.add('hide')
      this.updateToggler(toggler, !content.classList.contains('hide'))
    })
  },
  updateToggler(toggler, toggled) {
    const text = toggler.querySelector('span')
    const icon = toggler.querySelector('.resume-more-info-icon-container')

    toggled ? text.innerHTML = 'Hide Info' : text.innerHTML = 'More Info'
    toggled ? icon.classList.add('toggled') : icon.classList.remove('toggled')
  },
}