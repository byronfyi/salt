import menuToggle from './src/menu-toggle.js';
import stickyHeader from './src/sticky-header.js';
import animations from './src/animations.js';
import glider from './src/glider.js';
import map from './src/map.js';
import removeInstagramEappsLink from './src/remove-instagram-eapps-link.js';
import { inject } from '@vercel/analytics';

menuToggle();
stickyHeader();
animations();
glider();
map();
removeInstagramEappsLink();
inject();
