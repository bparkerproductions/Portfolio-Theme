import Helpers from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !Helpers.hasElement('.infinite-load') ) return

    console.log('infinite-load');
  })
})()
