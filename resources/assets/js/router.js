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


const router = new VueRouter({
    routes,
	linkActiveClass: 'is-active',
});


/* === HOOKS === */

/* set loading true when route start loading
 */
router.beforeEach((to, from, next) => {
	router.app.loading = true;
	next();
});
/* set loading false when route finish loading
 */
router.afterEach((to, from, next) => {
	router.app.loading = false;
});

export default router;