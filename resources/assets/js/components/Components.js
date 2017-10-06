import Vue from 'vue';
import './button/Buttons.js';
import './icons/Icons.js';
import './link/Links.js';
import './modal/Modals.js';
import './form/Forms.js';

let Table = Vue.component('app-table',
  require('./Table.vue'));

let Card = Vue.component('card',
  require('./Card.vue'));

