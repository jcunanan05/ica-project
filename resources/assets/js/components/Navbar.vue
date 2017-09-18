<template>
  <div id="home">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <a class="navbar-brand" href="#/"><img src="images/icalogo.png" width="auto" height="25px"></a>

        <burger />

        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav">
            <template v-if="! auth.isLoggedIn()">
              <navbar-link uri="#" text="Home" />
              <navbar-link uri="#" text="About" />
              <navbar-link uri="#" text="Contact" />
            </template>
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <template v-if="! auth.isLoggedIn()">
              <navbar-link uri="#/login" text="Login" role="button" class="btn btn-outline-info" />
            </template>

            <template v-else>
              <navbar-link uri="#/" :text="auth.user['first_name']" />
              <a href="" class="nav-item nav-link color-font" @click="logout()">Logout</a>

              <form id="logout" method="POST" action="/api/logout" style="display: none;">
              </form>
            </template>
          </ul>
          
        </div>
      </div>
    </nav>

  </div>
</template>

<script>
import Vue from 'vue';
import auth from '../utilities/auth/Auth.js';


export default {
  name: 'app-navbar',
  
  data: () => ({
    auth
  }),

  methods: {
    logout() {
      document.querySelector('#logout').submit();
    }
  }
}


Vue.component('burger', {
	template: `
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
  	    	<span class="navbar-toggler-icon"></span>
  	  	</button>
	`
});

Vue.component('navbar-link', {
	template: `
		<a :href="uri" class="nav-item nav-link color-font" :role="role" >{{ text }}</a>
	`,
	props: ['uri', 'text', 'role']
})

// Vue.component('navbar-btn', {
//   template: `
    
//     <a :href="uri"class= btn btn-warning> {{ text }} </a>
//   `,
//   props: ['uri', 'text']
// })
</script>