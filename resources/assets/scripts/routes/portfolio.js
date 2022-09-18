import Scroll from '../components/scroll';
import Snowstorm from '../components/snowstorm';
import lax from 'lax.js';

export default {
  init() {
    if (!document.querySelectorAll('template-portfolio')) return
    
    document.querySelectorAll('.projects-button')[0].addEventListener(
      'click',
      () => { Scroll.to('#projects-container') }
    )

    document.querySelectorAll('.goto-about-me')[0].addEventListener(
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

