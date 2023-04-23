import Scroll from './../helpers/scroll.js'
import Helpers from './../helpers/general.js'

(function() {
  if (!Helpers.hasElement('.front-page')) return

  document.querySelector('.scroll-down-home').addEventListener(
    'click',
    scrollDown.bind(this)
  )

  function scrollDown(e) {
    e.preventDefault();
    Scroll.to('.home-about')
  }
})()