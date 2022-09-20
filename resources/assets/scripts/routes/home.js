import Scroll from '../components/scroll'

export default {
  init() {
    const $scrollDownHome = document.querySelector('.scroll-down-home')
    if (!$scrollDownHome) return

    $scrollDownHome.addEventListener(
      'click',
      this.scrollDown.bind(this)
    )
  },
  scrollDown(e) {
    e.preventDefault();
    Scroll.to('.home-about')
  },
}
