import scroll from './../helpers/scroll.js'
import { hasElement } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.primary-navigation') ) return

    const primaryNavigation = document.querySelector('.primary-navigation')

    function toggleNav() {
      primaryNavigation.classList.toggle('active')
    }

    function navScroll() {
      if ( !document.querySelector('.always-scrolled') ) {
        scroll.addClassOnScroll('.primary-navigation', 120);
      }
    }

    // INIT - Set event listeners
    document.querySelector('.navbar-toggle-container').addEventListener(
      'click',
      toggleNav
    );

    document.addEventListener(
      'scroll',
      navScroll
    );
  })
})()
