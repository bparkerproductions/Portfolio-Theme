import Scroll from '../components/scroll';
import Snowstorm from '../components/snowstorm';
import lax from 'lax.js';

export default {
  init() {
    if (!document.querySelectorAll('template-portfolio')) return

    document.querySelector('.projects-button').addEventListener(
      'click',
      () => { Scroll.to('#projects-container') }
    )

    document.querySelector('.goto-about-me').addEventListener(
      'click',
      () => { Scroll.to('#about-container') }
    )

    this.initLax();
    Snowstorm.init();
  },
  initLax() {
    lax.setup() // init

    const updateLax = () => {
      lax.update(window.scrollY)
      window.requestAnimationFrame(updateLax)
    }

    window.requestAnimationFrame(updateLax)
  },
}

