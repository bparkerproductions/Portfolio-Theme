import { hasElement } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.search-bar') ) return;

    let isLoading = false;
    let typingTimer;
    const doneTypingInterval = 750;

    // DOM elements
    const $input = document.querySelector('.search-bar__input');
    const $list = document.querySelector('.search-bar__results');
    const $loader = document.querySelector('.search-bar__loader');
    const $closeIcon = document.querySelector('.search-bar__close-icon');
    const $overlay = document.querySelector('.overlay');

    // For the spinner element
    function startLoader() {
      $loader.classList.remove('d-none');
    }

    // Show results element
    function toggleOn() {
      $list.classList.remove('d-none');
      $closeIcon.classList.remove('d-none');

      if ( $overlay ) $overlay.classList.remove('d-none');
    }

    // Hide results element
    function toggleOff() {
      $list.classList.add('d-none');
      $closeIcon.classList.add('d-none');

      $input.value = '';

      if ( $overlay ) $overlay.classList.add('d-none');
    }

    function getResults(e) {
      if ( e.key === "Escape" ) {
        toggleOff();
      }
      else if ( e.target.value ) {
        toggleOn();
        startLoader();
      }
      else {
        return;
      }
    }

    // INIT - Set event listeners
    $input.addEventListener( 'keyup', getResults );
    $input.addEventListener( 'click', e => e.stopPropagation() );
    $closeIcon.addEventListener( 'click', toggleOff );

    // Close results on outside click
    document.querySelector('body').addEventListener( 'click', toggleOff );

  })
})()