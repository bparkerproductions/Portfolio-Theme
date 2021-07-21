export default {
  to(obj) {
    $('html,body').animate({
      scrollTop: $(obj).offset().top-50,
    }, 500, 'linear');
  },
  addClassOnScroll($elem, amount) {
    let scroll = $(document).scrollTop();

    if(scroll > amount) $($elem).addClass('scrolled');
    else $($elem).removeClass('scrolled');
  },
}