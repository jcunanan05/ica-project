import Vue from 'vue';

let CircleSpin = Vue.component('circle-spin',
  require('./CircleSpin.vue'));

let Pencil = Vue.component('pencil',
  require('./Pencil.vue'));

let Trash = Vue.component('trash',
  require('./Trash.vue'));

export {
  CircleSpin,
  Pencil,
  Trash
};
