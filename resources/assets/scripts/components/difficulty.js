export default {
  textboxHeight: '',
  init() {
    if (!document.querySelectorAll('.post-difficulty').length) return

    document.querySelector('.post-difficulty .header-info').addEventListener(
      'click',
      this.toggle.bind(this)
    )

    // get initial box height and add it as variable
    const $textbox = document.querySelector('.post-difficulty .difficulty-information')
    this.textboxHeight = $textbox.clientHeight
    $textbox.style.height = 0
    $textbox.style.padding = 0
  },
  toggle() {
    const $difficulty = document.querySelector('.post-difficulty')
    const $icon = document.querySelector('.post-difficulty .toggle-icon')
    const $difficultyInformation = document.querySelector('.post-difficulty .difficulty-information')

    if($difficulty.getAttribute('aria-toggled') === 'true') {
      $difficulty.setAttribute('aria-toggled', 'false')
      $icon.classList.remove('fa-caret-up')
      $icon.classList.add('fa-caret-down')

      // toggle and style the information back on
      $difficultyInformation.style.opacity = 0
      $difficultyInformation.style.height = 0
      $difficultyInformation.style.padding = 0
    }
    else {
      $difficulty.setAttribute('aria-toggled', 'true')
      $icon.classList.remove('fa-caret-down')
      $icon.classList.add('fa-caret-up')

      // toggle and style the information back on
      $difficultyInformation.style.opacity = 1
      $difficultyInformation.style.height = this.textboxHeight + 'px'
      $difficultyInformation.style.padding = '15px'
    }
  },
}
