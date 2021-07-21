// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// libs
import './lib/fontawesome'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import bpportfolio from './routes/portfolio';
import aboutUs from './routes/about';
import home from './routes/home';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home Page
  home,
  // Portfolio page
  bpportfolio,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
