<template>
  <nav class="navbar" role="navigation">
    <div class="navbar-brand">
      <a href="#/" class="navbar-item">
        <img src="images/icalogo.png" width="auto" height="25px">
      </a>

      <button class="button navbar-burger" @click="toggleBurger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>


    <div class="navbar-menu"
      :class="{ 'is-active': burgerToggled }" >
      <div class="navbar-end">
        <a class="navbar-item">
          Home
        </a>
        <a class="navbar-item">
          About
        </a>
        <a class="navbar-item">
          Contact
        </a>

        <template v-if="! auth.isLoggedIn()">
          <a href="#/login" class="navbar-item">
            Login
          </a>
        </template>
        
        <template v-else>
          <a href="#/" class="navbar-item">
            {{ auth.user['first_name'] }}
          </a>

          <a href="" class="navbar-item" @click="logout()">Logout</a>

          <form id="logout" method="POST" action="/api/logout" style="display: none;">
          </form>
        </template>
      </div>
    </div>

  </nav>
</template>

<script>
import Vue from 'vue';
import auth from '../utilities/auth/Auth.js';


export default {
  name: 'app-navbar',
  
  data: () => ({
    auth,
    burgerToggled: false
  }),

  methods: {
    logout() {
      document.querySelector('#logout').submit();
    },

    toggleBurger() {
      this.burgerToggled = ! this.burgerToggled;
    }
  }
}
</script>