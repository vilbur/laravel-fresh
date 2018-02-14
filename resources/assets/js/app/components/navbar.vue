<template>

	<nav class="navbar is-transparent is-fixed-top is-centered">
		<div id="mainNav" class="navbar-menu nav-center" :class="{'is-active': navIsActive}">
			<div class="navbar-start">
				<router-link to="/"	class="navbar-item">Home</router-link>
				<router-link to="/bio"	class="navbar-item">About</router-link>
		   		<router-link to="/contact"	class="navbar-item">Contact</router-link>
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
