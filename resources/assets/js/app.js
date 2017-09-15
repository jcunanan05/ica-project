
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import router from './routes/routes.js';
import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue'
import User from './models/User.js';
import auth from './utilities/auth/Auth.js';

require('./bootstrap');

// window.Vue = require('vue');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.config.devtools = true;
Vue.use(VueRouter);


const app = new Vue({
  el: '#app',
  router,
  render: h => h(App)
});
