export default {
  to(obj) {
    $('html,body').animate({
      scrollTop: $(obj).offset().top-50,
    }, 500, 'linear');
  },
  addClassOnScroll($elem, amount) {
    if (!document.querySelector($elem)) return

    if (document.scrollingElement.scrollTop > amount) {
      document.querySelector($elem).classList.add('scrolled')
    }
    else {
      document.querySelector($elem).classList.remove('scrolled');
    }
  },
}