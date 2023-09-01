import { hasElement, throttle, decodeHTMLEntities } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('.infinite-load') ) return;

    const parent = document.querySelector('.infinite-load');
    const postsShown = 10;
    let count = 0;

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
      return `${bp_object.home_url}/wp-json/blog-posts/all-posts`;
    }

    function createPostCategories(el, categories) {
      const categoriesContainer = el.querySelector('.entry-meta__categories');
      const categoryBadge = categoriesContainer.querySelector('li');
      categoriesContainer.innerHTML = '';

      categories.forEach( elem => {
        const newCategory = categoryBadge.cloneNode();
        newCategory.innerText = elem.name;
        categoriesContainer.append(newCategory)
      });
    }

    function fetchPosts() {
      createSpinner();

      // Fetch posts, etc
      console.log(getEndpoint())
      fetch( getEndpoint() )
      .then( response => response.json())
      .then( data => {
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

          // See if the last page has been reached
        }
      })
    }

    function onScroll() {
      console.log('scroll')
      const targetEl = parent.getBoundingClientRect();

      if ( targetEl.bottom <= window.innerHeight ) {
        fetchPosts();
      }
    }

    document.addEventListener( 'scroll', throttle(onScroll, 250) );
  })
})()
