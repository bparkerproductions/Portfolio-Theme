import Scroll from '../components/scroll'

export default {
  init() {
    this.setEventListeners()
  },
  setEventListeners() {
    $('.scroll-down-home').on('click', Home.scrollDown);
  },
}

let Home = {
  scrollDown(e) {
    e.preventDefault();
    Scroll.to('.home-about')
  },
}
