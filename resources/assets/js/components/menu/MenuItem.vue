<template>
  <aside class="menu-item">
    <li>
      <router-link :to="uri" exact>{{ text }}</router-link>
    </li>
  </aside>
</template>

<script>
export default {
  name: 'menu-item',
  props: {
    text: {
      type: String,
      require: true
    },
    uri: {
      type: String,
      require: true
    }
  }
}
</script>