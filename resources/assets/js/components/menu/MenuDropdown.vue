<template>
  <li>
    <a disabled>{{ text }}</a>
    <ul><slot></slot></ul>
  </li>
</template>

<script>
import MenuItem from './MenuItem.vue'
export default {
  name: 'menu-dropdown',
  props: {
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