import Scroll from './../helpers/scroll.js'
import Helpers from './../helpers/general.js'
import './../components/snowstorm.js'
import lax from 'lax.js'

(function() {
  if (!Helpers.hasElement('template-portfolio')) return

  initLax();

  function initLax() {
    lax.setup() // init

    const updateLax = () => {
      lax.update(window.scrollY)
      window.requestAnimationFrame(updateLax)
    }

    window.requestAnimationFrame(updateLax)
  }
})()
