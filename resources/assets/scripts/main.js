// Import everything from autoload
import './autoload/**/*'

// libs
import './lib/fontawesome'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import bpportfolio from './routes/portfolio';
import home from './routes/home';
import resume from './routes/resume';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages /*
  common,
  // Home Page /
  home,
  // Portfolio page /bpportfolio
  bpportfolio,
  // Resume Page /resume
  resume,
});

// Load Events
window.addEventListener('load', () => routes.loadEvents())
