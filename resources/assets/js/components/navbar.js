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
    if ( !document.querySelector('.no-header-padding')) {
      scroll.addClassOnScroll('.primary-navigation', 120)
    }
  }

  /*
    If a class of no-header-padding is present on the page, there is no
    header and the navbar needs the "scrolled" class applied indefinitely
  */
  if ( document.querySelector('.no-header-padding') ) {
    document.querySelector('.primary-navigation').classList.add('scrolled')
  }
})()
