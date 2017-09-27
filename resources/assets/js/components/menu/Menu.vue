<template>
  <div class="menu">
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
