<template>
  <a :href="uri" 
    class="navbar-item" 
    @click="$emit('click')" >
    <slot></slot>
  </a>
</template>

<script>
export default {
  name: 'navbar-item',

  props: {
    uri: {
      type: String
    }
  }
}
</script>

