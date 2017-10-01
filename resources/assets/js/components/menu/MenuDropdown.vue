<template>
  <li>
    <router-link :to="uri">
      {{ text }}
    </router-link>
    <ul><slot></slot></ul>
  </li>
</template>

<script>
import MenuItem from './MenuItem.vue'
export default {
  name: 'menu-dropdown',
  props: {
    uri: {
      type: String,
      required: false
    },
    text: {
      type: String,
      required: true
    }
  },
  components: {
    'menu-item': MenuItem
  }
}
</script>