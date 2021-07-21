import scroll from './scroll';

export default {
  init() {
    $(document).scroll(this.shareScroll);
  },
  shareScroll() {
    scroll.addClassOnScroll('.social-share', 250);
  },
}