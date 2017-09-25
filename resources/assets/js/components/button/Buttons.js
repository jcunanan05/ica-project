import Vue from 'vue';


let Button = Vue.component('app-button', 
  require('../Button.vue'));

let EditButton = Vue.component('edit-button', 
  require('./EditButton.vue'));

let DeleteButton = Vue.component('delete-button', 
  require('./DeleteButton.vue'));


export {
  Button,
  EditButton,
  DeleteButton
};