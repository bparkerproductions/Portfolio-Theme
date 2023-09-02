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
    const $loader = document.querySelector('search-bar__loader');

    // For the spinner element
    function startLoader() {
      $loader.classList.remove('d-none');
    }

    // Show results element
    function toggleOn() {
      $list.classList.remove('d-none');
    }

    // Hide results element
    function toggleOff() {
      $list.classList.add('d-none');
    }

    function getResults() {
      toggleOn();
      startLoader();
    }

    // INIT - Set event listeners
    $input.addEventListener( 'keyup', getResults );
  })
})()