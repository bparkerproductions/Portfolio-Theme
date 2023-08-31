export default {
  to(obj) {
    document.querySelector(obj).scrollIntoView({behavior: 'smooth'})
  },
  addClassOnScroll($elem, amount) {
    if (!document.querySelector($elem)) return

    if (document.scrollingElement.scrollTop > amount) {
      document.querySelector($elem).classList.add('scrolled');
    }
    else {
      document.querySelector($elem).classList.remove('scrolled');
    }
  }
}