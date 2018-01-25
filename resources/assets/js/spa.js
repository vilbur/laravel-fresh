
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


/* MODULES */
import VueRouter from 'vue-router';

Vue.use(VueRouter);

/* ROUTES */
import spa	from './views/spa';
import home	from './views/home';
import about	from './views/about';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
        },
        {
            path: '/about',
            name: 'about',
            component: about,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { spa },
    router,
});

