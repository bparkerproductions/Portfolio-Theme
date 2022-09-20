import scroll from './scroll';

export default {
  init() {
    document.querySelector('.toggle-container').addEventListener(
      'click',
      this.toggleNav
    )

    document.addEventListener(
      'scroll',
      this.navScroll
    )
  },
  toggleNav() {
    document.querySelector('.primary-content').classList.toggle('active')
    document.querySelector('.content-container').classList.toggle('active')
  },
  navScroll() {
    scroll.addClassOnScroll('.primary-content', 120);
  },
}