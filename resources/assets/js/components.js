/** Vue components
 */
import navbar	from './components/layout/navbar';
window.Vue.component('navbar', navbar);

import routerComponent	from './components/layout/router-component';
window.Vue.component('router-component', routerComponent);

import footerComponent	from './components/layout/footer-component';
window.Vue.component('footer-component', footerComponent);

import heroCarousel	from './components/carousel/hero-carousel/hero-carousel';
window.Vue.component('hero-carousel', heroCarousel);

//window.Vue.component('gallery', VueGallery);
//import VueGallery from 'vue-gallery';