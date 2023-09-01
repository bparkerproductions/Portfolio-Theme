import Helpers from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !Helpers.hasElement('.infinite-load') ) return;

    const parent = document.querySelector('.infinite-load');

    function createSpinner() {
      const spinnerContainer = document.createElement('div');
      spinnerContainer.classList.add('spinner', 'infinite-load');

      const spinner = document.createElement('i');
      spinner.classList.add('fas', 'fa-circle-notch', 'fa-4x');
      spinnerContainer.append(spinner);

      const $spinnerEl = document.querySelector('.spinner.infinite-load');

      if ( !$spinnerEl ) {
        parent.append(spinnerContainer);
      }
    }

    function fetchPosts() {
      createSpinner();

      // Fetch posts, etc
    }

    function onScroll() {
      const targetEl = parent.getBoundingClientRect();

      if ( targetEl.bottom <= window.innerHeight ) {
        fetchPosts();
      }
    }

    document.addEventListener( 'scroll', onScroll );
  })
})()
