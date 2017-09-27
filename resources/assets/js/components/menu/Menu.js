import Vue from 'vue';
let Menu = Vue.component(
  'app-menu',
  require('./Menu.vue')
);

let MenuList = Vue.component(
  'menu-list',
  require('./MenuList.vue')
)

let MenuLabel = Vue.component(
  'menu-label',
  require('./MenuLabel.vue')
)

let MenuDropdown = Vue.component(
  'menu-dropdown',
  require('./MenuDropdown.vue')
)

let MenuItem = Vue.component(
  'menu-item',
  require('./MenuItem.vue')
)

export {
  Menu,
  MenuList,
  MenuLabel,
  MenuDropdown,
  MenuItem
}

