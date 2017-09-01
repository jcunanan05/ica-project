<template lang="html">
  <div id="app">
    <app-navbar v-if="user.isEmpty()" />
    <app-navbar v-else :user="user.getInfo()" />
    
    
    <router-view @userLoggedIn="login"></router-view>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import User from './models/User.js';

export default {
  name: 'app',
  
  data: () => ({
    user: new User()
  }),

	components: {
		'app-navbar': Navbar
  },
  
  methods: {
    login(userDetails) {
      this.user.setInfo(userDetails);
    }

  },

  beforeMount() {
    this.user.getAuthenticated()
      .then(response => console.log(response))
      .catch(errors => console.log(errors));
  }

}
</script>