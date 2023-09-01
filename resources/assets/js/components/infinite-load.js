import { hasElement, throttle, decodeHTMLEntities } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.infinite-load') ) return;

    const parent = document.querySelector('.infinite-load');
    const pageCategory = parent.getAttribute('data-category') || null;
    const postCount = parent.getAttribute('data-post-count') || null;
    const postsShown = 10;
    let loading = false;
    let endReached = false;
    let count = 0;

    // Create and start spinner
    function createSpinner() {
      if ( endReached ) return;

      loading = true;

      const spinnerContainer = document.createElement('div');
      spinnerContainer.classList.add('spinner', 'infinite-load');

      const spinner = document.createElement('i');
      spinner.classList.add('fas', 'fa-circle-notch', 'fa-4x');
      spinnerContainer.append(spinner);

      const spinnerEl = document.querySelector('.spinner.infinite-load');

      if ( !spinnerEl ) {
        parent.append(spinnerContainer);
      }
    }

    function destroySpinner() {
      loading = false;
      
      const spinner = document.querySelector('.spinner.infinite-load');

      if ( spinner ) spinner.remove();
    }

    // Splits the array into sizes of n, returning multiple arrays back
    function splitArray(array, size) {
      const chunkyArr = [];
      let index = 0;
      while (index < array.length) {
        chunkyArr.push(array.slice(index, size + index));
        index += size;
      }
      return chunkyArr;
    }

    function getEndpoint() {
      return `${bp_object.home_url}/wp-json/blog-posts/all-posts?category=${pageCategory}`;
    }

    function createPostCategories(el, categories) {
      const categoriesContainer = el.querySelector('.entry-meta__categories');

      if ( !categoriesContainer ) return;

      const categoryBadge = categoriesContainer.querySelector('li');
      categoriesContainer.innerHTML = '';

      categories.forEach( elem => {
        const newCategory = categoryBadge.cloneNode();
        newCategory.innerText = elem.name;
        categoriesContainer.append(newCategory)
      });
    }

    function appendElements(data) {
      data.splice(0, postsShown);
      const newData = splitArray(data, postsShown);
      const currentSplitPart = newData[count];

      if ( count <= newData.length ) {
        currentSplitPart.forEach( (key, index) => {
          const part = currentSplitPart[index];
          const postUrl = part.url, postTitle = part.title, postExcerpt = part.excerpt, postImg = part.featured_img_src, categories = part.categories, postDate = part.date;

          // Clone an existing blog post DOM element
          const blogArticle = document.querySelector('article.blog-preview').closest('li');
          let blogArticleEl = blogArticle.cloneNode(true);

          // Set properties to the newly created article element
          blogArticleEl.querySelector('.blog-preview__link').setAttribute('href', postUrl);
          blogArticleEl.querySelector('.blog-preview__title').innerText = postTitle;
          blogArticleEl.querySelector('.entry-meta__time').innerText = postDate;
          blogArticleEl.querySelector('.blog-preview__image').setAttribute('src', postImg);
          blogArticleEl.querySelector('.blog-preview__description').innerText = decodeHTMLEntities(postExcerpt);

          createPostCategories(blogArticleEl, categories);

          parent.append(blogArticleEl);
        });

        count++;

        if ( count === newData.length ) endReached = true;
      }
    }

    function fetchPosts() {
      createSpinner();

      // Fetch posts, etc
      fetch( getEndpoint() )
      .then( response => response.json())
      .then( data => {
        destroySpinner();
        appendElements(data);
      })
    }

    function onScroll() {
      const targetEl = parent.getBoundingClientRect();
      const isScrolledBottom = targetEl.bottom <= window.innerHeight;
      const hasEnoughPosts = parseInt(postCount) > postsShown;
      
      if ( isScrolledBottom  && hasEnoughPosts ) {
        if ( !loading && !endReached) fetchPosts();
      }
    }

    document.addEventListener( 'scroll', throttle(onScroll, 250) );
  })
})()
