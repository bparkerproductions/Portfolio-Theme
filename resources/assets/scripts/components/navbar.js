import scroll from './scroll';

export default {
  init() {
    $('.toggle-container').on('click', this.toggleNav);
    $('li.has-dropdown').on('hover', this.toggleSubmenu);
    $(document).scroll(this.navScroll);
  },
  toggleNav() {
    let $navbar = $('.primary-content');
    let $content = $('.content-container');
    $navbar.toggleClass('active');
    $content.toggleClass('active');
  },
  navScroll() {
    scroll.addClassOnScroll('.primary-content', 120);
  },
  toggleSubmenu() {
    let $submenu = $('.submenu', $(this));
    let $hoverContainer = $('.hover-container', $(this));
    $hoverContainer.toggleClass('active');
    $submenu.toggleClass('active');
  },
}