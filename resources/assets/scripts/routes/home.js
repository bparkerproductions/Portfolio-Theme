import Scroll from '../components/scroll'

export default {
  init() {
    document.querySelectorAll('.scroll-down-home')[0].addEventListener(
      'click',
      this.scrollDown.bind(this)
    )
  },
  scrollDown(e) {
    e.preventDefault();
    Scroll.to('.home-about')
  },
}
