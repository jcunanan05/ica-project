<template>
  <div class="menu" id="menu">
    <slot></slot>
  </div>
</template>

<script>
import MenuLabel from './MenuLabel.vue'
import MenuList from './MenuList.vue'


export default {
  name: 'app-menu',
  components: {
    'menu-list': MenuList,
    'menu-item': MenuLabel
  }
}
</script>


<style>
#menu{
  padding: 15px;
  height: 100%;  
  border: solid 1px 1px 1px 1px #888;
  
}
</style>