export default {
  init() {
    document.querySelectorAll('.resume-more-info').forEach( this.moreInfo.bind(this) )

    // init PDF logic
    const pdfFriendly = document.querySelectorAll('.resume-options-icon.pdf-friendly')[0]
    pdfFriendly.addEventListener('click', this.pdfFriendly.bind(this))
  },
  pdfFriendly() {
    const pdfFriendly = document.querySelectorAll('.resume-options-icon.pdf-friendly')[0]
    const resumeContent = document.querySelectorAll('.resume-content')[0]

    this.toggleAll()
  
    if (pdfFriendly.classList.contains('active')) {
      pdfFriendly.classList.remove('active')
      resumeContent.classList.remove('pdf-friendly')
    }
    else {
      pdfFriendly.classList.add('active')
      resumeContent.classList.add('pdf-friendly')
    }
  },
  toggleAll() {
    document.querySelectorAll('.resume-more-info .toggle-info').forEach(elem => {
      elem.click()
    })
  },
  moreInfo(elem) {
    const toggler = elem.querySelectorAll('.resume-more-info-text')[0]
    toggler.addEventListener('click', () => {
      const content = elem.querySelectorAll('.resume-more-info-content')[0]
      
      content.classList.contains('hide') ? content.classList.remove('hide') : content.classList.add('hide')
      this.updateToggler(toggler, !content.classList.contains('hide'))
    })
  },
  updateToggler(toggler, toggled) {
    const text = toggler.querySelectorAll('span')[0]
    const icon = toggler.querySelectorAll('.resume-more-info-icon-container')[0]

    toggled ? text.innerHTML = 'Hide Info' : text.innerHTML = 'More Info'
    toggled ? icon.classList.add('toggled') : icon.classList.remove('toggled')
  },
}