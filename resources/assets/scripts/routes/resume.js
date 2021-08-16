export default {
  init() {
    document.querySelectorAll('.resume-more-info').forEach( this.moreInfo.bind(this) )

    // init PDF logic
    this.downloadAsPdf()
  },
  downloadAsPdf() {
    const icon = document.querySelectorAll('.resume-options-icon.download')[0]
    console.log(icon)
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