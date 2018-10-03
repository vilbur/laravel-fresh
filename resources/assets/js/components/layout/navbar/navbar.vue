<template>
	<nav class="navbar is-transparent is-fixed-top is-centered">
		
		<div class="navbar-brand">
			<a class="navbar-item" href="https://bulma.io">
				laravel-fresh
			</a>
		
			<a role="button" class="navbar-burger burger" @click="navIsActive = !navIsActive" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>
  
		<div class="navbar-menu" :class="{'is-active': navIsActive}">
			<div class="navbar-start">
				<router-link to="/"	class="navbar-item">Home</router-link>
				<router-link to="/About"	class="navbar-item">About</router-link>
		   		<router-link to="/Contact"	class="navbar-item">Contact</router-link>
			</div>
		</div>
		
	</nav>
</template>

<script>
  export default {
    name: 'navbar',
    data () {
		return {
			navIsActive: false
		};
    },
    methods: {
		toggleMenu: function () {
			this.navIsActive = !this.navIsActive;
		}
    }
  };
</script>
