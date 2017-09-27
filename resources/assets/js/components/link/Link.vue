<template>
  <a @click="$emit('click')">
    <slot></slot>
  </a>
</template>

<script>
export default {
  name: 'link'
}
</script>