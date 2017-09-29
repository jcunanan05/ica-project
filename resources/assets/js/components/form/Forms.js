import Vue from 'vue';


let Field = Vue.component('field', 
  require('./Field.vue'));

let Input = Vue.component('app-input', 
  require('./Input.vue'));

let Help = Vue.component('help', 
  require('./Help.vue'));


export {
  Field,
  Input
};