import navbar from '../components/navbar';
import relatedPosts from '../components/related-posts';
import categories from '../components/categories';
import difficulty from '../components/difficulty';
import heroBubble from '../components/hero-bubble';

export default {
  init() {
    categories.init();
    navbar.init();
    relatedPosts.init();
    difficulty.init();
    heroBubble.init();
  },
};
