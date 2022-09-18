import Scroll from '../components/scroll'

export default {
  init() {
    const $scrollDownHome = document.querySelectorAll('.scroll-down-home')
    if (!$scrollDownHome) return

    $scrollDownHome[0].addEventListener(
      'click',
      this.scrollDown.bind(this)
    )
  },
  scrollDown(e) {
    e.preventDefault();
    Scroll.to('.home-about')
  },
}
