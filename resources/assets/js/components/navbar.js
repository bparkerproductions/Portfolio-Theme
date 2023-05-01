import scroll from './../helpers/scroll.js'
import Helpers from './../helpers/general.js'

(function() {
  if ( !Helpers.hasElement('.primary-navigation') ) return

  document.querySelector('.navbar-toggle-container').addEventListener(
    'click',
    toggleNav
  )

  document.addEventListener(
    'scroll',
    navScroll
  )
  function toggleNav() {
    document.querySelector('.primary-navigation').classList.toggle('active')
  }

  function navScroll() {
    scroll.addClassOnScroll('.primary-navigation', 120);
  }
})()
