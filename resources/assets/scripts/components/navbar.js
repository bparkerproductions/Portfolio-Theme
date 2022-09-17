import scroll from './scroll';

export default {
  init() {
    document.querySelectorAll('.toggle-container')[0].addEventListener(
      'click',
      this.toggleNav
    )

    document.addEventListener(
      'scroll',
      this.navScroll
    )
  },
  toggleNav() {
    document.querySelectorAll('.primary-content')[0].classList.toggle('active')
    document.querySelectorAll('.content-container')[0].classList.toggle('active')
  },
  navScroll() {
    scroll.addClassOnScroll('.primary-content', 120);
  },
}