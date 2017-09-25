<template>
  <button :class="'button ' + otherClass"
    @click="$emit('click')" >
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: 'app-button',

  props: {
    otherClass: {
      type: String,
      default: ''
    }
  }
}
</script>