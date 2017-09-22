<template>
  <nav class="navbar" role="navigation">
    <div class="navbar-brand">
      <navbar-item uri="#/">
        <img src="images/icalogo.png" width="auto" height="25px">
      </navbar-item>

      <burger @click="toggleBurger()" />
    </div>


    <div class="navbar-menu"
      :class="{ 'is-active': showNavbarMenu }" >
      <div class="navbar-end">
        <navbar-item uri="#/">Home</navbar-item>
        <navbar-item uri="#/">About</navbar-item>
        <navbar-item uri="#/">Contact</navbar-item>


        <template v-if="! auth.isLoggedIn()">
          <navbar-item uri="#/login">Login</navbar-item>
        </template>
        
        <template v-else>
          <navbar-item uri="#/">
            {{ auth.user['first_name'] }}
          </navbar-item>

          <navbar-item @click="logout()">
            Logout
          </navbar-item>

          <form id="logout" method="POST" action="/api/logout" style="display: none;">
            <input type="hidden" name="_token" :value="token.content">
          </form>
        </template>
      </div>
    </div>

  </nav>
</template>

<script>
import auth from '../utilities/auth/Auth.js';
import NavbarBurger from './navbar/Burger.vue';
import NavbarItem from './navbar/NavbarItem.vue';
import { token } from '../bootstrap.js';


export default {
  name: 'app-navbar',

  components: {
    'burger': NavbarBurger,
    'navbar-item': NavbarItem
  },
  
  data: () => ({
    auth,
    showNavbarMenu: false,
    token
  }),

  methods: {
    logout() {
      document.querySelector('#logout').submit();
    },

    toggleBurger() {
      this.showNavbarMenu = ! this.showNavbarMenu;
    }
  }
}
</script>