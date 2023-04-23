import scroll from './../helpers/scroll.js'
import Helpers from './../helpers/general.js'

(function() {
  if ( !Helpers.hasElement('.primary-navigation') ) return

  document.querySelector('.toggle-container').addEventListener(
    'click',
    toggleNav
  )

  document.addEventListener(
    'scroll',
    navScroll
  )
  function toggleNav() {
    document.querySelector('.primary-content').classList.toggle('active')
    document.querySelector('.content-container').classList.toggle('active')
  }

  function navScroll() {
    scroll.addClassOnScroll('.primary-content', 120);
  }
})()
