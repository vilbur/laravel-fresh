

import VueRouter from 'vue-router';


const Home	= () => import('./app/views/home.vue');
const About	= () => import('./app/views/about.vue');


const routes = [
	{
		path:	'/',
		name:	'home',
		component:	Home
	},
	{
		path:	'/about',
		name:	'about',
		component:	About
	},
];


export default new VueRouter({
    routes,
	linkActiveClass: 'is-active'
});
 