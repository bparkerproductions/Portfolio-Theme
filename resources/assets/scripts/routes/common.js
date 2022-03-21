import navbar from '../components/navbar';
import text from '../components/text';
import testimonial from '../components/testimonial';
import post from '../components/post';
import relatedPosts from '../components/related-posts';
import categories from '../components/categories';
import difficulty from '../components/difficulty';
import heroBubble from '../components/hero-bubble';

export default {
  init() {
    categories.init();
    text.init();
    navbar.init();
    testimonial.init();
    post.init();
    relatedPosts.init();
    difficulty.init();
    heroBubble.init();
  },
};
