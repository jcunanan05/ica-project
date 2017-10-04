import Vue from 'vue';

let DashList = Vue.component('dash-list',
  require('./DashList.vue')
)

let DashItem = Vue.component('dash-item',
  require('./DashItem.vue')
)

export {
  DashList,
  DashItem
};
