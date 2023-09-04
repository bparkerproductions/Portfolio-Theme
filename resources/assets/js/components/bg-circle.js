import { hasElement } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.bg-circle') ) return;

    document.querySelectorAll('.bg-circle').forEach( circleElem => {
      if ( circleElem.hasAttribute('bgc-properties') ) {

        const properties = circleElem.getAttribute('bgc-properties')
        .replace(/\s/g, '').split(',');
        
        // Dynamically add all passed properties to the .bg-circle
        properties.forEach( property => {
          circleElem.classList.add('bg-circle--' + property);
        })
      }
    })
  })
})()