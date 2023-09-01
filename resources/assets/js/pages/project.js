import { hasElement } from './../helpers/general';

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.project-container') ) return

    function setProjectBgColor() {
      document.querySelectorAll('.project').forEach( elem => {
        const bgColor = elem.getAttribute('data-bg-color');
        const bgOpacity = 0.1;
        const rgba = bgColor.replace(/^rgb\((.+)\)$/, `rgba($1,${bgOpacity})`);
        elem.style.backgroundColor = rgba;
      })
    }

    // Init
    setProjectBgColor();
  });
})()
