<template>
	<nav class="navbar is-transparent is-fixed-top">
		<div class="navbar-brand">
			<a class="navbar-item" href="https://bulma.io">
				<img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
			</a>
			<div class="navbar-burger burger" @click="toggleMenu" :class="{'is-active': navIsActive}" data-target="mainNav">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<div id="mainNav" class="navbar-menu" :class="{'is-active': navIsActive}">
			<div class="navbar-start">
		   		<router-link to="/"	class="navbar-item">Home</router-link>
				<router-link to="/about"	class="navbar-item">About</router-link>
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link" href="/documentation/overview/start/">
					  Docs
					</a>
				</div>
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
      }
    },
    methods: {
      toggleMenu: function () {
        this.navIsActive = !this.navIsActive
      }
    }
  }
</script>
