import { hasElement, decodeHTMLEntities, scrollLock, scrollUnlock } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.search-bar') ) return;

    let typingTimer;
    let toggled = false;
    const doneTypingInterval = 750;

    // DOM elements
    const $searchbar = document.querySelector('.search-bar');
    const $input = document.querySelector('.search-bar__input');
    const $results = document.querySelector('.search-bar__results');
    const $list = document.querySelector('.search-bar__list');
    const $loader = document.querySelector('.search-bar__loader');
    const $closeIcon = document.querySelector('.search-bar__close-icon');
    const $overlay = document.querySelector('.overlay');
    const $listItem = $list.querySelector('li').cloneNode(true);

    // If on desktop. make sure the list scrolls and takes up the remaining height under the input
    function calculateListHeight() {
      const gap = 15;
      const bottomScroll = window.scrollY + window.innerHeight;
      const listPos = $searchbar.getBoundingClientRect().bottom;

      $results.style.maxHeight = ((bottomScroll - listPos) - gap) + 'px';
    }

    // Show results element
    function toggleOn() {
      toggled = true;

      $results.classList.remove('d-none');
      $closeIcon.classList.remove('d-none');

      toggleOverlay();
      toggleLoader();

      calculateListHeight();
    }

    // Hide results element
    function toggleOff() {
      if ( toggled ) {
        toggled = false
        $results.classList.add('d-none');
        $closeIcon.classList.add('d-none');

        $input.value = '';

        toggleOverlay(false);
      }
    }

    function toggleLoader(on=true) {
      if ( on ) $loader.classList.remove('d-none');

      // remove loader
      else $loader.classList.add('d-none');
    }

    function toggleOverlay(on=true) {
      const isLockingOn = $searchbar.getAttribute('data-scroll-lock');

      if ( !isLockingOn ) return;

      if ( $overlay ) {
        if ( on ) {
          $overlay.classList.remove('d-none');
          scrollLock();
        }
        else {
          $overlay.classList.add('d-none');
          scrollUnlock();
        }
      }
    }

    // Clear the search result's list
    function clearResults() {
      document.querySelectorAll('.search-bar__list li').forEach( elem => {
        elem.remove();
      })
    }

    // REST API endpoint
    function getEndpoint(query) {
      const args = '?per_page=5&order=asc&orderby=relevance';
      const searchQuery = `${bp_object.home_url}/wp-json/wp/v2/posts${args}&search=${query}`;

      return searchQuery;
    }

    function appendListItems(data, query) {
      data.forEach( elem => {
        const newListItem = $listItem.cloneNode(true);
        const title = newListItem.querySelector('.search-bar__result-title');
        const decodedTitle = decodeHTMLEntities(elem.title.rendered);

        const regex = new RegExp(query, 'gi');

        title.innerHTML = decodedTitle.replace(regex, match => {
          return `<strong>${match}</strong>`;
        })

        newListItem.querySelector('a').setAttribute('href', elem.link);
        $list.append(newListItem);
      })
    }

    function queryData(query) {
      fetch( getEndpoint(query) )
      .then( response => response.json() )
      .then ( data => {
        toggleLoader(false);
        clearResults();

        if (data.length) appendListItems(data, query)
        else {
          const noResults = document.createElement('li');
          noResults.innerText = "No results found.";
          $list.append(noResults);
        }
      })
    }

    function getResults(e) {
      if ( e.key === "Escape" ) {
        toggleOff();
      }
      else {
        clearTimeout(typingTimer);

        if (e.target.value) {
          typingTimer = setTimeout(() => {
            toggleOn()
            queryData(e.target.value)
          }, doneTypingInterval); // Only call queryData after the user is "done" typing based on what doneTypingInterval is set to
        }
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