import scroll from './../helpers/scroll.js'
import Helpers from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !Helpers.hasElement('.primary-navigation') ) return

    const primaryNavigation = document.querySelector('.primary-navigation')

    function toggleNav() {
      primaryNavigation.classList.toggle('active')
    }

    function navScroll() {
      if ( !document.querySelector('.header-scrolled') ) {
        scroll.addClassOnScroll('.primary-navigation', 120);
      }
    }

    /*
      If a class of header-scrolled is present on the page, there is no
      header and the navbar needs the "scrolled" class applied indefinitely
    */
    if ( document.querySelector('.header-scrolled') ) {
      primaryNavigation.classList.add('scrolled');
    }

    /* Do the same for a header with the class header-fluid-transparent */
    if ( document.querySelector('.header-dark') ) {
      primaryNavigation.classList.add('header-dark')
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
