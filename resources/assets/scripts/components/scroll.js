export default {
  to(obj) {
    $('html,body').animate({
      scrollTop: $(obj).offset().top-50,
    }, 500, 'linear');
  },
  addClassOnScroll($elem, amount) {
    if (!document.querySelectorAll($elem)[0]) return

    if (document.scrollingElement.scrollTop > amount) {
      document.querySelectorAll($elem)[0].classList.add('scrolled')
    }
    else {
      document.querySelectorAll($elem)[0].classList.remove('scrolled');
    }
  },
}