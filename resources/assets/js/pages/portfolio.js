import Scroll from './../helpers/scroll.js'
import Helpers from './../helpers/general.js'
import './../components/snowstorm.js'
import lax from 'lax.js'

(function() {
  if (!Helpers.hasElement('template-portfolio')) return

  document.querySelector('.projects-button').addEventListener(
    'click',
    () => { Scroll.to('#projects-container') }
  )

  document.querySelector('.goto-about-me').addEventListener(
    'click',
    () => { Scroll.to('#about-container') }
  )

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
