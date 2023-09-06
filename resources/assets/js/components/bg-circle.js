import { hasElement } from './../helpers/general.js'

(function() {
    if ( !hasElement('.bg-circle') ) return;

    function addDynamicClasses(elem) {
      const properties = elem.getAttribute('bgc-properties')
        .replace(/\s/g, '').split(',');
        
      // Dynamically add all passed properties to the .bg-circle
      properties.forEach( property => {
        elem.classList.add('bg-circle--' + property);
      })
    }

    document.querySelectorAll('.bg-circle').forEach( circleElem => {

      if ( circleElem.hasAttribute('bgc-properties') ) {
        addDynamicClasses(circleElem);
      }

      // Dynamic positioning if defined
      if ( circleElem.hasAttribute('bgc-bottom') ) {
        circleElem.style.bottom = circleElem.getAttribute('bgc-bottom');
      }

      if ( circleElem.hasAttribute('bgc-top') ) {
        circleElem.style.top = circleElem.getAttribute('bgc-top');
      }

      if ( circleElem.hasAttribute('bgc-right') ) {
        circleElem.style.right = circleElem.getAttribute('bgc-right');
      }

      if ( circleElem.hasAttribute('bgc-left') ) {
        circleElem.style.left = circleElem.getAttribute('bgc-left');
      }

      // Opacity
      if ( circleElem.hasAttribute('bgc-opacity') ) {
        circleElem.style.opacity = circleElem.getAttribute('bgc-opacity');
      }
      else {
        circleElem.style.opacity = 1;
      }
    })
})()