<template>
  <p class="menu-label" v-text="text"></p>
</template>

<script>
export default {
  name: 'menu-label',
  props: {
    text: {
      type: String,
      required: true
    }
  }
}
</script>