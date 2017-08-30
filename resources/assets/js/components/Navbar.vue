<template>
  <div>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	  <a class="navbar-brand" href="#">ICA</a>

  	  <burger />


  	  <div class="collapse navbar-collapse" id="navbarMenu">
  	  	<ul class="navbar-nav">
  	  	  <navbar-link uri="#" text="Home" />
  	  	  <navbar-link uri="#" text="About" />
  	  	  <navbar-link uri="#" text="Contact" />
  	  	</ul>


  	  	<ul class="nav navbar-nav ml-auto">
  	  	  <navbar-link uri="#/login" text="Login" v-if="! user"/>
					
					<navbar-link v-else uri="#/" :text="user['first_name']" />
  	  	</ul>
  	  </div>

  	</nav>
  </div>
</template>

<script>
import Vue from 'vue';

Vue.component('burger', {
	template: `
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
  	    	<span class="navbar-toggler-icon"></span>
  	  	</button>
	`
});

Vue.component('navbar-link', {
	template: `
		<a :href="uri" class="nav-item nav-link">{{ text }}</a>
	`,
	props: ['uri', 'text']
})

export default {
	name: 'app-navbar',

	props: {
		user: { type: Object }
	}
}
</script>