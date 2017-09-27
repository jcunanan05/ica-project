<template>
  <div class="menu-list">
    <ul><slot></slot></ul>
  </div>
</template>

<script>
import MenuDropdown from './MenuDropdown'
export default {
  name: 'menu-list',
  components: {
    'menu-dropdown': MenuDropdown
  }
}
</script>