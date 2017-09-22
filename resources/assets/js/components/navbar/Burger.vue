<template>
  <button class="button navbar-burger" @click="$emit('click')">
    <span></span>
    <span></span>
    <span></span>
  </button>
</template>

<script>
export default {
  name: 'navbar-burger',
}
</script>