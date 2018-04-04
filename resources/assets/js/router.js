import VueRouter from 'vue-router';


const Home	= () => import('./views/home.vue');
const About	= () => import('./views/about.vue');
const Contact	= () => import('./views/contact.vue');


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
	{
		path:	'/contact',
		name:	'contact',
		component:	Contact
	},	
];


export default new VueRouter({
    routes,
	linkActiveClass: 'is-active'
});
